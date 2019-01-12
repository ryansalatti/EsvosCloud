<?php
/** Create Folder **/
if (isset($_POST['folderName'])) {
$folderName = $_POST['folderName'];

$randomString = generateRandomString();

$namesql= "SELECT name,type FROM svs_cloud.files WHERE type = 'folder' AND name = '$userId/$folderName'";

$result=mysql_query($namesql);

if(mysql_num_rows($result)!=0)
       {
        $folderNameError = true;
       }
     else
        {  
       $query2 = "INSERT INTO svs_cloud.files (name,tempname,directory,owner,size,type,file_id,date_last_modified,date_uploaded,shared_with) VALUES ('$userId/$folderName','$randomString','$current_dir','$userId','0','folder', '',now(),now(),'NULL')";
       $res2 = mysql_query($query2) or die(mysql_error());
        }

    unset($folderName);
    unset($userId);
    unset($date_last_modified);
    unset($date_uploaded);
    unset($shared_with);

}   
?>