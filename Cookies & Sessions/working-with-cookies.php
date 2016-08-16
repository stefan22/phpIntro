<?php
		
	//REMEMBER: Setting cookies must be done before *any* HTML output
	//			unless output buffering is turned on

	$name = "test";
	$value = 150;
	$expire = time() + (60*60*24*7);		// 1 week    (60*60*24*7*2) be two weeks	 

	setcookie($name, $value, $expire);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>php form</title>
	</head>
	<body>

		<pre>
			<?php
				print_r($_COOKIE);
			?>
		</pre> <br /><br />

		<?php
			// always check first to see if a cookie exist cause a user can delete
			// a cookie himself and to avoid an error on page

			if (isset($_COOKIE["test"])) {
				$test = $_COOKIE["test"];
			} else {
				$test="";
			}

			echo $test;
		
		?>

		<br/><br/>

		<?php
			//ternary operator style
			// always check first to see if a cookie exist cause a user can delete
			// a cookie himself and to avoid an error on page
		
			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
			echo $test;
		
		?>
	


	</body>
</html>