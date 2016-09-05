# Arrays	(ordered, integer-indexed collection of objects)

```
ex.	
	<?php
		$numbers = array(4,8,12,13,22);			
		echo $numbers[1];					//result is 1
	?>
```

### mixed array
```
		$mixed = array(5,"dog",3, "cat", array("x","y","z"));
		echo $mixed[1];
		echo $mixed[4];				//you're going to get notice array to string conversion result
```

>	for debugging purposes and to see what's inside of an array you can use

		
### print_r command
```
ex.
	<?php echo print_r($mixed); ?>		//stands for print readable

	//or you could also do html <pre> tags and youll get a nice readable layout

	<pre>
	<?php echo print_r($mixed); ?>
	</pre>
```

### Getting a value of an array inside another
```		
ex.
	echo $mixed[4][1];		//returns y			
```

### Adding to an array
```
ex.
	<?php $mixed[2] = "cat"; ?>    //adds string "cat" at position 2

	<?php $mixed[] = "mouse"; ?>   //add string "mouse" at the end of array


[Back](https://github.com/stefan22/phpIntro)

