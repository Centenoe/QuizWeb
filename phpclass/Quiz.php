<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 8:20 PM
 */

include_once "Question.php";
class Quiz {

    private $quizId;
    private $questions;

    /**
     * Quiz constructor.
     * @param $id
     */
    public function __construct($id) {
        $this->quizId = $id;
        $this->questions = array();
    }

    /**
     * @param $question
     */
    public function addQuestion($question) {
        $this->questions[] = $question;
    }

    /**
     * @param $questionId
     */
    public function removeQuestion($questionId) {
        foreach ($this->questions as $q) {
            if ($q->questionId === $questionId) {
                $this->questions[$p] = null;
            }
        }
    }
}