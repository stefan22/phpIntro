#Pages that have forms for submiting form data

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




