<?php
	include("config.php");
         
        $sql = "SELECT * FROM request where ('serve'=0)" or die(mysql_error());
             $raw_results=mysqli_query($db,$sql);
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
            // $results = mysqli_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
		echo "<p> ".$results['rmail_id'].", ".$results['ser_no']."</p>";
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

?>



