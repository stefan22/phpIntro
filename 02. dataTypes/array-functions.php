<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>sandbox</title>
</head>
<body>
		
	<?php $numbers = array(5,3,7,1,22,8); ?>

		Count:	<?php echo count($numbers); ?> <br/><br/>

		Max value:	<?php echo max($numbers); ?><br/><br/>

		Min value:	<?php echo min($numbers); ?><br/><br/>

		Sort:	<?php sort($numbers); print_r($numbers); ?><br/><br/>
	
		Reverse sort:	<?php rsort($numbers); print_r($numbers); ?><br/><br/>

		<br/><br/>

		Implode:	<?php $num_string = implode(" * ", $numbers); ?>  <br/><br/>


		Implode:	<?php echo $num_string = implode(" * ", $numbers); ?>  <br/><br/>
			
		Implode:	<?php echo $num_string = implode(" * ", $numbers); ?>  <br/><br/>

		Explode:	<?php print_r(explode(" * ", $num_string)); ?>  <br/><br/>

		15 in array?: <?php echo in_array(15, $numbers); ?>		<br/><br/>

		15 in array?: <?php echo in_array(1, $numbers); ?>


				
</body>
</html>
