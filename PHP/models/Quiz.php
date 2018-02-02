<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 8:20 PM
 */

include_once "Question.php";

class Quiz
{
    // --- Fields --- //
    private $quizId = 0;
    private $quizName = "";
    private $questions;

    /**
     * Quiz constructor.
     *
     * @param $name string the name of the quiz
     */
    public function __construct($name)
    {
        $this->quizName = $name;
        $this->questions = array();
    }

    /**
     * add a question to the question array
     *
     * @param $question Question the question object that will be added
     * @return true if the question was added
     */
    public function addQuestion($question)
    {
        $this->questions[] = $question;
        return true;
    }

    /**
     * remove the question from the quiz
     *
     * @param $questionId int the question that will be removed
     */
    public function removeQuestion($questionId)
    {
        //TODO Fix this because this will not work
        foreach ($this->questions as $q) {
            if ($q->questionId === $questionId) {
                $this->questions[$q] = null;
            }
        }
    }

    /**
     * get the questions for the quiz
     *
     * @return array the question in the quiz
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * the amount of questions in the quiz
     *
     * @return int the amount of questions in the quiz
     */
    public function getAmntQuests()
    {
        return count($this->questions);
    }

    /**
     * @return mixed
     */
    public function getQuizId()
    {
        return $this->quizId;
    }

    /**
     * @param mixed $quizId
     */
    public function setQuizId($quizId)
    {
        $this->quizId = $quizId;
    }

    /**
     * @return string
     */
    public function getQuizName(): string
    {
        return $this->quizName;
    }

    /**
     * @param string $quizName
     */
    public function setQuizName(string $quizName)
    {
        $this->quizName = $quizName;
    }

    public function __toString()
    {
        $result =  "Quiz id: " . $this->quizId . "<br>" .
            "Quiz Name: " . $this->quizName;
        foreach ($this->getQuestions() as $q) {
            $result .= $q->getQuestionS() . "<br>";
        }
        return $result;
    }


}