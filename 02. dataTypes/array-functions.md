# Array functions

### count, max-value, min-value
```
	ex.
		<?php $numbers = array(5,3,7,1,22,8); ?>

		Count:	<?php echo count($numbers); ?> <br/><br/>

			Max value:	<?php echo max($numbers); ?><br/><br/>

			Min value:	<?php echo min($numbers); ?><br/><br/>
```

### sort

- Sort:		
```	
	<?php sort($numbers); print_r($numbers); ?><br/><br/>	//ascending order
```	
- Reverse sort:	
```
 	<?php rsort($numbers); print_r($numbers); ?><br/><br/>	//descending order
```
### implode 	(turns an array into a string)

- Implode:
```
	<?php $num_string = implode(" * ", $numbers); ?>  
```
### explode		(is the opposite of implode)
	
- Explode:
```
	<?php print_r(explode(" * ", $num_string)); ?>  
```
### in_array		 (find if something is in an array)

- 15 in array?: 
```
	<?php echo in_array(15, $numbers); ?>		// it returns true or false
```									
- 15 in array?: 
```
	<?php echo in_array(1, $numbers); ?>		// false by nothing
```

>	Many more array functions at
	http://php.net/manual/en/ref.array.php



[Back](https://github.com/stefan22/phpIntro)


		

