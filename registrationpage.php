<?php $con = mysqli_connect('localhost','root','','project cs');?>
<!DOCTYPE html>
<html>
<head>
    <title>Abrille's Cuisine</title>
	<!-- external style referencing file location-->
	<link rel="stylesheet" href="CSS\style.css" type="text/css"/>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
      crossorigin="anonymous"> // Script pulled from JQuery website to allow the JS below to work
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
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

 
<section style="margin-top:30px;" class="loginbox">	

<form method="POST" action="insert.php" id="registrationpage">

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
    <input type="password" name="password" id="password" required autofocus /> <br>
    Confirm Password<br>
    <input type="password" name="cfpassword" id="cfpassword" required autofocus /> <br>
    <input type="submit" value="Register" /> <!-- Need to fix the 'onclick' to not automatically redirect-->
    

</form>
<script> // Javascript to confirm the password
      
    // Setup form validation on the #registrationpage element
    $("#registrationpage").validate({
    
        // Specify the validation rules
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
				required: true,
				email: true	
            },
            contact: "required",
            address: "required",
            password: {
                required: true,
                minlength: 5
            },
            cfpassword: {
				required: true,
				minlength: 5,
                equalTo : "#password"

            }
        },
        
        // Specify the validation error messages
        messages: {
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
            email: {
				required: "Please enter your email address",
				email: "Please enter a valid email address"	
            },
            contact: "Please enter a contact number",
            address: "Please enter your address!",
            password: {
                required: "This field is required",
                minlength: "Your password must be at least 5 characters long"
            },
            
        },
        
            });
  
  
  </script>
</section>	
	
<footer>
	<p id ="footer">© 2015-2018, Abrielle's Cuisine</p>
</footer>	


</body>
</html>


