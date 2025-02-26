<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Repository\InstructeurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class EvaluationController extends AbstractController
{
    #[Route('/evaluate-instructor/{id}', name: 'evaluate_instructor')]
    public function evaluateInstructor(
        int $id,
        InstructeurRepository $instructeurRepository,
        EntityManagerInterface $em,
        HttpClientInterface $httpClient
    ): Response {
        // Fetch instructor
        $instructor = $instructeurRepository->find($id);
        if (!$instructor) {
            throw $this->createNotFoundException('Instructeur non trouvé');
        }

        // Get CV path
        $cvPath = $instructor->getCv();
        if (!$cvPath || !file_exists($cvPath)) {
            throw $this->createNotFoundException('CV non trouvé pour cet instructeur');
        }

        // Affinda API key from environment
        $apiKey = $this->getParameter('affinda_api_key');

        // Call Affinda API to extract CV data
        try {
            $response = $httpClient->request('POST', 'https://api.affinda.com/v1/resumes', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'multipart/form-data',
                ],
                'body' => [
                    'file' => fopen($cvPath, 'r'),
                ],
            ]);

            $cvData = $response->toArray();
        } catch (\Exception $e) {
            throw new \RuntimeException('Erreur lors de l\'appel à l\'API Affinda: ' . $e->getMessage());
        }

        // Parse Affinda response
        $evaluationData = $this->parseAffindaResponse($cvData);

        // Create and populate Evaluation entity
        $evaluation = new Evaluation();
        $evaluation->setInstructor($instructor);
        $evaluation->setDateCreation(new \DateTime());
        $evaluation->setEducation($evaluationData['education'] ?? null);
        $evaluation->setYearsOfExperience($evaluationData['yearsOfExperience'] ?? null);
        $evaluation->setSkills($evaluationData['skills'] ?? null);
        $evaluation->setCertifications($evaluationData['certifications'] ?? null);
        $evaluation->setScore(1);
        $evaluation->setNiveau("test");




        // Persist to database
        $em->persist($evaluation);
        $em->flush();

        // Render result
        return $this->render('evaluation/index.html.twig', [
            'evaluation' => $evaluation,
            'instructor' => $instructor,
        ]);
    }

    private function parseAffindaResponse(array $cvData): array
    {
        $data = $cvData['data'] ?? [];

        return [
            'education' => implode(', ', array_map(fn($edu) => $edu['degree'] ?? $edu['qualification'] ?? '', $data['education'] ?? [])),
            'yearsOfExperience' => $this->calculateTotalExperience($data['workExperience'] ?? []),
            'skills' => implode(', ', array_map(fn($skill) => is_array($skill) ? ($skill['name'] ?? '') : $skill, $data['skills'] ?? [])),
            'certifications' => implode(', ', array_map(fn($cert) => $cert['name'] ?? '', $data['certifications'] ?? [])),
        ];
    }

    private function calculateTotalExperience(array $workExperience): ?float
    {
        $totalMonths = 0;
    
        foreach ($workExperience as $job) {
            try {
                // Si startDate est vide, ignorer cet emploi
                if (empty($job['startDate'])) {
                    continue;
                }
    
                // Parse la date de début avec gestion des formats multiples
                $start = \DateTime::createFromFormat('!Y-m-d', $job['startDate']) ?: new \DateTime($job['startDate']);
    
                // Si endDate est vide,假设 emploi en cours (date actuelle)
                if (empty($job['endDate'])) {
                    $end = new \DateTime(); // Aujourd'hui
                } else {
                    $end = \DateTime::createFromFormat('!Y-m-d', $job['endDate']) ?: new \DateTime($job['endDate']);
                }
    
                // Calculer la différence
                $interval = $start->diff($end);
                $totalMonths += $interval->y * 12 + $interval->m;
    
            } catch (\Exception $e) {
                // Log l'erreur si nécessaire, mais continuer avec les autres entrées
                continue;
            }
        }
    
        // Retourner les années en flottant (ex. 0.5 pour 6 mois) ou null si aucune expérience
        return $totalMonths > 0 ? $totalMonths / 12 : null;
    }
}
