<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>
		
			<?php

				$numbers = array(1,4,5,12,22);

				echo $numbers[1];x


				$mixed = array(5,"dog",3, "cat", array("x","y","z"));
				echo $mixed[1];
				echo $mixed[4];

				//debuggin array
				echo print_r($mixed); 

				//or

				<pre>
					echo print_r($mixed); 
				</pre>


				//value from nested array
					echo $mixed[4][2];
					//gets u "z"	

					$mixed[2] = "bird";
					$mixed[] = 'plane';


			?>
		

		


				
	</body>
</html>
