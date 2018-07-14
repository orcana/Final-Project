<?php session_start(); ?>
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
    
    
    <?php if(!empty($_SESSION)){
        echo '<a href="login.php">Logout</a>';
        } else {
             echo '<a href="login.php">Login</a>';
        }
?>
  
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>
    
    <section>
        
  <?php 
         if(!empty($_SESSION)){
               echo '<h1>Welcome' . ' ' . $_SESSION['firstname'] . '</h1>';
               
           
         } else {
              
                 echo '<h1>Welcome</h1>';
     
         }

      
         ?>
    
    </section>
    
//Table which includes pictures and description of the menu item. Should have at least 12-15 items, seperated by appetisers, main courses, dessert, soups ETC ETC of food type.
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>