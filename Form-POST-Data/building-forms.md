#Pages that have forms for submiting form data
==============================================

	URL/Links	===>	GET

	Forms		===> 	POST

	Cookies		===>	COOKIE

	$_GET => with $_GET PHP took all of the request parameters and put them into an associative array for the superglobal $_GET

	$_POST => all the values posted in the form data will be in that associative array $_POST, ready for us to access (just like we
			  did with the links)

	When we submit forms, there's generally going to be two pages, one page which has the web form on it, ready to be filled out.
	And the second page which has the processing of the form

	-To view the values submitted by the form with POST, in the form_processing.php page do

			//this gives you the associative array (key-value pairs)
			<pre>
				print_r($_POST);
			</pre>

			//you could also do something like this:

			$username = $_POST["useranme"];


#Detecting Form Submission
==========================
	- we can retrieve values from a form when a form is submitted, but if URL was loaded directly, instead of being submitted by
	  the form, then the key values that were expected to be in the POST array weren't there.

	  To solve that:

	  			<?php
					//it also sets default values of empty if its not set
					if (isset($_POST["username"])) {
						
						$username = $_POST["username"];
					
					} else {
						$username = "";
					}

					if (isset($_POST["password"])) {
						$password = $_POST["password"];
					} else {
						$password = "";
					}


					echo "Username: {$username}<br /> Password: {$password}";
			

				?>

				//same thing using a ternary operator
				// boolean_test ? value_if_true : value_if_false
				$username = isset($_POST["username"]) ? $_POST["username"] : "";
				$password = isset($_POST["password"]) ? $_POST["password"] : "";

				echo "{$username}: {$password}";


				//another way-better

				<?php
					if (isset($_POST["submit"])) {
						echo "form was submitted";
					}
				?>


#Single Page form processing
============================

	- Advantages:
					- All logic related to the form is in one line
					- Redisplay the form on errors
						- Return error messages
						- Populate fields with previous values
					




























