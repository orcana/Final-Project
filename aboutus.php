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
    <section style="padding: 10px 10% 5px 10%" >
        <p> Abrille's Dining was created by Abrille DeSouza III, on the 3rd of August, 1992, and since then, the establishment has grown to
         provide an authentic taste of Itallian cusine to Trinidad &amp; Tobago. Reciepies which have been passed down through generations          of DeSouza's family which not only give a great taste and fragrance of Italy.
        </p>
        
        <p> Aside from pure Italian food, Abrille has catered to adding a 'Trini Flavor' to her creations. There are, in house, a seperate            menu board which list on the day, a couple classic dishes which are served for breakfast, lunch and dinner that can also                    satisify our local cravings.
        </p><br>
        <h1><u><p align="left">F.A.Q</u></h1>
        Q: Can we pay VIA the website? <br>
        A: No. All payments are made in the restaurant, using either cash or credit. <br>
        <br>
        Q: Can chef's take precautions to allergies?<br>
        A: Yes. Once stated that you have an allergy the chef shall ensure the food is not contaminated.<br>
        <br>
        Q: Are meats hallal, and are options kosher? <br>
        A: Yes, all meats are hallal and there are kosher options. Meats are also seperated and there are grills to cook different meats to               ensure no cross contamination.  <br>
        <br>
        Q: Are chef's local or are they Italian?<br>
        A: All chefs are local, however some do have an Italian background such as the owner and a couple others.<br>
        <br>
        </p>
    </section>
    <br>
    <br>
        <p align="center">Click here to read our <a href="privacypolicy.php"><FONT color="blue">Privacy Policy</FONT></a></p>
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>