<?php
require 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create([
    'verify_peer' => false, // Ignore SSL certificate verification
    'verify_host' => false, // Ignore hostname verification for dev
]);
$response = $client->request('POST', 'https://localhost:5000/predict_cv_score', [
    'headers' => [
        'X-API-Key' => 'CleUnique123',
        'Content-Type' => 'application/json',
    ],
    'json' => [
        'education_level' => 2,
        'years_of_experience' => 5,
        'skills_count' => 6,
        'certifications_count' => 2,
    ],
]);

$data = $response->toArray();
echo "Score: " . $data['score'] . "\n";