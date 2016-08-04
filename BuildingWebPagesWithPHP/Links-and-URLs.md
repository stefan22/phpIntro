#Links and URLs
	##Request Response Cycle
		-Request starts at the Browser
		-Goes to web server
		-Web server processes our PHP
		-Returns HTML page back to the browser

		Nothing happens at the web server unless the user sends in information to us.
		###3 ways that we can get data from users on the web:
			-URLs and Links
			-Web forms that you fill out with information and click submit
			-cookies(browser cookies stored on the browser)

			And each one of these corresponds to an HTTP method (Get, Post and Cookie)

					-URL and Links are GET requests
					-Forms are POST requests
					-Cookies are COOKIES - not a request but the way information stored in browser is accessed


	##Links
		ex.

			<?php $link_name = "Second Page"; ?>
			<a href="second-page.php"><?php echo $link_name; ?></a>	

    ##GET values

			###parameters
    			
    				-single parameter
    					somepage.php?page=2  		//name of parameter, equal sign, value of parameter
			
					-multiple parameters			//by using the ampersand 
						somepage.php?category=7&page=3

			-In PHP whenever a page request is made, PHP is automatically going to take all of those query parameters
			 that were sent with the URL and put them into an associative array where we can access them => Super Global variable

			-$_GET -> superglobal variable that gets assigned all of the queries/parameters in the form of an associative array


			- When passing values using GET, we need to be aware of Reserved Characters in URLs
					-Encoding a reserved character means converting that character to a percentage sign followed by a pair of haxadecimal digits

					-PHP lets us encode by using:
													urlencode($string);

														-Letters,numbers,underscore and dash are unchanged
														-Reserved characters become % + 2-digit hexidecimal
														-Spaces become "+"



					Another type of encoding (these are for GET's)

													rawurlencode($string);

														-Letters,numbers,underscore and dash are unchanged
														-Reserved characters become % + 2-digit hexidecimal
														-Spaces become "%20"

