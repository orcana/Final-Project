<!DOCTYPE html>
<html>
<head>
	<title>Abrielle's Dining</title>
    </head>
    <!-- external style referencing file location-->
	<link rel="stylesheet" href="CSS\style.css" type="text/css"/>

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
//Images where the redirect after registering would be

    <div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>