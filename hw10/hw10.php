<doctype !html>
<html>
<head>
	<title>Assignment 10</title>
</head>

	<?php
		$fname = null;
		$lname = null;
		$numguess = null;
		
		$form = true;
		$guess = false;
		$done = false;
		
		if (isset($_POST['hiddennum']))
			$num = $_POST['hiddennum'];
		else
			$num = rand(1,5);
		
		if (isset($_REQUEST['fname'],$_REQUEST['lname'])) {
			$fname = $_REQUEST['fname'];
			$lname = $_REQUEST['lname'];
			$form = false;
			$guess = true;
			$done = false;
		}
		if (isset($_POST['numguess'])) {
			$numguess = $_POST['numguess'];
			$form = false;
			$guess = true;
			$done = false;
		}
		if ($numguess == $num) {
			$form = false;
			$guess = false;
			$done = true;
		}
				
		if ($form) {
			echo "<body>";
			echo "<form action='assignment10.php' method='get' onsubmit='return validate()' name='iform'>";
			echo "First Name: <input type='text' name='fname' value='Dillon' id='fname'><br>";
			echo "Last Name: <input type='text' name='lname' value='VanBuskirk' id='lname'><br>";
			echo "E-mail: <input type='text' name='email' value='dtvanbus@uark.edu' id='email'><br>";
			echo "<input type='submit' value='Submit'>";
			echo "</form>";
			echo "</body>";	
		}
		if ($guess) {
			echo "<body>";
			if (isset($_POST['numguess'])) {
				echo "Your guess, $numguess, was wrong. Try again:";
			}
			else {
				echo "<p>Hi $fname $lname !</p>";
				echo "<p>Let's play a game! Guess a number between 1 to 5:</p>";
			}
			echo "<form action='assignment10.php' method='post' name='gform'>";
			echo "Your Guess: <input type='text' name='numguess'><br>"; // user's guess
			echo "<input type='hidden' name='hiddennum' value=$num>"; // hidden answer
			echo "<input type='submit' value='Submit'>";
			echo "</form>";
			echo "</body>";
		}
		if ($done) {
			echo "<body>";
			echo "Hooray! You guessed correctly.";
			echo "</body>";
		}
	?>

	<script>
		function validate() {
			var email = document.forms["iform"]["email"].value
			if ((document.forms["iform"]["fname"].value) == "") {
				alert('First name cannot be left blank');
				return false;
			}
			if ((document.forms["iform"]["lname"].value) == "") {
				alert('Last name cannot be left blank');
				return false;
			}
			if ((document.forms["iform"]["email"].value) == "") {
				alert('Email cannot be left blank');
				return false;
			}
			if (email.search("@") < 0) {
				alert('Email must contain a @');
				return false;
			}
			if (email.indexOf(".") < 0) {
				alert('Email must contain a .');
				return false;
			}
			return true;
		}
	</script>
</html>
