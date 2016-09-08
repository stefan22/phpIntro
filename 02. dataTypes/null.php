<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>sandbox</title>
</head>
<body>
		
	$var1 = null;
	$var2 = "";

	var1 null? <?php echo is_null($var1); ?>   <br/><br/>		//returns 1 for true

	var2 null? <?php echo is_null($var2); ?>   <br/><br/>		//returns nothing for false

	var3 null? <?php echo is_null($var3); ?>   <br/><br/>		//returns a notice for undefined variable

	var1 is set?   <?php echo isset($var1); ?> <br/><br />		//returns not set

	var2 is set?   <?php echo isset($var2); ?> <br/><br />		//returns is set

	var3 is set?   <?php echo isset($var3); ?> <br/><br />		//returns not set

	<?php $var3 = "0";

	var1 is empty?   <?php echo empty($var1); ?> <br/><br />		//returns 1 for empty

	var2 is empty?   <?php echo empty($var2); ?> <br/><br />		//returns 1 for empty

	var3 is empty?   <?php echo empty($var3); ?> <br/><br />		//returns 1 for empty
	
	

</body>
</html>
