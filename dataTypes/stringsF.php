<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>
		<?php

			$first = "the quix brown fox";
			$second = "jumped over the lazy dog";

			$third = $first;
			$third .= " " . $second;

			echo $third;

		?>

		<br/><br/>

			

		Lowercase: <?php echo strtolower($third); ?> <br /><br />
		Uppercase: <?php echo strtoupper($third); ?> <br /><br />

		Uppercase first: <?php echo ucfirst($third); ?> <br /><br />
		Uppercase words: <?php echo ucwords($third); ?> <br /><br />	






		
	</body>
</html>
