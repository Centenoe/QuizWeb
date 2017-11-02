<?php
/**
 * Created by PhpStorm.
 * User: Joe matteson
 * Date: 10/15/2017
 * Time: 8:37 PM
 */
echo "Hello " . $_GET[0];

class Queue
{
    private $first = 0;

    public function Queue($param)
    {
        $this->first = $param;
    }

    /**
     * @return int
     */
    public function getFirst()
    {
        return $this->first;
    }
}