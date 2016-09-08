#Modifying Headers => when a web server responds to a browser request, we know it sends back an HTML page,
					  it also sends data just before the page that provides basic information to the
					  browser about what to expect from the data that's going to follow.
					  This data is called the HTTP header.

					  Sample HTTP header

					  		HTTP/1.1 200 OK
					  		Date: Thu, 28 Feb 2016
					  		Server: Apache/2.12
					  		Content-type: text/html;
					  		Content-Length:45334
					  		Connection: close


		## Header functions =>	it allow us to control how we want to construct the headers.
								headers come before all other page data.


		## header($string);

				ex
					header("Content-type:application/pdf");			//makes the server tell the browser that this is a pdf you're sending
																	//yes

					header("Content-Disposition: attachment;		//tell it it's going to be an attachment and suggest a file name
							filename='xyz.pdf");

					header("HTTP/1.1 404 Not Found");				//send status codes


		###  we'll need to work with headers typically when we want to do page redirection - other than that nope



*   [Back](https://github.com/stefan22/phpIntro)
					