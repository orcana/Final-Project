<?php 

if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root','','project cs');


// value from post
$email = $_POST['email'];
$password = $_POST['password'];

// query to find registeredusers
$qregisteredusers = "SELECT * FROM registeredusers WHERE email = '$email' AND password = '".SHA1($_POST['password'])."'";



// executing the queries 
$q1= mysqli_query($con,$qregisteredusers);



// checking registeredusers query result
if(mysqli_num_rows($q1)==1) {
	
// starting session for registeredusers
    session_start();
	$row = mysqli_fetch_array($q1, MYSQLI_ASSOC);
	
// initialization of the session
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];

// for redirecting to registeredusers home page
    header("Location: index.php?login=true");
} 
}
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
    
     <?php 
         if(!empty($_SESSION['firstname'])){

               echo '<a href="logout.php">Logout</a>';
               
           
         } else {
              
              echo   '<a href="login.php">Login</a>';
     
         }

      
    ?>
    
    
    
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>



    <br><br>
<div class= "loginbox">
    <form action="" method="post">
        Email<br>
        <input type="text" name="email" email="" placeholder="e-mail@domain.com"/> <br>
        Password<br>
        <input type="password" name="password" placeholder="*******"/> <br>
        <input type="submit" name="submit" value="Login" />
        Don't have an account? <a href="registrationpage.php"><FONT color="blue">Register here.</FONT></a>
</form>
</div> 
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>

