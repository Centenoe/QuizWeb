<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 8:03 PM
 */

class form {

    private $quizId;
    private $quizName;
    private $questions;

    public function __construct($quizId, $quizName) {
        $this->quizId = $quizId;
        $this->quizName = $quizName;
        $this->questions = array();
    }

    public function addQuestion($question) {
        $this->questions[] = $question;
        return true;
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