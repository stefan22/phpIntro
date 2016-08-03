<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>
		<?php
			$count = 0;

			while($count <= 10) {
				if ($count == 5) {
					echo "five" . ", ";
					$count++;

				}
				echo $count . ", ";
				$count++;
			}

			echo "<br /><br />";
			echo "Count: {$count}";

		?>

		<br /><br />

		<?php
			
			for ($count = 20; $count >= 0; $count--) {
				if($count % 2 == 0) {
					echo "{$count} is even<br/>";
				} else {
					echo "{$count} is odd<br>";
				}
			}


		?>


		<br /><br />

		<?php
		$ages = array(2,4,5,15,44);

						foreach($ages as $age) {
							echo "Age: {$age}<br/>";
						}


	
		?>


		<?php
		$person = array(
							"first_name" => "Kevin",
							"last_name"  => "Long",
							"address"	=>  "123 Main street",
							"city"		=>  "London" 
							);


						foreach($person as $key => $value) {
							$attr_nice = ucwords(str_replace("_","", $key));
							echo "{$attr_nice}: {$value}<br/>";
						}


						foreach($person as $key => $value) {
							echo "{$key}: {$value}<br />";
						}			

		?>



		<?php
			$prices = array(
				"Brand New Computer" => 2000,
				"1 month subscription" => 25,
				"Learning PHP" => null
			);


			foreach($prices as $item => $price) {
				echo "{$item}: ";
				if (is_int($price)) {
					echo "$" . $price . " " . "<br/>";
				}else {
					echo "priceless";
				}
			}


		?>		
				
	</body>
</html>
