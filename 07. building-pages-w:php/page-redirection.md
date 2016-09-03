#Page redirection	=> being able to send a user to another page

	- In HTTP, we can redirect the browser to a new URL by using a 302 redirect.
		It has 2 parts: 
						- a status code of 302
						- a location attribute that indicates the new URL

				header("Location: login.php");		//exactly like that to work



