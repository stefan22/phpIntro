<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>

		<?php
			$number = 99;
			$string = "Bug?";
			$array = array(1 => "Homepage", 2 => "About us", 3 => "Services");

			var_dump($number);

			//c:\wamp64\www\debugging.php:15:int 99

			var_dump($string);

			//C:\wamp64\www\debugging.php:17:string 'Bug?' (length=4)

			var_dump($array);

			//C:\wamp64\www\debugging.php:19:
			//array (size=3)
			//  1 => string 'Homepage' (length=8)
			//  2 => string 'About us' (length=8)
			//  3 => string 'Services' (length=8)

		?>
			<br /><br />

		<pre>		
		<?php
			print_r(get_defined_vars());
		?>
		</pre>

		function say_hello($word) {
			echo "hello {$word}";
			var_dump(debug_backtrace());
		}

		say_hello("everyone");



	</body>
</html>