<!doctype html>
<html>
<head>
<title>elibrary</title>
<style>.button {
  border-radius: 4px;
  background-color:  #0099ff;
  border: none;
  color: #ffff33;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body><style type="text/css">
	body
	{
		background-image:url("http://www.wujinshike.com/data/wallpapers/53/WDF_991231.jpg");
		background-repeat: no-repeat;
		background-size: 1365px 1000px;
   
	}
	#abc
	{
		border-radius:15px;
		width:200px;
		height:15px;
		padding:20px;
		background:#ffffcc;
		
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
h1
{
	color:#ffdb4d;
	font-family:georgia;
	font-size: 200%;
}

</style>
<div style="width:500px ; height:600px; float:left;">
<div style="padding:85px;">
<h1>Create Account Here</h1>
<form action="loginsignup" method="post">
<input id="abc"type="text" name="usn" placeholder="User usn" required="required"><br><br>
<input id="abc"type="text" name="name" placeholder="User Name"><br><br>
<input id="abc"type="email" name="email" placeholder="example@example.com"><br><br>
<input id="abc" type="password" name="pass" placeholder="*******" minlength="8" ><br><br>
<input id="butt"type="submit" name="signup" value="SIGN UP">
</form>
</div>
</div>
<div style="width:500px ; float:right; height:600px;">
<div style="padding:85px;padding-right:200px;">

<h1>Log In Here</h1>
<form action="loginsignup" method="post">
<input id="abc"type="text" name="email" placeholder="example@example.com"required="required"><br><br>
<input id="abc"type="password" name="pass" placeholder="**********"><br><br>
<input id="butt"type="submit" name="signin" value="SIGN IN">
</div>
</div>
<div>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dummy.html"><button class="button"><span>Home </span></button></a></p>
</div>
</body>
</html>
