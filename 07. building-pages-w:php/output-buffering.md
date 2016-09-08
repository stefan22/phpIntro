# Output Buffering
		- headers and redirection have to come before any output to the HTML, unless
		  we can have output buffering turn on.
		- Instead of sending the code straight away to the browser, builds it up first in the output buffering
		- there's a small performance penalty


		- it can be turn on from the php.ini file or on a page by page basis

		- on a page by page basis by doing:  (page starts with ob_start and ends with ob_end_flush)		//like the headers

											- ob_start()
											- ob_end_flush()



*   [Back](https://github.com/stefan22/phpIntro)