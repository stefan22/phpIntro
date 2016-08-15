<?php
	//require_once("included-function.php");
	require_once("custom-validation-functions.php");

	$errors = array();

	if (isset($_POST["submit"])) {
		//form submitted
		
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		$message = "";

		if (!has_presence($username)) {
			$errors["username"] = "Username can't be blank <br /><br />";
		}

		if (empty($errors)) {
			if ($username == "kevin" && $password == "secret") {
				//successful login
				redirect_to("index.php");
			} else {
				$message = "Username/ password do not match <br /><br />";
			}

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

		<?php echo form_errors($errors); ?>

		

	
		<form name="myform" action="singlePageValidation-withForm.php" method="post">
			
				Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" />
				<br /><br />
				Password: <input type="password" name="password" value="" /><br /><br />
				<br />
				<input type="submit" name="submit" value="submit">

		</form>


	</body>
</html>