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
               - object oriented interface (has to do with creating classes and placing functions inside of them)
               - supports other databases - you can use Postgres
               - Configured in PHP.ini
               - prepared statements

     - All 3 extremely similar but there's a few key differences.
     - PHP 5.5v MySQL is going to be deprecated not sure - i got 5.5 on my mac


## Procedural and Objected Oriented (basically functions we call to do things witht it)

          ### procedural                                               

                    mysqli_connect
                    mysqli_connect_errno
                    mysqli_connect_errno
                    mysqli_real_escape_string
                    mysqli_query
                    mysqli_fetch_assoc
                    mysqli_close


          ### objet-oriented (here we're creating a new object and all of the functions that we call are inside of the object)

                    $mysqli  =  new mysqli 
                    $mysqli  -> connect_errno
                    $mysqli  -> connect_error
                    $mysqli  -> real_escape_string
                    $mysqli -> query
                    $mysqli  -> fetch_assoc
                    $mysqli  -> close


          #### http://php.net/manual/en/mysqlinfo.api.choosing.php










