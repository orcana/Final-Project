<?php $con = mysqli_connect('localhost','root','','project cs');?>
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
  <a href="login.php">Login</a>
  <a href="menu.php">Menu</a>
  <a href="seating.php">Seatings</a>
  <a href="contactus.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
</div>

 
<section style="margin-top:30px;" class="loginbox">	

<form method="POST" action="insert.php" >

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
    <input type="password" password="" name="password" placeholder="*******" required autofocus /> <br>
    Confirm Password<br>
    <input type="password" confpassword="" name="confirmpassword" placeholder="*******" required autofocus /> <br>
    
  </a>  <input type="submit" name="Register"/>

</form>

</section>	
	
<footer>
	<p id ="footer">© 2015-2018, Abrielle's Cuisine</p>
</footer>	


</body>
</html>


<script> // Javascript to confirm the password
      
  $(function() {
  
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
				minlength: 5
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
                required: "Please enter a password",
                minlength: "Your password must be at least 5 characters long"
            },
            cfpassword:{
            	required: "The passwords you typed did not match!",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        
        submitHandler: function(form) {
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>