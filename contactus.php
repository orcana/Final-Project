<!DOCTYPE html>
<html>
<head>
    <title>Abrille's Cuisine</title>
    
	<!-- external style referencing file location-->
    <link rel="stylesheet" href="CSS\style.css" type="text/css"/>    
</head>
<body>
    <section>
       
      <div id ="logo">
        <img src="pics/logo.jpg" alt="logo" width ="50px" height="48px" />
    </div>
       <h1>Abrille's Cuisine</h1>
     
    
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
    //Information to contact us here

    <div id ="footer">© 2015-2018, Abrielle's Cuisine</div></body>
</html>