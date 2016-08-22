<?php
	if(isset($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		echo "Username: {$username}<br />Password: {$password}<br /><br />";
	} else {
		$username = "";
		$password = "";
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>

		<?php

			// * presence
			$value = "x";
			if (!isset($value) || empty($value)) {
				echo "1. presence Validation failed. <br /><br />";
			} else {
				echo "1. passed presence validation<br/><br />";
			}

			// * string length
			$value = "house";
			$min = 3;
			if(strlen($value) < $min) {
				echo "2. min length validation failed<br /><br />";
			} else {
				echo "2. passed min length validation<br /><br />";
			}

			$value = "house";
			$max = 7;
			if (strlen($value) > $max) {
				echo "3. max length validation failed<br /><br />";
			} else {
				echo "3. passed max length validation<br /><br />";
			}

			// * type
			$value = "";
			if (!is_string($value)) {
				echo "4. failed string type validation<br />";
			} else {
				echo "4. passed string type validation<br />";
			}


			// * inclusion in a set
			// * uniqueness
			// * format
	
		?>	






		<form name="myform" action="validations.php" method="post">
			
				Username: <input type="text" name="username" value="" /><br /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<br />
				<input type="submit" name="submit" value="submit">

		</form>


	</body>
</html>