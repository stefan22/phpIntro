# If Statements

### if (expression) statement;

```
ex.
	if ($a > $b) {
          echo "a is larger than b";	
	}

	<?php
			
	$var1 = 5;
	$var2 = 2;

	if ($var1 > $var2) {
	  echo "$var1 is greater than $var2";
	}

	?>
```

```
	<?php
	$new_users = true;
	if($new_users) {
	  echo "<h1>Welcome!</h1>h1>";
	  echo "<p>We are glad you decided to join us</p>";
	}
	?>	
	<br/><br/>
```

```
	<?php
	$numerator = 20;
	$denominator = 4;
	$result = 0;
	if ($denominator > 0) {
          $result = $numerator / $denominator;
	  echo "Result: {$result}";
	}
	?>
```

[Back](https://github.com/stefan22/phpIntro)
