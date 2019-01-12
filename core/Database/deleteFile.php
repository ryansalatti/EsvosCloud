<?php
/** Purge individual folder from trash **/
if (isset($_POST['purgeTrashFile'])) {
 $id = $_POST['purgeTrashFile'];
 /** 0 Byte Folder **/
 $isEmptyFolder = mysql_query("SELECT name,type,size,file_id FROM svs_cloud.trash WHERE id = '$id' AND type='folder' AND size='0.000'");

 if (mysql_num_rows($isEmptyFolder)>0) {
  $sql2 = mysql_query("DELETE FROM svs_cloud.trash WHERE id = '$id' AND type='folder' AND size='0.000'");
   } else {
 $isFile = mysql_query("SELECT name,type,size,file_id FROM svs_cloud.trash WHERE id = '$id'");
 while ($rows = mysql_fetch_array($isFile)) { 
	$file_id = $rows['file_id'];
	}

$fileDelete = $client->deleteFile([
    'FileId' => $file_id
]);
} 
  $purgeFile = mysql_query("DELETE FROM svs_cloud.trash WHERE id = '$id'");
}
?>