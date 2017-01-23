<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 08.01.17
 * Time: 19:20
 */

namespace AppBundle\Model;


use AppBundle\Entity\Answers;
use AppBundle\Entity\Questions;
use AppBundle\Repository\AnswersRepository;
use AppBundle\Repository\QuestionsRepository;
use Doctrine\ORM\EntityManager;

class QuestionsModel
{

private $entityManager;
private $questionRepository;
private $answerRepository;

public function __construct(EntityManager $entityManager ,QuestionsRepository $questionRepository, AnswersRepository $answersRepository)
{
    $this->entityManager = $entityManager;
    $this->questionRepository = $questionRepository;
    $this->answerRepository = $answersRepository;
}

    /**
     * @param Questions $questions
     * @param Answers $answers
     */
    public function save(Questions $questions, Answers $answers){
    $this->entityManager->persist($questions,$answers);
    $this->entityManager->flush();

}
public function getAllQuestions(){
    return $this->questionRepository->findAll();
}
}