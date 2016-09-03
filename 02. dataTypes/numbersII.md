## floating numbers or decimals

	- can't divide by zero

	### float functions

		- round	-> takes a number that says how many significant digits do you want
				   them to be.
				   ex
				   		float,1 will take 3.14 and round it to one decimal place. (3.1)

		- ceiling n floor ->  ceiling always rounds up and floor always rounds down.

		<br />

			Round: <?php echo round($float,1); ?> <br/><br/>		//3.1

			Ceiling <?php echo ceil($float); ?> <br/><br/>			//4

			Floor 	<?php echo floor($float); ?> <br/><br/>			//3

		<br/>


	### Ask PHP whether is integer or a float
		- It returns true or false => but gets converted into a number 
				-1 for true
				-nothing/no value for false
	
		-ex
			<?php $integer = 3; ?>
			<?php $float = 3.14; ?>

			<?php echo "Is {$integer} integer? " .  is_int($integer); ?> <br/><br/>

			<?php echo "Is {$float} integer? "  .  is_int($float); ?> <br/><br/>


			<?php echo "Is {$integer} float? " .  is_float($integer); ?> <br/><br/>

			<?php echo "Is {$float} float? "  .  is_float($float); ?> <br/><br/>



*   [Back](https://github.com/stefan22/phpIntro)