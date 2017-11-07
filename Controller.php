<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 9:38 PM
 */
include_once "phpclass/Quiz.php";
include_once "phpclass/util/db.php";

class Controller {
    // --- Fields --- //
    private static $quizRepo = array();
    private static $intitialized = false;


//    public static function updateQuest($questionId, $newOption) {
//        for ($i = 0; i < count(self::$questRepo); $i++) {
//            if (self::$questRepo[i]-> === $questionId) {
//                self::$questRepo[i] = $newOption;
//            }
//
//        }
//    }

    /**
     * This method makes the quiz form to be displayed to the user.  It first querys the
     * the quiz name based on the given quiz id.  It then querys all the relevent questions
     * for that quiz.
     *
     * @param $quizId the quiz that the form is being made of.
     */
    public static function makeAForm($quizId) {
        $query = db::querQuiz($quizId);
        while($row = $query->fetch_assoc()) {
            $quizName = $row['Quiz_name'];
        }
        $form = new form($quizId, $quizName);
        $query = db::querQuests($quizId);
        while($row = $query->fetch_assoc()) {
            $form->addQuestion(new Question($row['Question_id'], $row['Question_S']));
        }
    }

    public static function setInitialiezed() {
        self::$intitialized = true;
    }

}

