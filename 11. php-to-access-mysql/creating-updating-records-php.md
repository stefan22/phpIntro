# PHP

### Creating records


```
<?php
     //1. Create database connection
     $dbhost = "localhost";
     $dbuser = "widget_cms";
     $dbpass = "stefano";
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

     // test if connection occurred. better to use errno cause connect_error returns an empty string if no problem
     if (mysqli_connect_errno())  {
          die("Database connection failed: " .
          mysqli_connect_error() .
          " (" . mysqli_connect_errno() .  ")"
          );
     }
     // connection closed at the bottom of this page
?>

```


```
<?php
     // Often these are form values in $_POST
     $menu_name = "Edit me";
     $position = 4;
     $visible = 1;

     // 2. perform database query
     $query = "INSERT INTO  subjects (menu_name, position, visible)
               VALUES ('{$menu_name}', '{$position}', '{$visible}')" 
		    
     $result = mysqli_query( $connection, $query);
     // test if there was a query error - if it returns empty you won't get an error
     if (!$result) {
          die("Database query failed");
     }
      or
    if ($result) {
     // Success
     // redirect_to("someone.php")
	  echo "Success";
    } else {
      // failure
      // $message = "Subject creation failed"
          die("Database query failed " .mysqli_error($connection));
    }


?>

```

> What if you need to know the id of the `last inserted record`?

> mysqli_insert_id()

> mysqli_insert_id($connection); 

> it returns the ID of the `most recently inserted` record on that connection.



### Updating records

```
<?php
     // Often these are form values in $_POST
     $id = 5;
     $menu_name = "Delete me";
     $position = 4;
     $visible = 1;

     // 2. perform database query
     $query  = "UPDATE subjects SET ";
     $query .= "menu_name ='{$menu_name}', ";
     $query .= "position ='{$position}', ";
     $query .= "visible ='{$visible}' ";
     $query .= "WHERE id ='{$id}'";
			              
			    
     $result = mysqli_query( $connection, $query);
     // test if there was a query error - if it returns empty you won't get an error
     
     // it looks at last query and how many rows were changed just to see if was actually updated 
     if (!$result && mysqli_affected_rows($connection) == 1) {   
          die("Database query failed");
     }
      or
     if ($result) {
      // Success
      // redirect_to("someone.php")
           echo "Success";
      } else {
      // failure
      // $message = "Subject update failed"
          die("Database query failed " . mysqli_error($connection));
      }


?>
```

- 1 means how many rows were affected
- it checks that in fact, database was updated cause you can get success without updating any records too
- if you pass the same values to the database mysql will return 0


### deleting records

```
<?php
     // Often these are form values in $_POST
     $id = 5;
				    

     // 2. perform database query
     $query  = "DELETE FROM subjects ";
     $query .= "WHERE id = {$id} ";
     $query .= "LIMIT 1";
				              
    //query for debug purposes

     $result = mysqli_query( $connection, $query);
     // test if there was a query error - if it returns empty you won't get an error
     
     // it looks at last query and how many rows were changed just to see if was actually updated 
     if (!$result && mysqli_affected_rows($connection) == 1) {   
          die("Database query failed");
     }
      or
     if ($result) {
      // Success
      // redirect_to("someone.php")
          echo "Success";
      } else {
      // failure
      // $message = "Subject delete failed"
          die("Database query failed " . mysqli_error($connection));
      }


?>
		
```

limit is most useful with delete, to make sure that we only delete one



### SQL Injection

> Once we start constructing SQL queries using dynamic data from variables, then we also have to be careful
> the values we use don't break mysql syntax.

- A process where the user sends a carefully crafted URL string, or a form field value and it injects their SQL into ours.
- SQL injection is the single easiest way for someone to hack your website and steal your data
- SQL injection is the single biggest problem that you need to be guarding against as a web developer


#### a non so innocent syntax error

```
ex 

  $menu_name = "'); DROP TABLE subjects; '";

it's taking a simple insert statement and turning into dropping our entire table of subjects

```
 sql inject can also be used to have a database export all users and their passwords



### Escaping strings for MySql

> Escape strings to make them safe for putting into queries that we're going to send to sql.
> The biggest problem comes from having a single quote in the data that you want to include
> in Sql

- `Escape single quotes` - tells my sql this is not the single quote that end the string, this is
  just part of the string

```
  $menu_name = "Today\'s Widget Trivia";

```


- addslashes($string)

will go through our string and add the backslash in front of those characters

> it was built as a default into PHP2 (Magic Quotes). PHP would automatically call addslashes, and all GET, POSt
> and COOKIE data. Removed in PHP5.4 because it caused a lot of problems due to the fact that could be
> turned on or off.
>
> Replaced with `mysqli_real_escape_string($db, $string);`



```
ex. imagine this came from the POSt

      // Often these are form values in $_POST
     $menu_name = "Today's menu";
     $position = (int) 4;   //make sure it returns an integer
     $visible = (int) 1;

     $menu_name = mysqli_real_escape_string($conection, $menu_name);
    //you don't need to escape anything that is not a string like $position or $visible

```

> you should escape anything that comes from a user,whether a form value, a cookie value
> even your database values which may have been originated from somewhere else

> the only thing you don't want to escape is something that's already been escaped



















[Back](https://github.com/stefan22/phpIntro)
