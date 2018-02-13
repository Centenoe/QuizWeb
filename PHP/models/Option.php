<?php
/**
 * User: Joe matteson
 * Date: 1/3/2018
 * Time: 7:46 PM
 */

class Option
{

    // --- Fields --- //
    private $optionId = 0;
    private $optionS = "";
    private $isAnswer = false;
    private $reason = "";

    /**
     * Option constructor.
     *
     * @param $optionId id of that unique option
     * @param $optionS the actual string for the option
     */
    public function __construct($optionId, $optionS)
    {
        $this->optionId = $optionId;
        $this->optionS = $optionS;
    }

    /**
     * if this option is a Answer to a question
     *
     * @return true else false
     */
    public function isAnswer(): bool
    {
        return $this->isAnswer;
    }

    /**
     * set if this option is an answer or not
     *
     * @param bool $isAnswer to chang if it is or isnt
     */
    public function setIsAnswer(bool $isAnswer)
    {
        $this->isAnswer = $isAnswer;
    }

    /**
     * Get the reason for why this was the answer
     *
     * @return string the reason
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Set the reason for why this option is correct
     *
     * @param string $reason the reason
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;
    }


    /**
     * get the option id for this option
     *
     * @return the id in int format
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }

    /**
     * set the option id for the option
     *
     * @param $optionId new id for the option in int format
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }

    /**
     * get the options string
     *
     * @return the string of the option
     */
    public function getOptionS(): string
    {
        return $this->optionS;
    }

    /**
     * set the option for the string
     *
     * @param $optionS the new string for the option
     */
    public function setOptionS($optionS)
    {
        $this->optionS = $optionS;
    }
}