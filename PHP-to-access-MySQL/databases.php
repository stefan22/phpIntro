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
          // 2. perform database query

     $query = "SELECT  *  FROM  subjects";
     $result = mysqli_query( $connection, $query);
     // test if there was a query error - if it returns empty you won't get an error
     if (!$result) {
          die("Database query failed");
     }


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
     <head>
          <title>Database connection</title>
     </head>
     <body>

             <?php
                         // 3. use returned data (if any)
                         while ($row = mysqli_fetch_row($result) {       // grabs first row and then 
                              // output data from each row                    // continues on until able to grab rows   
                              var_dump($row);
                              echo "<hr />";
                         }

             ?>  

     </body>
</html>

<?php
     // 5 close database connection
     mysqli_close($connection);
?>