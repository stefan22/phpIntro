<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>
		<?php

			// ChineseZodiac calculation
			$year = 2016;
			switch(($year-4) % 12) {
				case 0:  $zodiac = "Rat";		break;
				case 1:  $zodiac = "Ox";		break;
				case 2:  $zodiac = "Tiger";		break;
				case 3:  $zodiac = "Rabbit";	break;
				case 4:  $zodiac = "Dragon";	break;
				case 5:  $zodiac = "Snake";		break;
				case 6:  $zodiac = "Horse";		break;
				case 7:  $zodiac = "Goat";		break;
				case 8:  $zodiac = "Monkey";	break;
				case 9:  $zodiac = "Rooster";	break;
				case 10: $zodiac = "Dog";		break;
				case 11: $zodiac = "Pig";		break;
			}
			echo "{$year} is the year of the {$zodiac}.";

		

		?>
				
	</body>
</html>
