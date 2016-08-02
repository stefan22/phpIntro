<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>

			<?php
					$max_width = 980;		//this is a variable

					define('MAX_WIDTH', 980);	//this is a contant  - we use quotes to define it but once define we can just call it
					echo MAX_WIDTH;

					//can't change the value
					MAX_WIDTH += 1;
					echo MAX_WIDTH;

			?>


		
		
	

		


				
	</body>
</html>
