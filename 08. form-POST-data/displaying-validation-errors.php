<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>validations</title>
	</head>
	<body>
		<h3><u>Validations Errors</u></h3>
		
		<?php

		$errors = array();

		//*presence
		// use trim() so empty spaces don't count
		// use === to avoid false positives
		// empty() would consider "0" to be empty

		$value = trim("");
		if (!isset($value) || $value === "") {
			$errors['value'] = "-Value can't be blank";
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



		//print_r($errors);


		?>


		<?php

			// if (!empty($errors)) {
			// //redirect_to("first_page.php");
			//   include("form.php");
			// } else {
			// 	include("success.php");
			// }

			//on a single page

			function form_errors($errors=array()) {
					$output = "";
					if (!empty($errors)) {
						$output .= "<div class=\"error\">";
						$output .= "Please fix the following errors";
						$output .= "<ul>";
						foreach ($errors as $key => $error) {
							$output .= "<li>{$error}</li>";
						}
						$output .= "</ul>";
						$output .= "</div>";
					}

					return $output;
			}

			
		?>

		<br /><br />
		<!-- call it -->

		<?php echo form_errors($errors); ?>






		<br /><br /> <br/>
	
		<form name="myform" action="form_processing.php" method="post">
			
				Username: <input type="text" name="username" value="" /><br /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<br />
				<input type="submit" name="submit" value="submit">

		</form>


	</body>
</html>