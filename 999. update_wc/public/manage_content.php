<?php require_once("../includes/db_connection.php"); ?>

<?php require_once("../includes/functions.php"); ?>

<?php
     // 2. perform database query
     //$query = "SELECT  *  FROM  subjects";
     $query = "SELECT * ";
     $query .= "FROM subjects ";
     $query .= "WHERE visible = 1 ";
     $query .= "ORDER BY position ASC ";
     $result = mysqli_query( $connection, $query);
     confirm_query($result);

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


