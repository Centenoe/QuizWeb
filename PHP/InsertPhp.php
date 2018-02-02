<?php
/**
 * User: joematte
 * Date: 12/23/17
 * Time: 10:56 PM
 */

include_once "util/Constf.php";
include_once "models/Quiz.php";
include_once "models/Question.php";
include_once "models/Option.php";
include_once "util/db.php";

$quiz = $name = $question = $option = "";
$countQ = $countO = 0;


/**
 * What all this code does is package up the form from the user into on single quiz object.
 * Then send it to the db function.
 */
if (isset($_POST['submit'])) {
    if (isset($_POST['quizName']))
        $name = Constf::sanatize($_POST['quizName']);
    $quiz = new Quiz($name);
    if (isset($_POST['questionS'])) {
        foreach ($_POST['questionS'] as $q) {
            if ($q === "") continue;
            $question = new Question($countQ, Constf::sanatize($q));
            if (isset($_POST['choiceS'])) {
                foreach ($_POST['choiceS'] as $o) {
                    if ($o === "") continue;
                    $option = new Option($countO, Constf::sanatize($o));
//                    echo "added option";
                    $countO++;
                    $question->addOption($option);
                }
            }
            $countO = 0;
            $quiz->addQuestion($question);
//            echo "added question";
        }
    }
//    echo "<br>";
//    echo "Attempting to add a quiz";
    db::insertQuiz($quiz);

    $quiz = $name = $question = $option = "";
    $countQ = $countO = 0;
}