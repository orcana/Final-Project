<?php 
	$errors = array(
		1=>"Invalid user name or password, Try again",
		2=>"Please login to access this area"
	);
	$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
                            
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Abrille's Cuisine</title>
    
	<!-- external style referencing file location-->
    <link rel="stylesheet" href="CSS\style.css" type="text/css"/>    
</head>
    <body>
    <section>

       <h1><a href="index.php"><img src="pics/mainlogo.png" alt="logo" width ="120px" height="120px"/></h1>
     
    
    </section>
  

	
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>



    <br><br>
<div class= "loginbox">
    <form action="successfullogin.php" method="post">
        Email<br>
        <input type="text" name="email" email="" placeholder="e-mail@domain.com"/> <br>
        Password<br>
        <input type="password" name="password" placeholder="*******"/> <br>
        <input type="submit" name="Login" value="Login" />
</form>
</div> 
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>

