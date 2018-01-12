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

    public function __construct($optionId, $optionS)
    {
        $this->optionId = $optionId;
        $this->optionS = $optionS;
    }

    /**
     * @return mixed
     */
    public function getOptionId()
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
    public function getOptionS()
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