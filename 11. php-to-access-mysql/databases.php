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

     //$query = "SELECT  *  FROM  subjects";
     $query = "SELECT * ";
     $query .= "FROM subjects ";
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
                              // output data from each row              // continues on until able to grab rows   
                              var_dump($row);
                              echo "<hr />";
                         }

             ?>



             <?php
                         // 3. use returned data (if any)
                         while ($row = mysqli_fetch_row($result) {       // grabs first row and then 
                              // output data from each row              // continues on until able to grab rows   
                             $row["id"] . "<br />";
                             $row["menu_name"] . "<br />";
                             $row["position"] . "<br />";
                             $row["visible"] . "<br />";
                              echo "<hr />";
                         }

             ?>


             <ul>
               <?php
                         // 3. use returned data (if any)
                         while ($row = mysqli_fetch_row($result)        
                              // output data from each row
               {
                                   
               ?>               
                    <li><?php echo $row["id"];         ?></li>
                    <li><?php echo $row["menu_name"];  ?></li>
                    <li><?php echo $row["position"];   ?></li>
                    <li><?php echo $row["visible"];    ?></li>
                           
               <?php
               }

               ?>
             </ul>





             <?php 
                    // 4. Released returned data
                    mysqli_free_result($result);


             ?>  

     </body>
</html>

<?php
     // 5 close database connection
     mysqli_close($connection);
?>


░░░░░░░░██░░░░░░██████░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ ░░░░░░░░████░░██████░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ ░░░░░░░░██▓▓████▓▓██░░░░░░██████████░░░░░░░░░░░░░░░░░░ ░░░░░░████▓▓▓▓▓▓▓▓██░░██████▓▓▓▓▓▓████░░░░░░░░░░░░░░░░ ░░░░████▓▓▓▓▓▓▓▓▓▓██████▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░░░░░████░░░░ ░░░░██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██████████░░░░ ░░██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓████░░░░ ░░██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██████ ░░██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██████████▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓████░░ ░░██▓▓▓▓▓▓▓▓▓▓▓▓▓▓██████▒▒▒▒▒▒██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░░░ ░░██▓▓▓▓▓▓▓▓▓▓████▒▒▒▒▒▒▒▒▒▒██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░░░ ░░░░██████████▒▒▒▒▒▒▒▒▒▒▒▒██████▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓████░░ ░░░░░░░░░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒▒██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░ ░░░░░░░░░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░ ░░░░░░░░████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░ ░░░░░░░░████████████▒▒▒▒▒▒████▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░ ░░░░░░████░░░░░░░░▓▓██▒▒▒▒██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓██░░░░ ░░░░░░████▓▓░░░░░░░░██▒▒▒▒██████████▓▓▓▓▓▓▓▓▓▓██░░░░░░ ░░░░░░████░░░░░░░░▓▓██▒▒▒▒██▓▓▒▒▒▒▓▓██▓▓▓▓▓▓██░░░░░░░░ ░░░░████████████████▒▒▒▒▒▒██▓▓▒▒▓▓▒▒▓▓██▓▓██░░░░░░░░░░ ░░████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓▒▒▓▓▓▓▓▓▓▓████░░░░░░░░░░░░ ██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓██████░░░░░░░░░░░░░░ ██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓▓▓██░░░░░░░░░░░░░░ ░░██████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██░░░░░░░░░░░░░░ ░░░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓██░░░░░░░░░░░░░░ ░░░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██░░░░░░░░░░░░░░ ░░██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓██░░░░░░░░░░░░ ░░██▒▒▒▒▒▒▒▒▒▒██████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒████░░░░░░░░░░ ░░████████████████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒████░░░░░░░░ ░░░░░░░░░░░░░░░░░░████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▓▓▓▓██░░░░░░ ░░░░░░░░░░░░░░░░░░░░████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▓▓██▓▓██░░░░ ░░░░░░░░░░░░░░░░░░░░░░████▒▒▒▒▒▒▒▒▒▒▒▒████▓▓▓▓▓▓▓▓██░░
permalinkembed
