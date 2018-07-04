
<!DOCTYPE html>
<html>
<head>
    <!-- external style referencing file location-->
<link rel="stylesheet" href="CSS\style.css" type="text/css"/>
	<title>Abrielle's Dining</title>
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
        
<!-- Slideshow container -->
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="pics/two_seater.jpg" style="width:100%">
  <div class="text">Seats two persons, perfect for seating of a single person or couple.</div>
</div>
<br><br>
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="pics/four_seater.jpg" style="width:100%"/>
  <div class="text">Seats four to eight persons, perfect for a small group.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="pics/eight_seater.jpg" style="width:100%"/>
  <div class="text">Seats eight to twelve persons.</div>
</div>
    

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="pics/twelve_seater.jpg" style="width:100%"/>
  <div class="text">Seats twelve to eighteen persons.</div>
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
    
  <p align = "center">To make a reservation,<a href="reserveseat.php"><FONT color="blue"> Click here.</FONT></a>
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>