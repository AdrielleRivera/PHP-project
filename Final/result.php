<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>PHP Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Result | PHP Quiz</h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'] ?? '';
            $answer2 = $_POST['question-2-answers'] ?? '';
            $answer3 = $_POST['question-3-answers'] ?? '';
            $answer4 = $_POST['question-4-answers'] ?? '';
            $answer5 = $_POST['question-5-answers'] ?? '';
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
        ?>

        <br />

        <?php 
        if ($totalCorrect == 0) {
            echo "<h4>Oh no! You failed! Please try again!</h4>";
        }
        if ($totalCorrect == 1) {
            echo "<h4>Oh no! You failed! Please try again!</h4>";
        } elseif ($totalCorrect == 2) {
            echo "<h4>Oh no! You failed! Please try again!</h4>";
        } elseif ($totalCorrect == 3) {
            echo "<h4>Good effort! You Passed!</h4>";
        } elseif ($totalCorrect == 4) {
            echo "<h4>Nice Job! Keep up the good work!</h4>";
        } elseif ($totalCorrect == 5) {
            echo "<h4>Wow! Perfect Score! Sana ol</h4>";
        } 
        ?>

        &nbsp;
        &nbsp;
        &nbsp;
        <form action="index.php">
            <input type="submit" value="Retake" />
        </form>
    </div>

</body>

</html>
