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
     <p style="font-family:Brush Script MT; text-align:center; font-size:300%;"> Drinks</p><br><br>
<section style="padding: 5px 10% 5px 10%" >      
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
 <a href="pics/entree/avocado-caprese-salad-insalata-recipe-slider.jpg">
     <img src="pics/entree/avocado-caprese-salad-insalata-recipe-slider.jpg" style="width:100%"/>
    </a>    
  <div class="text">Avocado Caprese Salad. Cost: $65.00</div>
</div>
<br><br>
<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <a href="pics/entree/Calabria-Style-Hot-Chicken.jpg">
      <img src="pics/entree/Calabria-Style-Hot-Chicken.jpg" style="width:100%"/>
    </a>
  <div class="text">Calabria Style Chicken. Cost: $40.00</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <a href="pics/entree/download.jpg">
      <img src="pics/entree/download.jpg" style="width:100%"/>
    </a>
  <div class="text">Fresh Bruschetta. Cost:$35.00</div>
</div>
    

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <a href="pics/entree/italian-cheese-platter.jpg">
      <img src="pics/entree/italian-cheese-platter.jpg" style="width:100%"/>
    </a>
  <div class="text">Italian Cheese Platter. Cost:$50.00</div>
</div>

     
     <div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <a href="pics/entree/Prawn-chilli-linguine.jpg">
      <img src="pics/entree/Prawn-chilli-linguine.jpg" style="width:100%"/>
    </a>
  <div class="text">Prawn Chilli Linguine.Cost: $60.00</div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
    <br>
    <br>
        </div>
    </section>
         <p style="text-align:center;"> Click to return to the <a href="menu.php"><FONT color="blue">Menu.</FONT></a></p>
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