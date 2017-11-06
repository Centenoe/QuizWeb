<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 8:03 PM
 */

class form {

    private $quizId;
    private $questionId;
    private $questionGuess;

    /**
     * form constructor.
     * @param $quizId
     * @param $questId
     * @param $questGuess
     */
    public function __construct($quizId, $questId, $questGuess) {
        $this->quizId = $quizId;
        $this->questionId = $questId;
        $this->questionGuess = $questGuess;
    }

    /**
     * @return mixed
     */
    public function getQuizId() {
        return $this->quizId;
    }

    /**
     * @param $quizId
     */
    public function setQuizId($quizId) {
        $this->quizId = $quizId;
    }

    /**
     * @return mixed
     */
    public function getQuestionId() {
        return $this->questionId;
    }

    /**
     * @param $questionId
     */
    public function setQuestionId($questionId) {
        $this->questionId = $questionId;
    }

    /**
     * @return mixed
     */
    public function getQuestionGuess() {
        return $this->questionGuess;
    }

    /**
     * @param $questionGuess
     */
    public function setQuestionGuess($questionGuess) {
        $this->questionGuess = $questionGuess;
    }
}