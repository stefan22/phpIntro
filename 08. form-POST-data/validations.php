<<<<<<< HEAD
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

=======
>>>>>>> a4003aad85dcbcfb794aa3d613618ea3efe4c4f7
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
<<<<<<< HEAD
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
=======
		<title>validations</title>
	</head>
	<body>
		<h3><u>Validations</u></h3>
		
		<?php

		//presence
		$value = "x";
		if (!isset($value) || empty($value)) {
			echo "-presence validation failed<br /><br />";
		} else {
			echo "-passed presence validation<br /><br />";
		}

		// string length
		// min length
		$min = 3;
		$value = "hello";
		if (strlen($value) < $min) {
			echo "-min length validation failed<br/><br/>";
		} else {
			echo "-passed min length validation<br/><br/>";
		}

		//string length
		//max length
		$max = 6;
		$value = "home";
		if (strlen($value) > $max) {
			echo "-failed max length validation<br /><br />";
		} else {
			echo "-passed max length validation<br/><br/>";
		}

		// type
		$value = "string";
		if (!is_string($value)) {
			echo "-failed type validation for string<br /><br/>";
		} else {
			echo "-passed type string validation<br /><br />";
		}

		// inclusion in a set
		$value = 1;
		$number = array(1,2,3,4,5);
		if (!in_array($value, $number)) {
			echo "-failed inclusion in a set validation<br /><br />";
		} else {
			echo "-passed inclusion in a set validation<br/><br/>";
		}

		// uniqueness
			//we really can't do without databases
			//uses a database to check uniqueness
			//basic idea is, when a value is submitted, we take that value and check it against db.

		// format
		// use a regex on a string
		// preg_match($regex, $subject)
		if (preg_match("/PHP/", "PHP is fun.")) {
			echo "-regex on a string: A match was found<br /><br />";
		} else {
			echo "-regex on a string: A match was not found<br /><br />";
		}


		$value = "sameemail@email.com";

		if (preg_match("/@/", $value)) {
			echo "-regex on a string: A match was found<br /><br />";
		} else {
			echo "-regex on a string: A match was not found<br /><br />";
		}





		?>

		<br /><br /> <br/>
	
		<form name="myform" action="form_processing.php" method="post">
>>>>>>> a4003aad85dcbcfb794aa3d613618ea3efe4c4f7
			
				Username: <input type="text" name="username" value="" /><br /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<br />
				<input type="submit" name="submit" value="submit">

		</form>


	</body>
</html>