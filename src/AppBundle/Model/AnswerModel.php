<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 10.01.17
 * Time: 16:55
 */

namespace AppBundle\Model;


use AppBundle\Entity\Answers;
use AppBundle\Repository\AnswersRepository;

class AnswerModel
{
    private $entityManager;
    private $answerRepository;

    public function __construct(EntityManager $entityManager, AnswersRepository $answersRepository)
    {
        $this->entityManager = $entityManager;
        $this->entityManager=$answersRepository;
    }

    public function save(Answers $answers){
        $this->entityManager->persist($answers);
        $this->entityManager->flush();
    }

    public function addAnswertoQuestion($questionId){
        return $this->answerRepository->getAllAnswersForQuestions($questionId);
    }

}