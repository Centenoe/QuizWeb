<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 9:38 PM
 */
include_once "phpclass/Quiz.php";

$localData = array();

function addData($data) {

    $data= new Quiz(1);
    $GLOBALS['localData'][] = $data->toString();
}

