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
    private $affindaapiKey;
    private $flaskapikey;
    private $cvBasePath = 'C:/Users/LENOVO/Desktop/PIDEV/pi2025/public/uploads/cv/'; // Base path for CVs

    public function __construct(HttpClientInterface $httpClient, EntityManagerInterface $entityManager, string $affindaApiKey , string $flaskApiKey )
    {
        $this->httpClient = $httpClient;
        $this->entityManager = $entityManager;
        $this->affindaapiKey = $affindaApiKey;
        $this->flaskapikey= $flaskApiKey;
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
                    'Authorization' => 'Bearer ' . $this->affindaapiKey,
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

    // helper functions to extract data from data responce of the affinda api 

    // Updated method to estimate education level from Affinda education data
    private function estimateEducationLevel(?array $education): int
    {
        if (empty($education)) return 1; // Default to basic (1) if no education
        foreach ($education as $edu) {
            $level = $edu['accreditation']['educationLevel'] ?? '';
            if (strpos($level, 'bachelors') !== false) {
                return 2; // Intermediate (Bachelor’s)
            } elseif (strpos($level, 'masters') !== false || strpos($level, 'phd') !== false) {
                return 3; // Advanced (Master’s or PhD)
            }
        }
        return 1; // Default to basic if no match
    }

    
    // Updated method to count items, handling Affinda’s arrays directly
    private function countItems($items): int
    {
        if (empty($items)) return 0;
        if (is_array($items)) {
            return count($items); // Count array elements for skills/certifications
        }
        $itemsArray = array_filter(explode(',', $items)); // Split by commas and remove empty entries
        return count($itemsArray);
    }

    // Updated method to parse Affinda response for Flask API data
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
            'education' => implode(', ', array_map(fn($edu) => $edu['accreditation']['education'] ?? '', $data['education'] ?? [])),
            'yearsOfExperience' => $this->calculateTotalExperience($workExperience) ?? $data['totalYearsExperience'], // Use Affinda’s totalYearsExperience as fallback
            'skills' => $data['skills'] ?? [], // Return as array for counting
            'certifications' => $data['certifications'] ?? [], // Return as array for counting
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