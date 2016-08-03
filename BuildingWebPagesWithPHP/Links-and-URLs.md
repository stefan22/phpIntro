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

