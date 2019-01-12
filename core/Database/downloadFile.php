<?php
/** Download File **/
if (isset($_POST['downloadFile'])) {

$id = $_POST['downloadFile'];

 $downloadFile = mysql_query("SELECT owner, name,type,size,file_id FROM svs_cloud.files WHERE id = '$id'");
 while ($rows = mysql_fetch_array($downloadFile)) { 
	$file_id = $rows['file_id'];
	$name = $rows['name'];
	$owner = $rows['owner'];
	}

   $file_dest = 'temp/files/' . $owner . '/';
   $filename = $file_dest . $name;
   $tmp_dest = $file_dest . $owner . '/';
   	
   if (!file_exists($filename)) {
      mkdir($tmp_dest, 0777, true);
    }
	
$fileContent = $client->download([
    'FileId' => $file_id,
    'SaveAs' => $filename
    
]);

if(file_exists($filename)){

    //Get file type and set it as Content Type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    header('Content-Type: ' . finfo_file($finfo, $filename));
    finfo_close($finfo);

    //Use Content-Disposition: attachment to specify the filename
    header('Content-Disposition: attachment; filename='.basename($filename));

    //No cache
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    //Define file size
    header('Content-Length: ' . filesize($filename));

    ob_clean();
    flush();
    readfile($filename);
    unlink($filename); // delete file
    exit;
	}
}
?>