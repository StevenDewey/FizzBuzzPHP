

<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		
		<script type="text/javascript" src="fizzbuzz.js"></script>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="hover.css" rel="stylesheet" media="all">
	</head>
	<body>
<?php 
	
	$word1Err = $word2Err = $num1Err = $num2Err = $startNumErr = $endNumErr =  "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		if (empty($_POST["word1"])) {
		    $word1Err = "* First Word is required";
		  } 
		  else {
		    $word1 = test_input($_POST["word1"]);
		  }
		if (empty($_POST["word2"])) {
		    $word2Err = "* Second Word is required";
		  } 
		  else {
		    $word2 = test_input($_POST["word2"]);
		  }

		if (empty($_POST["num1"])) {
		    $num1Err = "* First Numeber is required";
		  } 
		  else {
		    $num1 = test_input($_POST["num1"]);
		  }
		if (empty($_POST["num2"])) {
		    $num2Err = "* Second Number is required";
		  } 
		  else {
		    $num2 = test_input($_POST["num2"]);
		  }

		if (empty($_POST["startNum"])) {
		    $startNumErr = "* Starting Number is required";
		  } 
		  else {
		    $startNum = test_input($_POST["startNum"]);
		  }
		if (empty($_POST["endNum"])) {
		    $endNumErr = "* Ending Number is required";
		  } 
		  else {
		    $endNum = test_input($_POST["endNum"]);
		  }


	
	#$fName = $_POST["fname"];
	#$lName = $_POST["lname"];
	#$word1 = $_POST["word1"];
	#$word2 = $_POST["word2"];
	#$num1 = $_POST["num1"];
	#$num2 = $_POST["num2"];
	#$startNum = $_POST["startNum"];
	#$endNum = $_POST["endNum"];
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
	<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <h1 class="title">Custom FizzBuzz Generator</h1>
		  </div>
	</nav>
	<div class="panel panel-primary body2 center3">
      <div class="panel-heading">
        <h3 class="panel-title">What is Fizz Buzz?</h3>
      </div>
      <div class="panel-body">
        <p>FizzWha?, you might ask. FizzBuzz. It is at its core a word game for children that teachs division. 
        Players take turns counting incrementally, with the rule that they replace any number evenly divisible 
        by three with the word "fizz", and any number divisible by five with the word "buzz", and by both "fizzbuzz". 
        So why do I need this website to play FizzBuzz? Glad you asked.</p>

		<p>You will have the opportunity to play a customizable and very quick version of the game using this website.
		You will need to enter in 2 of your own words, although you can still pick "fizz" and "buzz" if you're up for 
		a classic game. Then enter the numbers you want to divide by, and finally enter the number at which you want to
		start counting and the number at which you want to finish counting...</p>

		<p>Have Fun!</p>
      </div>
    </div>
    <br><br>
		<form action="index.php"  method="post">
		  <div class="row">
		  	<div class="col-md-6">
		  		<input type="text" class="form-control" placeholder="First Word. ex. &quot fizz&quot" name="word1"><span class="error"><?php echo $word1Err;?></span><br>
		  	</div>
		  	<div class="col-md-6">
		  		<input type="text" class="form-control" placeholder="Second Word. ex &quot Buzz&quot" name="word2"><span class="error"><?php echo $word2Err;?></span>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col-md-6">
		  		<input type="text" class="form-control" placeholder="First Number. ex: 3" name="num1"><span class="error"><?php echo $num1Err;?></span><br>
		  	</div>
		  	<div class="col-md-6">
		  		<input type="text" class="form-control" placeholder="Second Number. ex: 5" name="num2"><span class="error"><?php echo $num2Err;?></span>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col-md-6">
		  		<input type="text" class="form-control" placeholder="Starting Number" name="startNum"><span class="error"><br><?php echo $startNumErr;?></span><br>
		  	</div>
		  	<div class="col-md-6">
		  		<input type="text" class="form-control" placeholder="Ending Number" name="endNum"><span class="error"><?php echo $endNumErr;?></span>
		  	</div>
		  </div>
		  <div class="center">
		  <input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="scrollDown()">
		  </div>

		</form><br>


	<!--Welcome <?php echo $_POST["fname"]; ?><br>
	Your email address is: <?php echo $_POST["lname"]; ?> -->

	

 <div>
		<?php
		if ($word1Err == "" && $word2Err == "" && $num1Err == "" && $num2Err == "" && $startNumErr == "" && $endNumErr == "") {
			
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
	}
	else{
		echo "<div class=\"alert alert-danger center2\" role=\"alert\">Error, incomplete field.</div> ";
	};
	  ?>
	 </div>

	</body>
</html>