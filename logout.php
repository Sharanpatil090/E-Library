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
</style>
</head>
</head>
<body>

   <!-- HTML for SEARCH BAR -->
   

<header>
   <h1>Library <div id="tfheader">
      <form id="tfnewsearch" action="" method="GET" >
              <input type="text" placeholder="search by author or title" class="tftextinput" name="q" size="21" maxlength="120">
              <input type="submit" value="search" class="tfbutton">
      </form>
   <div class="tfclear"></div>
   </div>
   <div class="container"></h1>
</header>
  
<nav>
  <ul>
  <li> <a href="index.php"><strong><button id="butt" type="button">opyion 1 </button></a></li>
<br></br>
   <li> <a href="index.php"><strong><button id="butt" type="button">opyion 2 </button></a></li>
	<br></br>
     <li> <a href="index.php"><strong><button id="butt" type="button">opyion 3 </button></a></li>
	<br></br>
  </ul>
</nav>

<article>
  <h1>London</h1>
  <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
</article>

<footer>Copyright &copy;1RV15CS142/43</footer>

</div>

</body>
</body>
</html>





<?php
session_start();
session_destroy();

header("location:index.php");

?>