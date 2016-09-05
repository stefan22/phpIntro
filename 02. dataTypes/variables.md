# Variables

### Name rules:

- Start with a $
- Followed by letter or underscore
- Can contain letters, numbers, underscores or dashes
- No spaces
- Case-sensitive

#### Examples:

- Good examples:

	* $item
	* $Item
	* $myVariable
	* $this_variable

- Bad examples:
	
	* $this-variable
	* $_book
	* $_bookPage

- Reserved words:

	* http://www.php.net/manual/en/reserved.php


### Strings (string of text btw single or double quotes)
```	
	<?php
	//ex:   echo "Hello world<br />";
	echo "hellow world<br />";
	?>
```		

### two variables
```
ex	
	$greeting = "Hello";
	$target = "world";
	
	//concatenate
	$phrase = $greeting . " " . $target;

	//output via echo
	echo $phrase;
```

### variable replacement

- outputting the variable inside the quotes - able to do so cause still has the dollar sign so it's read 
  as a variable

>	note: it only working when using double quotes.

```
	<?php
	echo "$phrase Again<br />";

	//for these inline replacements- you can also have them
	// inside brackets

	echo "{$phrase}Again<br />";  //so let's say there was no space between
	// $phrase and Again - it would be called
	// $phraseAgain and variable substitution
	// would never happen.

	?>
```	

### string functions

- concatenating by appending it to the end

```
	$first = "the quix brown fox";
	$second = "jumped over the lazy dog";

	$third = $first;
	$third .= $second;
	echo $third;
```

### strtolower, strtoupper, ucfirst, ucwords functions
```
ex:	
	<br/>
	//all to lowercase
	Lowercase: <?php echo strtolower($third); ?><br /> 
	//all to uppercase 
	Uppercase: <?php echo strtoupper($third); ?><br />	
	//first is uppercase in sentence
	Uppercase first: <?php echo ucfirst($third); ?><br />	
	first letter of everyword uppercase
	Uppercase words: <?php echo ucwords($third); ?><br />
```

### strlen, trim, strstr, str_replace functions
```
ex:
	<br/>
	//number of letters/characters
	Length: <?php echo strlen($third); ?> <br/>
	
	//AB C DE
	Trim: <?php echo "A" . trim(" B C D") . "E"; ?> <br/>	
	
	//finds brown and returns every t
	Find: <?php echo strstr($third, "brown"); ?> <br/>	
	
	//finds quick and replaces it with e 
	Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?> <br/><br/>
```	
	

### str_repeat, substr, strpos, strchr functions

	Repeat:<?php echo str_repeat($third, 2); ?> <br>   //repeats $third twice

	Make substring:<?php echo substr($third,5,10); ?> <br>  //makes a new string from p0

	Find position: <?php echo strpos($third,"brown"); ?> <br> //starting position of brown 

	Find character: <?php echo strchr($third,"z");	?> <br>	 // it gives you everything
  




[Back](https://github.com/stefan22/phpIntro)



















