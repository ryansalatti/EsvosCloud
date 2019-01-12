<?php
//include 'config.php';

use ChrisWhite\B2\Client;
use ChrisWhite\B2\Bucket;

//$client = new Client('e12b86bf8f13', '001389a8667d9eb517178f55a434b1596d4fee382d');

$upload_dir = 'temp/files';

if (!empty($_FILES)) { 

$name = $_FILES['file']['name'];	
$name = mysql_real_escape_string($name);

$namesql= "SELECT name,directory,type FROM svs_cloud.files WHERE type = 'file' AND directory='$current_dir' AND name = '$userId/$name'";

$result=mysql_query($namesql);

if(mysql_num_rows($result)!==0)
       {
        $fileNameError = true;
       } else {
       $file_size = $_FILES['file']['size'];
 if (($file_size + $total_size) > $userStorageLimit) {
  $StorageError = true;
} else {
     
     $tempFile = $_FILES['file']['tmp_name'];

     // using DIRECTORY_SEPARATOR constant is a good practice, it makes your code portable.
     $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR;

     // Adding timestamp with images name so that files with same name can be uploaded easily.
     //$mainFile = $uploadPath.time().'-'. $_FILES['file']['name'];
     $extension = explode('.', $name);
     $extension = strtolower(end($extension));
     $key = md5(uniqid());
     $mainFile = $uploadPath.$key.'.'.$extension;
     $tempname = $userId .'/'.$key.'.'.$extension;
     move_uploaded_file($tempFile,$mainFile);
     
 $file = $client->upload([
    'BucketName' => 'esvos-test',
    'FileName' => $tempname,
    'Body' => fopen($mainFile, 'r')
]);

$fileId = $file->getId();

$query2 = "INSERT INTO svs_cloud.files (name,tempname,directory,owner,size,type,file_id,date_last_modified,date_uploaded,date_deleted,shared_with) VALUES ('$userId/$name','$tempname','$current_dir','$userId','$file_size','file','$fileId',now(),now(),now(),'NULL')";
$res2 = mysql_query($query2);
    unset($name);
    unset($userId);
    unset($fileSize);
    unset($file_id);
    unset($date_last_modified);
    unset($date_uploaded);
    unset($shared_with);
    
    unlink($tempFile);
    unlink($mainFile);
   	}
    }
}
?>