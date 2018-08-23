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
         <!-- Slideshow container -->
     <p style="font-family:Brush Script MT; text-align:center; font-size:300%;"> Appetizers</p><br><br>
<section style="padding: 5px 10% 5px 10%" >      
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
 <a href="pics/two_seater.jpg">
     <img src="pics/two_seater.jpg" style="width:100%"/>
    </a>    
  <div class="text">Seats two persons, perfect for seating of a single person or couple. Cost:$200.00</div>
</div>
<br><br>
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <a href="pics/four_seater.jpg">
      <img src="pics/four_seater.jpg" style="width:100%"/>
    </a>
  <div class="text">Seats four to eight persons, perfect for a small group. Cost: $350.00</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <a href="pics/eight_seater.jpg">
      <img src="pics/eight_seater.jpg" style="width:100%"/>
    </a>
  <div class="text">Seats eight to twelve persons. Cost: $500.00</div>
</div>
    

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <a href="pics/twelve_seater.jpg">
      <img src="pics/twelve_seater.jpg" style="width:100%"/>
    </a>
  <div class="text">Seats twelve to eighteen persons. Cost:$650.00</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
    <br>
    <br>
        </div>
    </section>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    
   
    

<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>