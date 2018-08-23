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
                 
        <section style="padding: 10px 10% 40px 10%" >
       <p style="font-family:Brush Script MT; text-align:center; font-size:300%;"> Contact Us</p><br><br>
            <table style="width:100%">
                <tr>
 <th>   <p style="text-align:left;">
    To contact Abrille's:<br><br> 
    <img src="pics/locationimage.png" style="width:5%"/> #123 John's Street, Port-of-Spain, Trinidad.<br><br>
    <img src="pics/emailimage.png" style="width:5%"/> abrillesdining@gmail.com<br><br>
    <img src="pics/cellphone.png" style="width:5%"/> +1-868-123-4567<br><br>
    <img src="pics/landline.png" style="width:5%"/>  +1-868-987-6543<br><br>  
    <img src="pics/fb%20logo.png" style="width:5%"/> Abrille's Dining<br><br>
    <img src="pics/twitterlogo.png" style="width:5%"/> @AbrilleDining<br><br><br> </th>
        
        
       <th> <div id="map" style="width:400px;height:400px;background:yellow"></div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(10.6619359, -61.5101821),
    zoom: 30,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script></th> 
     </tr>   
     </table>   
        
        To leave a comment please click <a href="comments.php">here.
       </section></p>
       

    <div id ="footer">© 2015-2018, Abrielle's Cuisine</div></body>
</html>