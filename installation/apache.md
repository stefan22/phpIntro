# Apache

- httpd -v 		// version

### Is apache running?
	- ps aux | grep httpd    // grab all of the processes with httpd in it

### Start, stop and restart apache
	- sudo apachectl start 	//http://localhost default for mac
	- sudo apachectl stop
	- sudo apachectl restart

### Changing document root (Apache Default root)

	- /Library/WebServer/Documents 	//default document root

	#### Changing it to User document root
		- ~/Sites
		- /Users/myname/Sites

	- Apache configuration directory
		- /etc/apache2/users/Stefano.conf
		- change permissions to chmod 644 Stefano.conf




