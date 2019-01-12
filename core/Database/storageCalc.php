<?php
$res3=mysql_query("SELECT size FROM svs_cloud.files WHERE files.owner=".$_SESSION['user']);
 while ($object = mysql_fetch_array($res3)) { 
   $allfiles_size += $object['size'];
 }
$res4=mysql_query("SELECT size FROM svs_cloud.trash WHERE trash.owner=".$_SESSION['user']);
 while ($object = mysql_fetch_array($res4)) { 
   $trash_size += $object['size'];
 }
   $total_size = $trash_size + $allfiles_size;
?>