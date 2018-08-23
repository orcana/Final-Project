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
 <table style="width:100%">
<tr>
 <th>   
     <p style="text-align:center;">
         <a href="appetizers.php">
      <img src="pics/appetizers.png" style="width:40%"/><br>
    <a href="mainmenu.php">
      <img src="pics/MainCourse.png" style="width:40%"/><br>         
     
     </p>
     
 </th>      
   <th>
        <p style="text-align:left;">
            <a href="entree.php">
      <img src="pics/entree.png" style="width:40%"/><br>
                <a href="dessert.php">
      <img src="pics/dessert.png" style="width:40%"/><br>
     
     </p>            
                    
                    </th> 
     </tr>   
     </table>
    <p style="text-align:center;">
            <a href="drinks.php">
      <img src="pics/drinks.png" style="width:20%"/><br>
                <a href="drinks.php">
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>