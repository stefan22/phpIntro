# PHP  //a lot of it i already knew - so don't judge me :)
	   //working on taking notes

## By embedding your code between php tags
	- Essentially telling Apache to turn on and off PHP filtering as it goes through
	  your document

			<?php

				//your code
				//more code
			?>

	- You can also write it this way - not recommended 

			//Short tags (bad form)
			<?		?>
			<?=		?>		  // this one outputs the results directly

			// this must be configure on your php.ini to allow them


	- White space doesn't matter and lines end of semicolons;
	
	- Files end of .php and the php is wrap up between html tags


	- Ex  phpinfo.php with phpinfo(); inside of it process it the php

		  but if you do phpinfo(); inside html you'll be able to see the php tags

		  That's because in the first one (with .php) apache is able to recognize php and 
		  turns on it's PHP module

## Outputting Dynamic text

	- it ability to output dynamic text is what makes it different than html

		<html>
			<body>
				<?php 
					echo "Hello World";
				?>
			</body>
		</html>		....file save as something.php


## Request-Response Cycle

	- This cycle describes the way that a browser and a web server communicate process
	  user requests.

	  	- Browser > makes requests to > Server	
	  	- Say you type yahoo.com - it sends a requests to the yahoo.com web server
	  	- On Yahoo.com web server software needs to be be there to intercept that request
	  	  (we have an HTTP Daemon called Apache there)
	  	- Apache sees the request and checks to see if it has that file
	  	- It goes to the file system and looks for the file - ex. hello.php
	  	- Apache grabs the file - it sees that it has php and process it
	  	- While processing the php it may have to go to the database back and forth a
	  	  few times - it may need to request or store from/ to database
	  	- Once it's done processing the php, it assembles the HTML that's going to be
	  	  returned to the browser

	  	note - there's no chance to process php once is gone to the browser, it only happens
	  	       at the particular time during the request-response cycle


## Code comments

	- Single line comments  (not output into html - must be within the php tags)

		<?php

			// single line comment

		?>



	- Multiple line comments

		<?php

			/* double-line comments are written
				like this, so that you can keep 
				typing and typing
			*/

		?>





















		  

