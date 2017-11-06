<?php
/**
 * Date: 11/3/17
 * Time: 8:19 AM
 */
include_once "Constf.php";

class Utildbf
{
    /**
     * Queury's a specific question in a specific quiz
     *
     * @param $quizId the quiz id that the question is in
     * @param $questionId the question that is being queured in the quiz
     * @return array if there is data in the qeury or
     *         void if there is no data in the query
     */
    public static function querQest($quizId, $questionId) {
        $conn = new mysqli(Constf::host, Constf::username, Constf::password, Constf::dbName);
        if ($conn->connect_error)
            die("Connection failed: " . $conn->connect_error);
        $sql = "SELECT Question_S FROM Question WHERE Question.Quiz_id=$quizId AND Question_id=$questionId";
        $questionS = $conn->query($sql);
        $sql = "SELECT Option_S FROM Options WHERE Question_id=$questionId";
        $optionsS = $conn->query($sql);
        $conn->close();
        if ($questionS->num_rows > 0 && $optionsS->num_rows > 0) {
            $final = array('questS' => $questionS, 'opts' => $optionsS);
            return $final;
        } else {
            echo "No Rows were Selected";
            return;
        }
    }

    /**
     * basic query to get the Answer to the given question
     *
     * @param $questionId the question id for the specific answer
     * @return the result of the query if there is one.
     */
    public static function querAnsw($questionId) {
        $conn = new mysqli(Constf::host, Constf::username, Constf::password, Constf::dbName);
        if ($conn->connect_error)
            die("Connection failed: " . $conn->connect_error);
        $sql = "SELECT Option_id, Reason FROM Answer WHERE Answer.Question_id=$questionId";
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows > 0)
            return $result;
        else {
            echo "No Rows were Selected";
            return;
        }
    }

    public function querQuiz() {


    }
}