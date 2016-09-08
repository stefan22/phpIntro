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

<?php
     // Often these are form values in $_POST
     $menu_name = "Edit me";
     $position = (int) 4;
     $visible = (int) 1;

     //escaping the POST before adding it to step 2 - No need to escape integers
     $menu_name = mysqli_real_escape_string($conection, $menu_name);

     // 2. perform database query
     $query = "INSERT INTO  subjects (menu_name, position, visible)
               VALUES ('{$menu_name}', {$position}, {$visible})" 
    
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


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
     <head>
          <title>Database connection</title>
     </head>
     <body>

             

     </body>
</html>

<?php
     // 5 close database connection
     mysqli_close($connection);
?>