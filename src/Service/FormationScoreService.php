<?php
// src/Service/FormationScoreService.php

namespace App\Service;

use App\Repository\FormationScoreRepository;

class FormationScoreService
{
    private $formationScoreRepository;

    // Inject the FormationScoreRepository into the service
    public function __construct(FormationScoreRepository $formationScoreRepository)
    {
        $this->formationScoreRepository = $formationScoreRepository;
    }

    // This method will return all formation scores
    public function getAllScores()
    {
        return $this->formationScoreRepository->findAll();
    }
}
