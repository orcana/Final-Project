<?php

// test

	$_SESSION['message']= '';
	$con = mysqli_connect('localhost','root','','project cs');

	if ($_SERVER['REQUEST_METHOD']=='POST') {
	# code...

			$day= $con->real_escape_string($_POST['Day of the week']);

			$seat= $con->real_escape_string($_POST['Seating']);

			$time=$con->real_escape_string($_POST['Time']);


	
					$sql ="INSERT INTO `reserving`(`day_of_week`, `reserve_id`, `Time`) " 
					."VALUES ($day,$seat,$time)";
                    
        
        
			//if query is successful, redirect to ../php/index.php
				if ($con->query($sql)===true) {
                    $_SESSION['reserve_id'] =mysqli_insert_id($con);
                    
					$_SESSION['message']="Registration successful! Added $name to the database";
					header('Location: reservationconfirmation.php');
			
				}else{
					$_SESSION['message'] = "Error!!!";
				}
		}
	
?>