<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 8:21 PM
 */

class Question {

    private $questionId;
    private $questionS;


    public function __construct($id, $s) {
        $this->questionId = $id;
        $this->questionS = $s;
    }

    /**
     * @return mixed
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * @param mixed $questionId
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }

    /**
     * @return mixed
     */
    public function getQuestionS()
    {
        return $this->questionS;
    }

    /**
     * @param mixed $questionS
     */
    public function setQuestionS($questionS)
    {
        $this->questionS = $questionS;
    }

    /**
     * @return mixed
     */
    public function getQuestionAnswerId()
    {
        return $this->questionAnswerId;
    }

    /**
     * @param mixed $questionAnswerId
     */
    public function setQuestionAnswerId($questionAnswerId)
    {
        $this->questionAnswerId = $questionAnswerId;
    }


}