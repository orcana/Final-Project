<?php 
$con = mysqli_connect('localhost','root','','project cs');
$ID=$_SESSION['ID'];
$query="SELECT * FROM registereusers WHERE user_id=$ID";
	$result = mysqli_query($con,$query);
	$row= mysqli_fetch_assoc($result);
	$Name=$row['firstname'];
?>


<!DOCTYPE html>
<html>
<head>

	<!-- external style referencing file location-->
	<link rel="stylesheet" href="CSS\style.css" type="text/css"/>
    <title>Abrille's Cuisine</title>
</head>
 
<body>   
    
   <section>
       
      
       <h1><a href="index.php"><img src="pics/mainlogo.png" alt="logo" width ="120px" height="120px"/></h1>
     
    
    </section>
       
     <section>
       
      
       <h1>Welcome, <?php echo "$Name"?> <h1> 
     
    
    </section>   
  

	
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>

    
<!-- General description for the homepage -->  
   <br><br> <div id ="for_left">
    <section style="padding-left: 30%">
   <p>  Welcome to Abrielle's. Our Restaurant offers fine Itallian dining with a resonable price. Our menu includes various dishes that come from across all of Italy.<br> </p>
    <p>Visit us today, so you too can have your own 'Little taste of Italy'</p>
    </section>
    </div> 
    <section style="padding-left:20%">
    <div id="for_right"><img src="pics/ravioli.png" width="500" height="300" alt="ravioli"/></div></section>
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>