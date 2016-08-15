<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>validations</title>
	</head>
	<body>
		<h3><u>False Positives</u></h3>
		
		<?php

		function is_equal($value1, $value2) {
			$output = "{$value1} == {$value2}: ";

			if ($value1 == $value2) {
				$output .= "true <br />";
			} else {
				$output .= "false <br />";
			}

			return $output;
		}


		echo is_equal(0, false);
		echo is_equal(1, 1);
		echo is_equal(4, true);
		echo is_equal(0, "0");
		echo is_equal(0, "a");
		echo is_equal("abc", true);
		echo is_equal(123, 0123);
		echo is_equal(100, 100.00);


		echo "<br/><br/>";
		
		//another custom made function but with 3 equal signs

		function is_exact($value1, $value2) {
			$output = "{$value1} === {$value2}: ";

			if ($value1 === $value2) {
				$output .= "true <br />";
			} else {
				$output .= "false <br />";
			}

			return $output;
		}


		echo is_exact(0, false);
		echo is_exact(1, 1);
		echo is_exact(4, true);
		echo is_exact(0, "0");
		echo is_exact(0, "a");
		echo is_exact("abc", true);
		echo is_exact(123, 0123);
		echo is_exact(100, 100.00);





		?>

		<br /><br /> <br/>
	
		<form name="myform" action="form_processing.php" method="post">
			
				Username: <input type="text" name="username" value="" /><br /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<br />
				<input type="submit" name="submit" value="submit">

		</form>


	</body>
</html>