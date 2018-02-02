<?php
/**
 * User: Joe matteson
 * Date: 11/3/2017
 * Time: 9:38 PM
 */
include_once "models/Quiz.php";
include_once "util/db.php";

class Controller {

    /**
     * Quiz to be taken by a user
     *
     * This method makes the quiz form to be displayed to the user.  It first querys the
     * the quiz name based on the given quiz id.  It then querys all the relevent questions
     * for that quiz.
     *
     * @param $quizId int the quiz that the form is being made of.
     * @return Quiz the quiz object
     */
    public static function makeAQuiztbt($quizId) {
        //TODO to speed this process up you could query everything related to the quiz in one method.
        $query = db::querQuiz($quizId);
        $quizName = "";
        while($row = $query->fetch_assoc()) {
            $quizName = $row['Quiz_name'];
        }
        $quiz = new Quiz($quizId, $quizName);
        $query = db::querQuests($quizId);
        while($row = $query->fetch_assoc()) {
            $quiz->addQuestion(new Question($row['Question_id'], $row['Question_S']));
        }
        for ($i = 0; $i < $quiz->getAmntQuests(); $i++) {
            $id = $quiz->getQuestions()[$i]->getQuestionId();
            $query = db::querOpts($id);
            while ($row = $query->fetch_assoc()) {
                $quiz->getQuestions()[$i]->addOption($row['Option_id'] - 1, $row['Option_S']);
            }
        }
        return $quiz;
    }
}

