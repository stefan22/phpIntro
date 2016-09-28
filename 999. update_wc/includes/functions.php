<?php 
  // test if there was a query error - if it returns empty you won't get an error
  function confirm_query($result) {
    if (!$result) {
       echo "Could no run query";
       die("Database query failed");
       //exit;
    } else {
          //print_r($query);
          //echo "<br /><br />";
          //$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
          //echo json_encode($json );
          //print_r($result);
     }

  } // confirm_query



?>



    
          
  