<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Formation;
use App\Entity\Apprenant;


use App\Form\AvisType;
use App\Entity\FormationScore;
use App\Entity\User;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManager;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\FormationScoreRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Security;


#[Route('/avis')]
final class AvisController extends AbstractController
{
    #[Route('/{formationId<\d+>?1}', name: 'app_avis_index', methods: ['GET'])]
    public function index(int $formationId , AvisRepository $avisRepository, EntityManagerInterface $entityManager,Security $security): Response
    {
        // $user = $security->getUser();
        // $userId = ($user instanceof User) ? $user->getId() : 2; // ✅ Cast and check

        $avis = $entityManager->getRepository(Avis::class)->findBy(
            ['formation' => $formationId],
            ['id' => 'DESC']
        );

        return $this->render('avis/index.html.twig', [
            'avis' => $avis,
            'formationId' => $formationId,
            // 'userId' => $userId,
        ]);
    }

    #[Route('/add/{formationId}', name: 'app_avis_add', methods: ['GET', 'POST'])]
    public function addAvis(int $formationId, Request $request, EntityManagerInterface $entityManager, FormationScoreRepository $formationScoreRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour ajouter un avis.');
            return $this->redirectToRoute('app_login'); // Redirect to login page
        }
    
        if (!in_array('ROLE_APPRENANT', $user->getRoles())) {
            $this->addFlash('error', 'Seuls les apprenants peuvent ajouter un avis.');
            return $this->redirectToRoute('app_avis_index', ['formationId' => $formationId]);
        }
    
        $formation = $entityManager->getRepository(Formation::class)->find($formationId);
        if (!$formation) {
            $this->addFlash('error', 'Formation non trouvée.');
            return $this->redirectToRoute('homepage');
        }

        // Create the Avis entity
        $avi = new Avis();
        $avi->setApprenant($user);
        $avi->setFormation($formation);

        //handel creation formationscore 
        // Check if FormationScore exists
        $formationScore = $formationScoreRepository->findOneBy(['formation' => $formation]);
        if (!$formationScore) {
            // Create new FormationScore if it doesn't exist
            $formationScore = new FormationScore();
            $formationScore->setFormation($formation);
            $formationScore->setNombreAvis(0);
            $formationScore->setNoteMoyenne(0);
            $formationScore->setClassement(0); // You can update ranking logic later
            

            $entityManager->persist($formationScore);
        }
        $avi->setFormationScore($formationScore);



        // Create and handle the form
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avi->getNote();
            $count = $formationScore->getNombreAvis();
            if ($count > 0) {
                $newAverage = ($formationScore->getNoteMoyenne() * $count + $avi->getNote()) / ($count + 1);
            } else {     
                $newAverage = $avi->getNote();
            }
            $formationScore->setNoteMoyenne($newAverage);
            $formationScore->setNombreAvis($count + 1);
            // Update classement
            $classement = $formationScoreRepository->calculateClassement($formationScore);
            $formationScore->setClassement($classement);
            try {
                
                $entityManager->persist($avi);
                $entityManager->flush();

                
                $this->addFlash('success', 'Votre avis a été ajouté avec succès.');

                // Redirect to the list of reviews
                return $this->redirectToRoute('app_avis_index', ['formationId' => $formationId]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'ajout de l\'avis.');
            }
        }

        // Render the form page
        return $this->render('avis/new.html.twig', [
            'form' => $form->createView(),
            'formationId' => $formationId,
            // 'userId' => $userId,
        ]);
    }





    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager, FormationScoreRepository $formationScoreRepository): Response
    {
        // Get the current formation associated with the avis
        $formation = $avi->getFormation();
        $formationScore = $formationScoreRepository->findOneBy(['formation' => $formation]);
        $oldNote = $avi->getNote(); // The old rating (before the edit)
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Recalculate the average after the review is updated
            $count = $formationScore->getNombreAvis();

            $newNote = $avi->getNote(); // The new rating

            // Calculate the new average
            if ($count > 0) {
                // Recalculate the total score
                $newTotal = ($formationScore->getNoteMoyenne() * $count) - $oldNote + $newNote;
                $newAverage = $newTotal / $count;
            } else {
                // If no reviews yet, the new note is the average
                $newAverage = $newNote;
            }

            // Update the FormationScore with the new values
            $formationScore->setNoteMoyenne($newAverage);

            // Persist the updated FormationScore
            $entityManager->persist($formationScore);
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', ['formationId' => $avi->getFormation()->getId()], Response::HTTP_SEE_OTHER);

        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager , FormationScoreRepository $formationScoreRepository): Response
    {
        $formation = $avi->getFormation();
        $formationScore = $formationScoreRepository->findOneBy(['formation' => $formation]);
        // Get the current number of reviews and the average score
        $count = $formationScore->getNombreAvis();
        $oldNote = $avi->getNote(); 
        if ($count > 1) {
      
            $newTotal = ($formationScore->getNoteMoyenne() * $count) - $oldNote;
            $newAverage = $newTotal / ($count - 1);
        } else {
            $newAverage = 0;
        }
    
        // Update the FormationScore with the new values
        $formationScore->setNoteMoyenne($newAverage);
        $formationScore->setNombreAvis($count - 1); 
    
        // Persist the updated FormationScore
        $entityManager->persist($formationScore);
        // CSRF validation
        if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->request->get('_token'))) {
            // Delete the Avis entity
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_index', ['formationId' => $avi->getFormation()->getId()], Response::HTTP_SEE_OTHER);

    }


}
