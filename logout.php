<?php
session_start();

unset($_SESSION['user_id'] = $row['user_id']);
unset  ($_SESSION['firstname'] = $row['firstname']);
unset($_SESSION['email'] = $row['email']);
unset  ($_SESSION['password'] = $row['password']);
  session_destroy();
  
  header ("Location: index.php");
  
  ?>