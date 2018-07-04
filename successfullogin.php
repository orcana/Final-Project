
<?php 
$con = mysqli_connect('localhost','root','','project cs');

if (!isset($_POST['Login'])){
	Header("Location: login.php?err=2");
	die ();
}

// value from post
$email = $_POST['email'];
$password = $_POST['password'];


// query to find registeredusers
$qregisteredusers = "SELECT * From registeredusers WHERE email = '$email' AND password = '$password'";



// executing the queries 
$q1= mysqli_query($con,$qregisteredusers);



// checking registeredusers query result
if(mysqli_num_rows($q1)==1) {
	
// starting session for registeredusers
	session_start();
	$row = mysqli_fetch_array($q1);
	
// initialization of the session
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['email'] = $row['email'];
$_SESSION['password'] = $row['password'];

// for redirecting to registeredusers home page
Header("Location: index.php");
}



?>




 


