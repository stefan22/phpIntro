# null  (no value / no zero no empty string | lack of having a value)

### is_null, isset

```
ex.
	$var1 = null;
	$var2 = "";

	//returns 1 for true
	var1 null? <?php echo is_null($var1); ?>   <br/><br/>	

	//returns nothing for false
	var2 null? <?php echo is_null($var2); ?>   <br/><br/>		

	//returns a notice for undefined variable
	var3 null? <?php echo is_null($var3); ?>   <br/><br/>	
	
	//returns not set
	var1 is set?   <?php echo isset($var1); ?> <br/><br />		

	//returns is set
	var2 is set?   <?php echo isset($var2); ?> <br/><br />	

	//returns not set
	var3 is set?   <?php echo isset($var3); ?> <br/><br />		
```

### empty (in php empty means: "", null, 0, 0.0, "0", false, array())

```
	<?php $var3 = "0";

	//returns 1 for empty
	var1 is empty?   <?php echo empty($var1); ?> <br/><br />		

	//returns 1 for empty
	var2 is empty?   <?php echo empty($var2); ?> <br/><br />
	
	//returns 1 for empty
	var3 is empty?   <?php echo empty($var3); ?> <br/><br />		
```


[Back](https://github.com/stefan22/phpIntro)
