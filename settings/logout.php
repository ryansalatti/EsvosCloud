<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: ../");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: ../");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: ../");
  exit;
 }