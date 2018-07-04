<?php

// test

	$_SESSION['message']= '';
	$con = mysqli_connect('localhost','root','','project cs');

	if ($_SERVER['REQUEST_METHOD']=='POST') {
	# code...

			$day= $con->real_escape_string($_POST['Day of the week']);

			$seat= $con->real_escape_string($_POST['Seating']);

			$time=$con->real_escape_string($_POST['Time']);


	
					$sql ="INSERT INTO `reserving`(`Day of the week`, `Seating`, `Time`) " 
					."VALUES ($day,$seat,$time)";
                    
			//if query is successful, redirect to ../php/index.php
				if ($con->query($sql)===true) {
					$_SESSION['message']="Registration successful! Added $name to the database";
					header('Location: index.php');
			
				}else{
					$_SESSION['message'] = "Error!!!";
				}
		}
	
?>