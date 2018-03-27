<?php
include_once "Controller.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz 1</title>
    <link rel="stylesheet" type="text/css" href="assets/css/Questions.css">
</head>
<body>

<?php
//TODO: Some how get the quiz id of the what quiz the user clicks on the user page, then plug it in to the the query request.
$_SESSION['quiz'] = Controller::makeAQuiztbt(1);
$_SESSION['count'] = 0;
$ref = $_SESSION['quiz']->getQuestions()[$_SESSION['count']];
?>
    <div id="form">
        <header><?php echo $ref->getQuestionS(); ?></header><br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" > <!-- submit the form to the server-->
            <input type="radio" name="answer1" id="r1" value="1"> <label for="r1"><?php echo $ref->getOptions()[0];  ?></label>
            <br><br>
            <input type="radio" name="answer1" id="r2" value="2"> <label for="r2"><?php echo $ref->getOptions()[1]; ?></label>
            <br><br>
            <input type="radio" name="answer1" id="r3" value="3"> <label for="r3"><?php echo $ref->getOptions()[2]; ?></label>
            <br><br>
            <input type="radio" name="answer1" id="r4" value="4"> <label for="r4"><?php echo $ref->getOptions()[3]; ?></label>
            <br><br>
        </form>
        <a href="Question2test.php" id="next" onclick="IncrementCount">Next</a>
    </div>
<script>
    function IncrementCount() {
        <?php
        ++$_SESSION['count']
        ?>
    }
</script>
</body>
</html>