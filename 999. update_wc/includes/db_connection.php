<?php  
     //1. Create database connection
     $dbhost = "127.0.0.1";
     $dbname = "widget_corp";
     $dbuser = "root";
     $dbpass = "stefano";
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

     // using constants instead BUT NOT LETTING ME IN 
     //define('DB_SERVER', '127.0.0.1');
     //define('DB_USER','widget_corp');
     //define('DB_PASS', 'root');
     //define('DB_NAME','stefano');


     //$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

     // test if connection occurred. better to use errno cause connect_error returns an empty string if no problem
     if (mysqli_connect_errno())  {
          die("Database connection failed: " .
               mysqli_connect_error() .
               " (" . mysqli_connect_errno() .  ")"
          );
        
     }  // connection closed at the bottom of this page
?>