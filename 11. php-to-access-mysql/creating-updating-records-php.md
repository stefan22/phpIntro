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
	     if (!$result && mysqli_affected_rows($connection) == 1) {   // it looks at last query and how many rows were changed
	                                                                 // just to see if was actually updated 
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
	     if (!$result && mysqli_affected_rows($connection) == 1) {   // it looks at last query and how many rows were changed
	                                                                 // just to see if was actually updated 
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
		
``

 limit is most useful with delete, to make sure that we only delete one





[Back](https://github.com/stefan22/phpIntro)
