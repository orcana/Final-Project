<?php $con = mysqli_connect('localhost','root','','project cs');?>
<!DOCTYPE html>
<html>
<head>
    <title>Abrille's Cuisine</title>
	<!-- external style referencing file location-->
	<link rel="stylesheet" href="CSS\style.css" type="text/css"/>

</head>
<body>
   <div id ="logo">
        <img src="logo.jpg" alt = "logo" width ="50px" height="48px" usemap="logo"/>
        <map name ="logo">
        <area shape="rect" coords="0,0,150,150" href="index.php" alt="Logo"/>
        </map>
    </div>
    <h1>Register</h1>
	
	
	
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>

 
<section style="margin-top:30px;" class="loginbox">	

<form method="POST" action="insert.php" >

    First Name <br>
    <input type="text" firstname=""  name="firstname" placeholder="First Name" required autofocus/> <br>
    Last Name<br>
    <input type="text" lastname=""  name="lastname" placeholder="Last Name" required autofocus/> <br>
    Contact<br>
    <input type="text" contact=""  name="contact" placeholder="123-4567" required autofocus/><br>
    Address<br>
    <input type="text" address="" name="address" placeholder="your address" required autofocus/> <br>
    Email<br>
    <input type="text" email="" name="email" placeholder="email@domain.com" required autofocus/> <br>
    Password<br>
    <input type="text" password="" name="password" placeholder="*******" required autofocus /> <br>
    <input type="submit" name="Register"/>

</form>

</section>	
	
<footer>
	<p id ="footer">© 2015-2018, Abrielle's Cuisine</p>
</footer>	


</body>
</html>