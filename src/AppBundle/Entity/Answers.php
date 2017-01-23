<?php

namespace AppBundle\Entity;

/**
 * Answers
 */
class Answers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var bool
     */
    private $isCorrect;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set answer
     *
     * @param string $answer
     *
     * @return Answers
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set isCorrect
     *
     * @param boolean $isCorrect
     *
     * @return Answers
     */
    public function setIsCorrect($isCorrect)
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    /**
     * Get isCorrect
     *
     * @return bool
     */
    public function getIsCorrect()
    {
        return $this->isCorrect;
    }
    /**
     * @var \AppBundle\Entity\Questions
     */
    private $question;


    /**
     * Set question
     *
     * @param \AppBundle\Entity\Questions $question
     *
     * @return Answers
     */
    public function setQuestion(\AppBundle\Entity\Questions $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \AppBundle\Entity\Questions
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
