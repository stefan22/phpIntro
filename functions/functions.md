#Functions

		function name($arg1, $arg2) {
			statement;
		}


	- Just like any other functions: define them and call them
	
		ex.				
						function say_hello() {
							echo "hello you all<br />";
						}

						say_hello();


						function say_hello_to($word) {
							echo "Hello {$word} <br/>";
						}

						say_hello_to("John");


						$name = "Mike T";
						function say_hi($name) {
							echo "hello {$name}";
						}


	- Multiple argument

			function str_replace($find, $replace, $target) {
				...
			} // the order matters


			$name = "Frank";

			function better_hello($greeting, $target, $punct) {
				echo $greeting . " " . $target . $punct . "<br />";
			}

			better_hello("Hello", $name, "!");


	- Return values from a function

			function add($val1, $val2) {
				$sum = $val1 + $val2;
				return $sum
			}

			$result = add(3,5);
			echo $result;

			//or

			$result1 = add(3,4);
			$result2 = add(3,$result1);
			echo $result2;

	- Multiple Return Values
			- A function can only return a single value

				ex.
					function add_subst($val1, $val2) {
						$add = $val1 + $val2;
						$subst = $val1 - $val2;
						return $add   	// but how can we return $subst too?
					}

				// we can return an array instead

					function add_subst($val1, $val2) {
						$add = $val1 + $val2;
						$subst = $val1 - $val2;
						return array($add, $subst);
					}

					$result = add_subst(10,5);
					
					echo "Add: " . $result[0] . "<br />";
					echo " Substract: " . $result[1] . "<br />";


				//or you can you list in PHP

				list($add, $subst) = add_subst(20,5);

				echo "Add: "  . $add . "<br />";
				echo "Substract: " . $subst . "<br />";


#Scope and Global Variables*

	-Two main scopes in PHP: Global and Local

		ex.
			$bar = "outside";   //global scope

			function foo() {
				$bar = "inside";  //local scope
			}

			echo "1: " . $bar . "<br />";
			foo();
			echo "2: " . $bar . "<br />";

			//they both returned outside 

			//we can call the the global scope inside a function by using
			// global $bar   // inside of a function


#Setting default argument values
	
		function paint($color="red") {
			return "The color of the room is {$color}.<br />";
		}

	
		echo paint();





