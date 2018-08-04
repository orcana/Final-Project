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
    <p style="font-family:courier; text-align:center; font-size:200%;"> Privacy Policy</p>
WEBSITE PRIVACY PROTECTION STATEMENT<br> 
We stress the importance of privacy and are committed to earning your trust by adopting high standards for the protection of your personal information.<br><br>
This policy applies to our website(s) and outlines the type of personal information we collect and receive, the circumstances in which we collect or receive personal information, the policies and procedures we have established outlining its use and storage, and for sharing certain types of personal information in certain limited circumstances, the procedures you should follow if you have any questions or requests in respect of your personal information or our policies and procedures and the person to whom such questions or requests should be directed, and the means by which to communicate with that person.<br><br>

We do not control and are not responsible for the policies or actions of third parties linked from this site and you should check directly with them since their policies and terms will govern how they handle and treat personal information.<br><br> 

In this policy, 'personal information' or 'personally identifiable information' means information about you that is unique and would actually or potentially identify you as an individual, like your name, address, e-mail address or phone number, and that is not otherwise publicly available and is not part of your work identification and includes information you provide to us when you use our website to make or modify a reservation, establish a profile, communicate personal preferences, participate in, respond to or take advantage of special offers, or which you otherwise provide to us in the course of using of our website. Aggregate information or statistics, even if compiled or derived from your personal information and then aggregated and mingled with information of others, is not personal information since it does not identify you or any specific personally identifiable information about you. We use aggregate or statistical information to better serve our guests and customers generally, to enhance the performance of our website and to generally improve how we do business.<br><br> 

We will provide you with opportunities to 'unsubscribe' and to correct or update your personal information and described these opportunities below, but you are responsible for ensuring the information you provide to us and that we maintain is complete, accurate and up to date. We cannot and will not be liable to you or any other party if, for any reason, you do not provide us with complete, accurate and current information or you fail to update such information in a timely manner.<br><br>

HOW YOU MAY PROVIDE US YOUR PERSONAL INFORMATION USING OUR WEBSITE<br><br>

1. By making a reservation or by using the website.<br><br>

2. By communicating with us regarding service delivery including any profiles, preferences or special requests you may make.<br><br>

4. By participating in a marketing initiative, survey or responding to special offers we may send you from time to time.<br><br>

5. By registering or otherwise entering information on or through our website.<br><br>

Below we will outline the type of information normally collected in each of these circumstances, the reasons for doing so, how we intend to use it and store it. <br><br>
    
    ♦ Making a reservation/completing forms.<br><br>
    ♦ We offer you the ability to recieve targeted, timely notifications of offers<br><br>
    ♦ By creating an account on our website. <br><br>
    
    WHY WE COLLECT PERSONAL INFORMATION <br><br>

1. To establish, maintain and honor our relationship with you and to provide you with our services and those of our third party suppliers and promotional partners.<br><br>

2. To understand and better attempt to fulfill your needs and preferences in providing services from us.<br><br>

3. To develop, enhance, market or provide products and services or offers we believe, based on the information you provide us, you may be interested in receiving. <br><br>

4. To manage and develop our business and operations and help us improve our services for you. <br><br>

5. To meet legal and regulatory requirements.<br><br>
    
    PLEASE NOTE:
    Cancelling a reservation would not allow a rebate of the fee used to book a table.
    
</section>
<div id ="footer">© 2015-2018, Abrielle's Cuisine</div>
</body>
</html>