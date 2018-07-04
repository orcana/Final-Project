<?php

// test

	$_SESSION['message']= '';
	$con = mysqli_connect('localhost','root','','project cs');

	if ($_SERVER['REQUEST_METHOD']=='POST') {
	# code...

			$fname= $con->real_escape_string($_POST['firstname']);

			$lname= $con->real_escape_string($_POST['lastname']);

			$contact=$con->real_escape_string($_POST['contact']);

			$address= $con->real_escape_string($_POST['address']);

			$email= $con->real_escape_string($_POST['email']); 

			$password= $con->real_escape_string($_POST['password']);


	
					$sql ="INSERT INTO registeredusers(`firstname`, `lastname`, `contact`, `address`, `email`, `password`)" 
					."VALUES ('$fname','$lname','$contact','$address','$email','".SHA1($_POST['password'])."')";
				
			//if query is successful, redirect to ../php/homepage.php
				if ($con->query($sql)===true) {
					$_SESSION['message']="Registration successful! Added $name to the database";
					header('Location: index.php');
			
				}else{
					$_SESSION['message'] = "Error!!!";
				}
		}
	
?>