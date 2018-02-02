<!DOCTYPE html>
<html>
<body>
<form method="post" action="insertPhp.php">
    Quiz Name: <input name="quizName" type="text" required="required">
    <br><br>
    Question 1: <input type="text" name="questionS[]"><br>
    Choice 1: <input type="text" name="choiceS[]"><br>
    Choice 2: <input type="text" name="choiceS[]"><br>
    Choice 3: <input type="text" name="choiceS[]"><br>
    Choice 4: <input type="text" name="choiceS[]"><br>
    Answer: <select name="Answers">
        <option value="1">Choice 1</option>
        <option value="2">Choice 2</option>
        <option value="3">Choice 3</option>
        <option value="4">Choice 4</option>
    </select>
    <br><br>
    Question 2: <input type="text" name="questionS[]"><br>
    Choice 1: <input type="text" name="choiceS2[]"><br>
    Choice 2: <input type="text" name="choiceS2[]"><br>
    Choice 3: <input type="text" name="choiceS2[]"><br>
    Choice 4: <input type="text" name="choiceS2[]">
    <br><br>
    Question 3: <input type="text" name="questionS[]"><br>
    Choice 1: <input type="text" name="choiceS3[]"><br>
    Choice 2: <input type="text" name="choiceS3[]"><br>
    Choice 3: <input type="text" name="choiceS3[]"><br>
    Choice 4: <input type="text" name="choiceS3[]">
    <br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>