<?php
	require_once("included-function.php");

	if (isset($_POST["submit"])) {
		//form submitted
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$message = "";
		

		if ($username == "kevin" && $password == "secret") {
			redirect_to("index.html");
		} else {
			echo "form has been submitted!<br />";
			echo "<p style='background-color:#a3f2b4; width:12%; padding:1em;'>
					 Username: {$username}<br />password: {$password}</p><br />";	
		}

  	} else {
		//setting default values to avoid undefined error message
		$username = "";
		$password ="";
		$message = "<p class='welcome'>Please log in</p><br />";
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Single Page Form Processing</title>
		<style>
			.welcome {
				background-color: #f29999; padding:1em; width: 7%;
			}
		</style>
	</head>
	<body>

		<?php echo $message; ?>

	
		<form name="myform" action="singlePageFormProcessing.php" method="post">
			
				Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" />
				<br /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<br />
				<input type="submit" name="submit" value="submit">

		</form>


	</body>
</html>