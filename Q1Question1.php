<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="Questions.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include_once "Controller.php";
include_once "phpclass/util/db.php";
/**
 * Pull the question from the database
 */
//TODO: Some how get the quiz id of the what quiz the quiz clicks on the user page, then plug it in to the the query request.
$final = db::querQuest(1, 1);
$questS = $final['questS'];
$optS = $final['opts'];
for ($i = 0; $r = $optS->fetch_assoc(); $i++)
    $radio[$i] = $r['Option_S'];
?>
    <div id="form">
        <header><?php $row = $questS->fetch_assoc();  echo $row['Question_S'] ?></header><br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" > <!-- submit the form to the server-->
            <input type="radio" name="answer1" id="r1" value="1"> <label for="r1"><?php echo $radio[0]; ?></label>
            <br><br>
            <input type="radio" name="answer1" id="r2" value="2"> <label for="r2"><?php echo $radio[1]; ?></label>
            <br><br>
            <input type="radio" name="answer1" id="r3" value="3"> <label for="r3"><?php echo $radio[2]; ?></label>
            <br><br>
            <input type="radio" name="answer1" id="r4" value="4"> <label for="r4"><?php echo $radio[3]; ?></label>
            <br><br>
            <input type="button" name="previousB" id="previous" value="Previous">
            <input type="button" name="nextB" id="next" value="Next">
        </form>
    </div>
</body>
</html>