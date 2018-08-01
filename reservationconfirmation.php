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
  <a href="login.php">Login</a>
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>
<?php
session_start();

$reservation_id= $_SESSION['reserve_id'];


$con = mysqli_connect('localhost','root','','project cs');

$query= "SELECT *FROM reserving JOIN seats on seats.seat_id = reserving.seat_id WHERE reserve_id = '$reservation_id' "; // pulling from databse to get reservations with unique ID


$result = mysqli_query($con, $query);

if(mysqli_num_rows ($result) == 1) {
    $row = mysqli_fetch_assoc($result);    
        
        ?>


<div>
        <p> Resevation ID: <span> <?php echo $row['reservation_id'] ?></span></p>
        <p> Day: <span> <?php echo $row['day_of_week'] ?></span></p>
        <p> Time: <span> <?php echo $row['Time'] ?></span></p>
        <p> Seats: <span> <?php echo $row['seat_name'] ?></span></p>
        
        </div>
        
        
        
<?php

}



?>

    <div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>