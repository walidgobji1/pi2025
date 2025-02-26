<?php

namespace App\Service;

use App\Entity\Evaluation;
use App\Entity\Instructeur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class EvaluationService
{
    private $httpClient;
    private $entityManager;
    private $apiKey;
    private $cvBasePath = 'C:/Users/LENOVO/Desktop/PIDEV/pi2025/public/uploads/cv/'; // Base path for CVs

    public function __construct(HttpClientInterface $httpClient, EntityManagerInterface $entityManager, string $affindaApiKey)
    {
        $this->httpClient = $httpClient;
        $this->entityManager = $entityManager;
        $this->apiKey = $affindaApiKey;
    }

    public function createEvaluationFromCv(Instructeur $instructeur): void
    {
        $cvFilename = $instructeur->getCv(); // Get the filename (e.g., 'test_cv.pdf')
        if (!$cvFilename) {
            return; // Exit if no CV filename is provided
        }

        // Construct the full path
        $cvPath = $this->cvBasePath . $cvFilename;

        if (!file_exists($cvPath)) {
            return; // Exit if the file doesn’t exist at the constructed path
        }

        try {
            $response = $this->httpClient->request('POST', 'https://api.affinda.com/v1/resumes', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'multipart/form-data',
                ],
                'body' => [
                    'file' => fopen($cvPath, 'r'),
                ],
            ]);

            $cvData = $response->toArray();
            $evaluationData = $this->parseAffindaResponse($cvData);

            $evaluation = new Evaluation();
            $evaluation->setInstructor($instructeur);
            $evaluation->setDateCreation(new \DateTime());
            $evaluation->setEducation($evaluationData['education'] ?? null);
            $evaluation->setYearsOfExperience($evaluationData['yearsOfExperience'] ?? null);
            $evaluation->setSkills($evaluationData['skills'] ?? null);
            $evaluation->setCertifications($evaluationData['certifications'] ?? null);
            $evaluation->setScore(1);
            $evaluation->setNiveau('test');

            $this->entityManager->persist($evaluation);
            $this->entityManager->flush();
        } catch (\Exception $e) {
            // Log error if needed, e.g., with a logger service
        }
    }

    private function parseAffindaResponse(array $cvData): array
    {
        $data = $cvData['data'] ?? [];
        $workExperience = $data['workExperience'] ?? [];

        if (empty($workExperience)) {
            foreach ($data['sections'] ?? [] as $section) {
                if (in_array($section['sectionType'], ['WorkExperience', 'Projects'])) {
                    $experience = $this->extractExperienceFromSection($section['text']);
                    if ($experience) {
                        $workExperience[] = $experience;
                    }
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

    private function extractExperienceFromSection(string $text): ?array
    {
        $pattern = '/(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[a-z]*\s+\d{2,4}(?:\s*-\s*(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[a-z]*\s*\d{2,4})?|(?:\d{4}-\d{2})\s*-\s*(?:\d{4}-\d{2})?/i';
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
        $dateStr = trim($dateStr);
        if (preg_match('/^\d{4}-\d{2}$/', $dateStr)) {
            return "$dateStr-01";
        }

        $date = \DateTime::createFromFormat('M y', $dateStr) ?: \DateTime::createFromFormat('F Y', $dateStr);
        if ($date === false) {
            return '';
        }

        if ($date->format('Y') < 2000) {
            $date->modify('+2000 years');
        }
        return $date->format('Y-m-01');
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

                if ($end < $start) {
                    continue;
                }

                $interval = $start->diff($end);
                $totalMonths += $interval->y * 12 + $interval->m;
            } catch (\Exception $e) {
                continue;
            }
        }

        return $totalMonths > 0 ? round($totalMonths / 12, 2) : null;
    }
}