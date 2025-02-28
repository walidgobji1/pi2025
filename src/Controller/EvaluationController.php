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

    // Combine workExperience and relevant sections
    $workExperience = $data['workExperience'] ?? [];
    foreach ($data['sections'] ?? [] as $section) {
        if (in_array($section['sectionType'], ['WorkExperience', 'Projects'])) {
            // Extract dates and details from section text
            $experience = $this->extractExperienceFromSection($section['text']);
            if ($experience) {
                $workExperience[] = $experience;
            }
        }
    }

    return [
        'education' => implode(', ', array_map(fn($edu) => $edu['degree'] ?? $edu['qualification'] ?? '', $data['education'] ?? [])),
        'yearsOfExperience' => $this->calculateTotalExperience($workExperience),
        'skills' => implode(', ', array_map(fn($skill) => is_array($skill) ? ($skill['name'] ?? '') : $skill, $data['skills'] ?? [])),
        'certifications' => implode(', ', array_map(fn($cert) => $cert['name'] ?? '', $data['certifications'] ?? [])),
    ];
}

// helper functions to extract years of experiences from projects 
private function extractExperienceFromSection(string $text): ?array
{
    // Simple regex to find date ranges like "Mar 23 - Aug 23" or "Feb 24"
    $pattern = '/(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s+\d{2}(?:\s*-\s*(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)?\s*\d{2})?/i';
    if (preg_match($pattern, $text, $matches)) {
        $dateRange = $matches[0];
        $parts = explode(' - ', $dateRange);

        $startDate = $this->normalizeDate($parts[0]);
        $endDate = isset($parts[1]) ? $this->normalizeDate($parts[1]) : null;

        return [
            'startDate' => $startDate,
            'endDate' => $endDate,
            'description' => $text,
        ];
    }
    return null;
}
private function normalizeDate(string $dateStr): string
{
    // Convert "Mar 23" to "2023-03-01"
    $date = \DateTime::createFromFormat('M y', trim($dateStr));
    if ($date === false) {
        return ''; // Invalid date, handle gracefully
    }
    // Assuming years like "23" are 2023, adjust if CV spans earlier decades
    if ($date->format('Y') < 2000) {
        $date->modify('+2000 years');
    }
    return $date->format('Y-m-01'); // Use first of month for simplicity
}

private function calculateTotalExperience(array $workExperience): ?float
{
    $totalMonths = 0;

    foreach ($workExperience as $job) {
        try {
            if (empty($job['startDate'])) {
                continue;
            }

            $start = new \DateTime($job['startDate']);
            $end = empty($job['endDate']) ? new \DateTime() : new \DateTime($job['endDate']);

            $interval = $start->diff($end);
            $totalMonths += $interval->y * 12 + $interval->m;
        } catch (\Exception $e) {
            continue; // Skip invalid dates
        }
    }

    return $totalMonths > 0 ? $totalMonths / 12 : null;
}

  // function for the dashboard admin 

    #[Route('/admin/evaluations', name: 'admin_evaluations')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Accès réservé aux administrateurs.');
        }

        // Fetch all evaluations with their associated instructors using Doctrine
        $evaluations = $entityManager->getRepository(Evaluation::class)->findAll();

        // Optionally, sort evaluations by dateCreation in descending order
        usort($evaluations, function ($a, $b) {
            return $b->getDateCreation() <=> $a->getDateCreation();
        });

        return $this->render('admin/evaluations/index.html.twig', [
            'evaluations' => $evaluations,
        ]);
    }
    #[Route('/admin/evaluation/{id}', name: 'admin_evaluation_details')]
public function showDetails(int $id, EntityManagerInterface $entityManager): Response
{
    $evaluation = $entityManager->getRepository(Evaluation::class)->find($id);

    if (!$evaluation) {
        throw $this->createNotFoundException('Évaluation non trouvée.');
    }

    return $this->render('admin/evaluations/details.html.twig', [
        'evaluation' => $evaluation,
    ]);
}
}
