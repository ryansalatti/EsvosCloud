<?php

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter a username.";
  } else if (strlen($name) <= 3) {
   $error = true;
   $nameError = "Username must be at least 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Username must contain alphabets and space.";
  }
  
  else {
    //check username exists or not
    $query = mysql_query("SELECT userName FROM users WHERE userName='$name'");
    if (mysql_num_rows($query) !=0) {
    $error = true;
    $nameError = "Provided username is already in use.";
    }
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have at least 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
  
  //Test if it is a shared client
  if (!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip=$_SERVER['HTTP_CLIENT_IP'];
//Is it a proxy address
}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
  $ip=$_SERVER['REMOTE_ADDR'];
}
//The value of $ip at this point would look something like: "192.0.34.166"
$ip = ip2long($ip);
//The $ip would now look something like: 1073732954
  // if there's no error, continue to signup
  
  if( !$error ) {
   $query = "INSERT INTO users(userName,userEmail,userPass,userIP) VALUES('$name','$email','$password','$ip')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered. You will be redirected in 5 seconds...";
    unset($name);
    unset($email);
    unset($pass);
    unset($ip);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, please try again later."; 
   } 
    header('Refresh: 5; URL=http://esvos.com/cloud/login');
  }
  
 }
?>