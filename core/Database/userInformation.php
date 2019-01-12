<?php
 // select logged in users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 while ($rows = mysql_fetch_array($res)) { 
	$userId = $rows['userId'];
	$profilepicture = $rows['profilepicture'];
	$userName = $rows['userName'];
	$userStorageLimit = $rows['userStorageLimit'];
  
  }
?>