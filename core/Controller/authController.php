<?php 
 ob_start();
 session_start();
 require_once 'core/config.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: /cloud/");
  exit;
 }
 
 $error = false;
 ?>