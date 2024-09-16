<?php
// This block handles form submissions
if (isset($_POST["name"]) && isset($_POST["age"])) {
    echo "Hello " . htmlspecialchars($_POST['name']) . "<br />";
    echo "Your age is " . htmlspecialchars($_POST['age']) . " years old.";
    echo "<form action='quiz.php'>
        <input type='submit' value='Take Test' />
    </form>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>PHP QUIZ | My Project</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div id="page-wrap">
        <h1>Enter PHP Quiz Project</h1>
        <p>Please enter your information below:</p>
        <br />
        <form action="index.php" method="POST">
            Name: <input required type="text" name="name" />
            Age: <input required type="number" name="age" />
            <input type="submit" />
        </form>
        &nbsp;&nbsp;
        <p>Developed by Adrielle Rivera</p>
    </div>
</body>
</html>
