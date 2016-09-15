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

<?php require_once(../includes/functions.php); ?>

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



<?php include("../includes/layouts/header.php");   ?>
		

<div id="main">
			
	<div id="navigation">
		
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

	</div> <!--  end of div navigation  -->

			
	<div id="page">
		<h2>Manage Content</h2>


				<?php 
                    // 4. Released returned data
                    mysqli_free_result($result);


             	?>  



	    
	</div> <!--  end of div  page  -->

</div>  <!--  end of div main  -->			
			

<?php include("../includes/layouts/footer.php"); ?>


<?php
     // 5 close database connection
     mysqli_close($connection);
?>