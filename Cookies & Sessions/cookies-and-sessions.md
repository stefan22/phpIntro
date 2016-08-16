# Working with Cookies
======================

	- URLs / Links			GET
	- Forms					POST
	- Cookies				COOKIE


	- A third way that we can get data from our users => browser cookies
	- They're small bits of data that a website asks your browser to keep around
	- Cookies give us - web developers - the ability to store usre's state, to remember who
	  the user is and what they were doing
	- Without cookies, web servers won't recognize when multiple page requests come from the same user
	- Servers can recognize IPs but more than one person can share an IP

	## How it works

			- The process starts after a user makes a request to a web server
					ex: (sample request)

						GET /first_page.php HTTP/1.1
						Host:www.fakesite.com
						Accept: */*

			- Then, if the server wants to send back a cookie to the browser, it does it by
			  sending a Set-Cookie command. And the data that it wants to save along with the rest of the
			  page response. In fact it sends it in the Page Header,

			  		ex: (cookie sent by browser with Set-Cookie)

			  			HTTP/1.1 200 OK
			  			Content-type: text/html
			  			Set-Cookie: admin_id=502

			- At this time, the browser stores the cookie in the local computer and keeps it, and then whenever a
			  browser makes another request to the website in the future, it sends all of the cookies that it had
			  stored for that website. 
			  It sends them in the request header

			  		ex:
			  			GET /second_page.php HTTP/1.1
			  			Host: www.fakesite.com
			  			Cookie: admin_id=502
			  			Accept: */*

			- So Cookies are always going to piggyback in the regular request response cycle. There's no way to set
			  or receive cookies without doing a request or a response


			- PHP places cookies on a Superglobal called cookie. (Associative Array)

					ex:
						$_COOKIE



#Setting Cookie Values
======================
		
		- We set cookies in PHP by using PHPs setcookie function.
		- Going to take 3 parameters: $name, $value, $expire

				ex:
					setcookie($name, $value, $expire);

						- $name => name we wanna set for the cookie
						- $value => value we want to associate with that name
						- $expire => how long to keep this cookie around


#Reading Cookie Values
======================

		ex:
				<pre>
				<?php
				print_r($_COOKIE);
				?>	
				</pre>

	