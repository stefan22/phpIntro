# Associate Array => indexed key-value pair


	- an object-indexed collection of objects 
	- is not ordered anymore and
	- instead of being integer indexed, is object-indexed (index by a label of some sort)

	### comparing Basic array and Associative array

		- Basic array => when order is most important
		- Associative array => when having a reference label is most important

		ex.
			so if we have 100 customers, we would want to store them in a basic array. But then
			the information about each customer, i would store it in an associative array in order
			to access the information by customer name

			$assoc = array();    // to call basic and associative array -same way - what matters is what u 
								 // put inside of it


			ex. associate array (indexed by key) you call them by their keys

				<?php $assoc = array("first_name" => "Stefano", "last_name" => "Lissia"); ?>

				<?php echo $assoc["first_name"]; ?>

				<?php echo $assoc["first_name"]; ?> <br /><br />

				<?php echo $assoc["last_name"]; ?>  <br /> <br />

				<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?>

				//assignment:

				<?php $assoc["first_name"] = "Michael";


*   [Back](https://github.com/stefan22/phpIntro)
