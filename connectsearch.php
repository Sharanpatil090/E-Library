<!DOCTYPE html>
<html>
<head>
<title>Search Box Example 1</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- CSS styles for standard search box -->
<style type="text/css">
   #tfheader{
      background-color:#c3dfef;
   }
   #tfnewsearch{
      float:right;
      padding:20px;
   }
   .tftextinput{
      margin: 0;
      padding: 5px 15px;
      font-family: Arial, Helvetica, sans-serif;
      font-size:14px;
      border:1px solid #0076a3; border-right:0px;
      border-top-left-radius: 5px 5px;
      border-bottom-left-radius: 5px 5px;
   }
   .tfbutton {
      margin: 0;
      padding: 5px 15px;
      font-family: Arial, Helvetica, sans-serif;
      font-size:14px;
      outline: none;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      color: #ffffff;
      border: solid 1px #0076a3; border-right:0px;
      background: #0095cd;
      background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
      background: -moz-linear-gradient(top,  #00adee,  #0078a5);
      border-top-right-radius: 5px 5px;
      border-bottom-right-radius: 5px 5px;
   }
   .tfbutton:hover {
      text-decoration: none;
      background: #007ead;
      background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
      background: -moz-linear-gradient(top,  #0095cc,  #00678e);
   }
   /* Fixes submit button height problem in Firefox */
   .tfbutton::-moz-focus-inner {
     border: 0;
   }
   .tfclear{
      clear:both;
   }
#sharan {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    background-color:pink;
    border:0px;
    padding:10px;
    border-radius:8px;
}

#sharan:hover {
    background-color:orange ; /* Green */
   
}
</style>
</head>
<body>
   <!-- HTML for SEARCH BAR -->
   <div id="tfheader">
      <form id="tfnewsearch" action="" method="GET" >
              <input type="text" placeholder="search by author or title" class="tftextinput" name="q" size="21" maxlength="120">
              <input type="submit" value="search" class="tfbutton">
      </form>
   <div class="tfclear"></div>
   </div>
<br><br>
</body>
</html>




<html>
<head>

<style>
table
{

border-color:pink;
width:65%;

margin-left:17%;
}
</style>
</head>
<body bgcolor="#EEFDEF">

<?php
  $db=mysqli_connect("localhost","root","","student");
    $query = $_GET['q']; 
    // gets value sent over search form
     
          $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){   
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($db,$query);
        // makes sure nobody uses SQL injection
         
        $sql = "SELECT * FROM book
            WHERE (`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%')" or die(mysqli_error());
             $raw_results=mysqli_query($db,$sql);
  
        
       
         
        if(mysqli_num_rows($raw_results) > 0)
        { // if one or more rows are returned do following
            ?><table border="0px solid blue" cellpadding="5" cellspacing="5"><?php 
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
            {
            
      // $results = mysqli_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
              ?> 
              <tr>
             
              <td>
              
                    <img src="java1.jpg" alt="Mountain View">
              </td>
              <td>
              <?php
              echo "<h2>" . $results['title'] . "</h2><hr/>";
              echo "<b>Book ID</b> : " . $results['ser_no'] . "<br>";
              
             
              echo "<b>Author : </b>" . $results['author'] . "<br>";
             
             $linkad="Req.html";
              echo "<br><a style='text-decoration:none;' href='.$linkad.' ?id=".$results['ser_no']." ><button id=\"sharan\"> Request </button></a>" . "<br><br><br>";
              ?>
              </td>
              </tr>

            <?php }
             echo "</table>";
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

	
    }
  else{ // if query length is less than minimum
        echo "<p margin-left=50px,50px,50px,50px>Minimum length is </p>".$min_length;
    }
?>



