#Common Problems
	
		-No Output at all
			-Try to access an html page
			-Try to access PHP page
				<?php phpinfo(); ?>
			-Make sure display errors is on and configured
			-Typos
			-Missing semicolon at the end of a line
			-Missing closing brace
			-Missing closing quote
			-Case-sensitive variable names
			-= vs ==


#Warning and Errors

		-Turn on error reporting
			-In php.ini file
				display_errors = On
				error_reporting = E_ALL

			-In PHP code
				ini_set('display_errors', 'On');
				error_reporting(E_ALL);

		- 4 main Error categories
			-Fatal Errors
				-PHP understood the code but could not execute it
					ex. calling a function that isn't defined
			-Syntax Errors
				-PHP could not understand or process the code
					ex. typo
			-Warnings
				-PHP found a problem, but was able to recover
					ex. if you try to divide by zero
						incorrect number of argumens, access permissions
			-Notices
				-PHP is offering advice

			-MacOX
				-Logs to /private/var/log/apache2/error_log

			-Windows WAMP
				-Logs to C:/wamp/logs/php_error.log	or WAMP menu

			-Apache
				-Configured in /etc/apache2/httpd.conf



#Debugging and Troubleshooting

			-echo $variable;		// variable value
			-print_r(array);		// print readable array
			-gettype($variable);	// variable type
			-var_dump($variable);	// variable type and value
			-get_defined_vars();	// array of defined variables
			-debug_backtrace();		// show backtrace

###Xdebug - most popular debugging tool for PHP
		  -http://xdebug.org
		  -FirePHP (http://www.firephp.org) uses firebug  for firefox	

