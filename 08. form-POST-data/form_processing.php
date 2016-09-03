<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>php form</title>
	</head>
	<body>
	
		<h1>Hey you are in form processing php.....</h1>
		<h3>...we're busy right now :(</h3>

		<pre>
		<?php
			print_r($_POST);

		?>
		</pre>

		<?php
		
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			echo "Username: {$username}<br />Password: {$password}";
			

		?><br /><br /> <br/>

		

				<?php
					if (isset($_POST["submit"])) {
						echo "form was submitted";
					}
				?>

	</body>
</html>