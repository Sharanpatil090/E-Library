


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
</style>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color:#0076a3 ;
    background-color: #c3dfef;
    clear: left;
    text-align: center;
}
box {
    background-color: lightgrey;
    width: 1000px;
    border: 5px solid green;
    padding: 25px;
    margin: 100px;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
h1
{
	color:#ff5050;
	font-family:georgia;
	font-size: 200%;
}
#butt {
    background-color: #e7e7e7; 
    border: none;
     color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 12px;
}
i
{
	color: #ff5050;
	font-family:calibri;
	font-size: 130%;
	
}
</style>
</head>
</head>
<body>

   <!-- HTML for SEARCH BAR -->
   
<br></br>

<header>
	
   <h1>Library <div id="tfheader">	
      <form id="tfnewsearch" action="" method="POST" >
	  
              <input type="text" placeholder="search by author or title" class="tftextinput" name="q" size="21" maxlength="120">
              <input type="submit" value="search" class="tfbutton">
      </form>
   <div class="tfclear"></div>
   </div>
   <div class="container"></h1>
</header>
  
<nav>
  <ul>
  <li> <a href="request.html"><strong><button id="butt" type="button">request book </button></a></li>
<br></br>
   <li> <a href="req1.php"><strong><button id="butt" type="button">requested books </button></a></li>
	<br></br>
	
  </ul>
</nav>

<article >
  
</article>

<footer>Copyright &copy;1RV15CS142/43</footer>
<?php  session_start();
if(empty($_SESSION['email']))
{
 header("location:index.php");
}

?>
<?php echo $_SESSION['name']; ?>
</div>
<i>wants to end session</i>
</body>


</html>

<html>
<body>
<a href="logout.php"><strong><button id="butt" type="button">&nbsp;&nbsp;&nbsp;logout </button></a>
</body>
</html>
<?php
	include("config.php");
    // gets value sent over search form
     
          //$min_length = 3;
    // you can set minimum length of the query if you want
     
    //if(strlen($query) >= $min_length){  
		if(len($_POST['q'])>3){
	$query=$_POST['q'];
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($db,$query);
        // makes sure nobody uses SQL injection
         
        $sql = "SELECT * FROM book
            WHERE (`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%')" or die(mysqli_error($db));
             $raw_results=mysqli_query($db,$sql);
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             echo "<p> ".$results['ser_no'].",</p>";
                echo "<h3>".$results['title'].",</h3>";
		echo "<p>".$results['author']."
			</p></br>";
		
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
    }

?>

