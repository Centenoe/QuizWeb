<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 8:21 PM
 */

class Question {
    // --- Fields --- //
    private $questionId = 0;
    private $questionS = "";
    private $options;

    /**
     * Question constructor.
     *
     * @param $id int id for the quiz
     * @param $s string the name of the quiz
     */
    public function __construct($id, $s) {
        $this->questionId = $id;
        $this->questionS = $s;
        $this->options = array();
    }

    /**
     * add an option to the array
     *
     * @param $optionId int the id of the option
     * @param $optionS string the option name
     * @return bool true or false depending if the option was added
     */
    public function addOption($option) {
        $this->options[] = $option;
    }

    /**
     * get the question id
     *
     * @return int the id
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * set the question id
     *
     * @param $questionId int the new id of the question
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    }

    /**
     * get the options of the this question
     *
     * @return array of the options
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * get the questions name
     *
     * @return string the question name. ??
     */
    public function getQuestionS()
    {
        return $this->questionS;
    }

    /**
     * set the question
     *
     * @param $questionS string the new question that is bieng asked
     */
    public function setQuestionS($questionS)
    {
        $this->questionS = $questionS;
    }

    /**
     * get the amount of options the quesion has
     *
     * @return int the amount of options
     */
    public function getAmntOpts() {
        return count($this->getOptions());
    }

}