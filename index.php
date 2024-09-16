<?php
	if (isset($_POST["name"]) && isset($_POST["age"])) {
		echo "Hello ". $_POST['name']."<br />";
		echo "Your age is ". $_POST['age']." years old.";
		echo "<form action='index2.php'>
 			<input type='submit' value='Take Test' />
 			</form>";
		exit();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8" />
	
		<title>PHP QUIZ | My Project</title>
	
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
		<body>
			<div id="page-wrap">

				<h1>Enter PHP Quiz Project</h1>

				<form action = "" method = "POST">
					Name: <input type="text" name="name" />
					Age: <input type="text" name="age" />
					<input type="submit" />
				</form>
				&nbsp;
				&nbsp;
				<p>Develop by Adrielle Rivera</p>


			</div>
		</body>
</html>