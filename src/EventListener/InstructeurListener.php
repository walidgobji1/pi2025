<?php

namespace App\EventListener;

use App\Entity\Instructeur;
use App\Service\EvaluationService;
use Doctrine\ORM\Event\PostPersistEventArgs; // Use the specific event args class

class InstructeurListener
{
    private $evaluationService;

    public function __construct(EvaluationService $evaluationService)
    {
        $this->evaluationService = $evaluationService;
    }

    public function postPersist(PostPersistEventArgs $event): void
    {
        $entity = $event->getObject();

        // Check if the persisted entity is an Instructeur
        if ($entity instanceof Instructeur) {
            $this->evaluationService->createEvaluationFromCv($entity);
        }
    }
}