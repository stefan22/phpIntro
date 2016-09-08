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