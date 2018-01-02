<?php
/**
 * User: joematte
 * Date: 12/23/17
 * Time: 10:56 PM
 */

include_once "util/Constf.php";
include_once "models/Quiz.php";
include_once "models/Question.php";

$quiz = $name = $question =  "";
$countQ = $countO = 0;

if (isset($_POST['submit'])) {
    if (isset($_POST['quizName']))
        $name = Constf::slimDown($_POST['quizName']);
    $quiz = new Quiz($name);
    if (isset($_POST['questionS'])) {
        foreach ($_POST['questionS'] as $q) {
            $question = new Question($countQ, Constf::slimDown($q));
            if (isset($_POST['choiceS1'])) {
                foreach ($_POST['choiceS1'] as $o) {
                    $question->addOption($countO, Constf::slimDown($o));
                    $countO++;
                }
            }
        }
    }


}