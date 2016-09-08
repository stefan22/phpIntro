# Loops

### while loops

	while (expression) {
		statement;
	}


```
ex.
	$count = 0;
	while($count <= 10) {
	  echo $count;
	  $count +=1;
	}
```

### for loops

```
	for (expr1, expr2, expr3) {
		statement;
	}			
```

```
	ex.
	for($count=0; $count <=10; count++) {
	  echo $count . ", ";
	}
```

### for Each loops
- they take an array
- the end of the array is what ends the looping
- no condition or incrementing

		foreach ($array as $value) {
			statement;
		}


```
ex.
	$ages = array(2,4,5,15,44);

	foreach($ages as $age) {
	   echo "Age: {$age}<br/>";
	}
```


### for Associative arrays

```					
	foreach($array as $key => $value) {
		statement;
	}
```

```
ex.
	$person = array(
	"first_name" => "Kevin",
	"last_name"  => "Long",
	"address"	=>  "123 Main street",
	"city"		=>  "London" 
	);


	foreach($person as $key => $value) {
	$attr_nice = ucwords(str_replace("_","", $key));
	   echo "{$attr_nice}: {$value}<br/>"
	}
```


### Continue  
- use inside the loop to skip the rest of current iteration and to go immediately to the conditional 
  evaluation that starts the next iteration

			ex.  for($count=0; count <=10; count++) {
				if($count == 5) {
					continue;
				}
				echo $count . " . ";
			}

#Break   ->  will end execution of the loop. Not just the current iteration, but all interations.			


			ex.  for($count=0; count <=10; count++) {
				if($count == 5) {
					break;
				}
				echo $count . " . ";
			}

#Array pointers
			
			$ages = array(3,4,6,12,15,32);

			//current:current pointer value
			echo "1: " .current($ages) . "<br />";

			//next: move the pointer to the next item

			next($ages);
			echo "now pointing at: " . current($ages) . "<br/>";



[Back](https://github.com/stefan22/phpIntro)

