<?php
ob_start();
session_start();

require_once 'core/config.php';
require_once 'core/Database/userInformation.php';
require_once 'core/Database/fileDatabase.php';

require 'lib/vendor/autoload.php';

use ChrisWhite\B2\Client;
use ChrisWhite\B2\Bucket;

$error = false;
 // if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
  header("Location: login");
}
$client = new Client('e13b86sf8c12', '002399e8667d9eb517178f65a434b1596d4fea392d');

require_once 'lib/randFunctions.php';
require_once 'core/Database/storageCalc.php';

require_once 'core/Database/moveFile.php';
require_once 'core/Database/deleteFile.php';
require_once 'core/Database/createFolder.php';
require_once 'core/Database/downloadFile.php';
require_once 'core/Database/renameFile.php';

require_once 'lib/conversations.php';
?>
