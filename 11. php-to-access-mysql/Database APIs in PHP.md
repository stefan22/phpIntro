# PHP 3 has different ways to connect to MySQL (database API)

     - mysql
               - original MySQL API
               - only API for version 2, 3 and 4 of PHP
               - preconfigured for MySQL
               - other db not supported only MySQL
               - procedural (as oppose to Object Oriented)

     - mysqli
               - MySQL "improved" API
               - version 5.0
               - object oriented interface
               - other db not supported only MySQL
                - procedural (as oppose to Object Oriented), and Object Oriented interface
                - prepared statements

     - PDO
               - PHP Data Objects 
               - Only Object Oriented
               - version 5.1
               - object oriented interface (has to do with creating classes and placing functions 
                 inside of them)
               - supports other databases - you can use Postgres
               - Configured in PHP.ini
               - prepared statements

     - All 3 extremely similar but there's a few key differences.
     - PHP 5.5v MySQL is going to be deprecated not sure - i got 5.5 on my mac


##                  Procedural and Objected Oriented (basically functions we call to do things witht it)

###                 procedural                                               

                    mysqli_connect
                    mysqli_connect_errno
                    mysqli_connect_errno
                    mysqli_real_escape_string
                    mysqli_query
                    mysqli_fetch_assoc
                    mysqli_close


###                 objet-oriented (here we're creating a new object and all of the functions that 
                    we call are inside of the object)

                    $mysqli  =  new mysqli 
                    $mysqli  -> connect_errno
                    $mysqli  -> connect_error
                    $mysqli  -> real_escape_string
                    $mysqli -> query
                    $mysqli  -> fetch_assoc
                    $mysqli  -> close


####                http://php.net/manual/en/mysqlinfo.api.choosing.php


# PHP database interaction :

     1. Create database connection - should only happen once per php script
     2. perform database query - add, delete update
     3. return data - if we do a select
     4. release returned data - free up mem that was used to hold query
     5. close database connection - should only happen once per php script

##        Create n Close Connection

                    - mysqli_connect()
                    - mysqli_connect_errno()
                    - mysqli_connect_error()
                    - mysqli_close()

                    
```
                  <?php
                         //1. Create database connection
                         $dbhost = "localhost";
                         $dbuser = "widget_cms";
                         $dbpass = "stefano";
                         $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                         // test if connection occurred. better to use errno cause connect_error 
                            returns an 
                            empty string if no problem
                         if (mysqli_connect_errno())  {
                              die("Database connection failed: " .
                                   mysqli_connect_error() .
                                   " (" . mysqli_connect_errno() .  ")"
                              );
                         }
                         // connection closed at the bottom of this page
                  ?>

                  // at end of page or anywhere
                  <?php
                         // 5 close database connection
                         mysqli_close($connection);
                  ?>


```

## Retrieving data from MySQL   (MySQL  API functions)

          mysqli_query()                               // to do our querying
          mysqli_fetch_row()                           // for when we get results back    
          mysqli_free_result()                         // to tell MySQL to free the result at the end  
                                                       // - flush mem

          needless to say -> u must do this within ur html   

```            
             <?php
                         // 3. use returned data (if any)
                         while ($row = mysqli_fetch_row($result) {     // grabs first row and then 
                              // output data from each row             // continues on until able to 
                               var_dump($row);                         // grab rows   
                              echo "<hr />";
                         }

             ?>                                          
                             
```

*   [Back](https://github.com/stefan22/phpIntro)









