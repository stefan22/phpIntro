<?php
	//creating a redirect function
	function redirect_to($location) {
		header("Location: {$location}");
		exit;
	}

	//redirect_to("index.php");	

	//redirecting to a new page
	//header("Location: index.php");
	//exit;

	


	$logged_in = $_GET['logged_in'];
	if ($logged_in == "1") {
		redirect_to("index.php");
	}else {
		redirect_to("http://google.com");
	}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<h1>This is how you redirect to a new page</h1>
	<body>
		

	</body>
</html>