<?php 
	
	$nameErr = $emailErr = $genderErr = $websiteErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		if (empty($_POST["fname"])) {
		    $nameErr = "Name is required";
		  } 
		  else {
		    $fName = test_input($_POST["name"]);
		  }
	
	#$fName = $_POST["fname"];
	$lName = $_POST["lname"];
	$word1 = $_POST["word1"];
	$word2 = $_POST["word2"];
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$startNum = $_POST["startNum"];
	$endNum = $_POST["endNum"];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/*	for ($i=$startNum; $i <= $endNum ; $i++) { 
		if ($i % $num1 == 0 && $i % $num2 == 0) {
			echo "$word1 $word2";
		}
		elseif ($i % $num1 == 0) {
			echo "$word1";
		}
		elseif ($i % $num2) {
			echo "$word2";
		}
		else{
			echo "$i";
		}
	}
*/
 ?>

<html>
	<head>
				<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="hover.css" rel="stylesheet" media="all">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <a class="navbar-brand left" href="http://dight350.tardis-shoes.com/dewey/Stevens_Stuff/FizzBuzz/index.php">Play Again</a>
		    <h1 class="title">Custom FizzBuzz Generator</h1>
		  </div>
		  
		</nav>
	<div class="body2">
		<?php
		for ($i=$startNum; $i <= $endNum ; $i++) { 
			if ($i % $num1 == 0 && $i % $num2 == 0) {
				echo "<div class=\"bg-success center hvr-hang\"><h4>$word1 $word2</h4></div>";
			}
			elseif ($i % $num1 == 0) {
				echo "<div class=\"bg-info center hvr-hang\"><h4>$word1</h4></div>";
			}
			elseif ($i % $num2 == 0) {
				echo "<div class=\"bg-warning center hvr-hang\"><h4>$word2</h4></div>";
			}
			else{
				echo "<div class=\"reg center hvr-hang\"><h4>$i</h4></div>";
			}
		}
	  ?>
	 </div>
	</body>
</html>