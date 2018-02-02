<?php
/**
 * User: Joe matteson
 * Date: 1/3/2018
 * Time: 7:46 PM
 */

class Option
{
    private $optionId;
    private $optionS;
    private $isAnswer = false;

    public function __construct($optionId, $optionS)
    {
        $this->optionId = $optionId;
        $this->optionS = $optionS;
    }

    /**
     * @return bool
     */
    public function isAnswer(): bool
    {
        return $this->isAnswer;
    }

    /**
     * @param bool $isAnswer
     */
    public function setIsAnswer(bool $isAnswer)
    {
        $this->isAnswer = $isAnswer;
    }

    /**
     * @return mixed
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }

    /**
     * @param mixed $optionId
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }

    /**
     * @return mixed
     */
    public function getOptionS(): string
    {
        return $this->optionS;
    }

    /**
     * @param mixed $optionS
     */
    public function setOptionS($optionS)
    {
        $this->optionS = $optionS;
    }
}