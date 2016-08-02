# Logical operators

		###Comparison
			- equal ==
			- identical ===
			- compare: > < >= <=
			- not equal !=
			- not identical !==

		###Logical	
			- &&
			- ||


			ex. 
				<?php
					$a = 4;
					$b = 3;
					$c = 1;
					$d = 20;

					if($a > $b) && ($c > $d) {
						echo "a is larger than b and";
						echo "c is larger than d";
					}

				?>

				<br><br />

				<?php
					
					if(!isset $e) {
						echo $e;
					}
				?>

				<br /><br />

				<?php
					$quantity = 0;
					if(empty($quantity) && !is_numeric($quantity)) {
						echo "you must enter a quantity";
					}
				?>
