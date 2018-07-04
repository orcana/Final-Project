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
    Select Day:<br>
    <select name="Day of the week">
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
  </select><br><br><br><br>
    Select Seat Type:<br>    
  <select name="Seating">
    <option value="2 Seats">Two Seater</option>
    <option value="4 Seats">Four Seater</option>
    <option value="12 Seats">Twelve Seater</option>
    <option value="16 Seats">Sixteen Seats</option>
  </select><br><br><br><br>
    Select Time:<br> 
  <select name="Time">
    <option value="10:00 AM">10:00 AM</option>
    <option value="11:00 AM">11:00 AM</option>
    <option value="12:00 PM">12:00 PM</option>
    <option value="1:00 PM">1:00 PM</option>
    <option value="2:00 PM">2:00 PM</option>
    <option value="3:00 PM">3:00 PM</option>
    <option value="4:00 PM">4:00 PM</option>
    <option value="5:00 PM">5:00 PM</option>
    <option value="6:00 PM">6:00 PM</option>
    <option value="7:00 PM">7:00 PM</option>
    <option value="8:00 PM">8:00 PM</option>
    <option value="9:00 PM">9:00 PM</option>
    <option value="10:00 PM">10:00 PM</option>
  </select>
  <br><br>
  <input type="submit">
</form>
</div> 
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>
