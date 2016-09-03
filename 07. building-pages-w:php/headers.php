<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<h1>By the time it reaches header function it's already too late</h1>
	<body>
		<?php
			header("HTTP 1.1/ 404 Not Found");
		?>

	</body>
</html>