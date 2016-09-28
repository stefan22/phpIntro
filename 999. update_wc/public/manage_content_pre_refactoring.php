<?php  
     //1. Create database connection
     $dbhost = "127.0.0.1";
     $dbname = "widget_corp";
     $dbuser = "root";
     $dbpass = "stefano";
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

     // test if connection occurred. better to use errno cause connect_error returns an empty string if no problem
     if (mysqli_connect_errno())  {
          die("Database connection failed: " .
               mysqli_connect_error() .
               " (" . mysqli_connect_errno() .  ")"
          );
        
     }  // connection closed at the bottom of this page
?>

<?php require_once("../includes/functions.php"); ?>

<?php
     // 2. perform database query
     //$query = "SELECT  *  FROM  subjects";
     $query = "SELECT * ";
     $query .= "FROM subjects ";
     $query .= "WHERE visible = 1 ";
     $query .= "ORDER BY position ASC ";
     $result = mysqli_query( $connection, $query);
     // test if there was a query error - if it returns empty you won't get an error
     if (!$result) {
          //die("Database query failed");
         echo 'Could not run query: ' . mysql_error();
         
         exit;
          
     } else {
          //print_r($query);
          //echo "<br /><br />";
          //$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
          //echo json_encode($json );
          //print_r($result);
     }

?>



<?php include("../includes/layouts/header.php");   ?>
		

<div id="main">
			
	<div id="navigation">
		
			 <ul class="subjects">
              <?php
             	// 3. use returned data (if any)
              // fetch with mysqli associative array method/function- it works
              // best way to do this is to google it everytime
             	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))  {
               
              ?>

                <li>
                    <!-- <a href="#"><?php echo $row["menu_name"] . " (" . $row["id"] . ")"; ?></a>  -->

                    <?php echo $row["id"]; ?> <a href="#"><?php echo $row["menu_name"]; ?></a>
                </li>
            
              <?php
                    
              }

              ?> 
      </ul>

             

	</div> <!--  end of div navigation  -->

			
	<div id="page">
		<h2>Manage Content</h2>


		



	    
	</div> <!--  end of div  page  -->

</div>  <!--  end of div main  -->			
			   <?php 
                    // 4. Released returned data
                    mysqli_free_result($result);


              ?>  

<?php include("../includes/layouts/footer.php"); ?>


<?php
     // 5 close database connection
     mysqli_close($connection);
?>