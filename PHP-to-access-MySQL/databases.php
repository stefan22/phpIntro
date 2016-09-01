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