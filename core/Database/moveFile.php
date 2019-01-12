<?php
/** Move File to Trash **/
if (isset($_POST['trashsubmit'])) {
$id = $_POST['trashsubmit'];
  $sql1 = mysql_query("INSERT INTO svs_cloud.trash SELECT * FROM svs_cloud.files WHERE id = '$id'");
  $sql0 = mysql_query("UPDATE svs_cloud.trash SET date_deleted=now() WHERE id = '$id'");
  $sql2 = mysql_query("DELETE FROM svs_cloud.files WHERE id = '$id'");
  $NotifyTrash = true;

} else {
$TrashError = true;

}

/** Move File out of Trash **/
if (isset($_POST['trashdesubmit'])) {
$id = $_POST['trashdesubmit'];

  $sql1 = mysql_query("INSERT INTO svs_cloud.files SELECT * FROM svs_cloud.trash WHERE id = '$id'") or die(mysql_error());;
  $sql2 = mysql_query("DELETE FROM svs_cloud.trash WHERE id = '$id'") or die(mysql_error());
  $deNotifyTrash = true;

} else {
$TrashError = true;

}
/** Move File **/
function moveFile($fileName) {
  
}
?>