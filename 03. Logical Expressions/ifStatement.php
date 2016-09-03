<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>

		<?php
			
			$var1 = 5;
			$var2 = 2;

			if ($var1 > $var2) {
				echo "$var1 is greater than $var2";
			}

		?>

		<br/><br/>

		<?php
			$new_users = true;
			if($new_users) {
				echo "<h1>Welcome!</h1>h1>";
				edho "<p>We are glad you decided to join us</p>";
			}
		?>	
			
		<br/><br/>

		<?php
			$numerator = 20;
			$denominator = 4;
			$result = 0;
			if ($denominator > 0) {
				$result = $numerator / $denominator;
				echo "Result: {$result}";
			}
		?>

		


				
	</body>
</html>
