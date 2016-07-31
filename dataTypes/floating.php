<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>
		<?php
			
			echo $float = 3.14 . "<br/><br />";

			echo $float + 7 . 	"<br/><br />";

			echo 4 / 3	.	"<br/><br />";
		
			echo "<p>can't divide by zero</p>";
	
		?>


		<br />

			Round: <?php echo round($float,1); ?> <br/><br/>

			Ceiling <?php echo ceil($float); ?> <br/><br/>

			Floor 	<?php echo floor($float); ?> <br/><br/>

		<br/>


			<?php $integer = 3; ?>
			<?php $float = 3.14; ?>

			<?php echo "Is {$integer} integer? " .  is_int($integer); ?> <br/><br/>

			<?php echo "Is {$float} integer? "  .  is_int($float); ?> <br/><br/>


			<?php echo "Is {$integer} float? " .  is_float($integer); ?> <br/><br/>

			<?php echo "Is {$float} float? "  .  is_float($float); ?> <br/><br/>








				
	</body>
</html>
