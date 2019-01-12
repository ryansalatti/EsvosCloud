<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Esvos Cloud</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Esvos">
  
<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="core/js/modal.js"></script>
<script src="core/js/sortTable.js"></script>

<link rel="stylesheet" href="core/css/style.css" type="text/css">
<link rel="stylesheet" href="core/css/customMenu.css" type="text/css">

<script src="resources/dropzone/dropzone.js"></script>
<link rel="stylesheet" href="resources/dropzone/css/style.css" type="text/css">

</head>
<body>
<nav style="height:55px;" class="navbar navbar-inverse bg-fade navbar-fixed-top">
<img class="pull-left d-inline-block align-top" style="" src="core/img/cloud.png" width="150">

<!-- Toggle Button -->

<div class="row hidden-sm-up pull-right" style="">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="thumbnailpicture" src=<?php echo '"../lattice/'; echo $profilepicture; echo '"'; ?>"/></a>
   	  <ul class="dropdown-menu dropdown-menu-right" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           <a class="dropdown-item disabled" href="#"><b><?php echo $userName; ?></b><br>View Profile</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item disabled" href="#">News</a>
           <a class="dropdown-item disabled" href="#">Finance</a>
           <a class="dropdown-item disabled" href="#">Lattice</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" data-toggle="modal" data-target="#settings" href="#">Settings</a>
           <a class="dropdown-item" href="settings/logout.php?logout">Log out</a>
     </ul>
</div>

<!-- Nav Content -->
<div class="collapse navbar-toggleable-xs" id="nav-content">
<ul class="nav navbar-nav">
<div class="row hidden-xs-down">
<span class="col-xs-1 pull-right" style="">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="thumbnailpicture" src=<?php echo '"../lattice/'; echo $profilepicture; echo '"'; ?>"/></a>
   	<ul class="dropdown-menu dropdown-menu-right" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           <a class="dropdown-item disabled" href="#"><b><?php echo $userName; ?></b><br>View Profile</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item disabled" href="#">News</a>
           <a class="dropdown-item disabled" href="#">Finance</a>
           <a class="dropdown-item disabled" href="#">Lattice</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item disabled" data-toggle="modal" data-target="#settings" href="#">Settings</a>
           <a class="dropdown-item" href="settings/logout.php?logout">Log out</a>
     </ul>
     </li>
  </span>
<div class="pull-right">
 <div class="col pull-left">
  <div id="custom-search-input" style="">
       
            <div class="col pull-left"><input type="text" id="searchCloud" onkeyup="searchCloud()" class="form-control input-lg" style="height:37px; width:260px;" placeholder="Search Cloud"></div>

        </div>
      </div>
    </div>
<div id="selectmenu" style="padding:10px; margin-right:15px;" class="pull-right col hidden">
<div class="row">
<form action="" method="post" id="form1">
<input type="hidden" id="trashq" name="trashsubmit">
</form>

      <button class="nobtn"><i data-toggle="tooltip" data-html="true" data-placement="bottom" title="Download" class="fa fa-download pull-left fa-lg hoverbutton downloadFile" id="downloadFile" aria-hidden="true"></i></button>
      <button class="nobtn" data-toggle="modal" data-target=".modal-moveFile"><i data-toggle="tooltip" data-html="true" data-placement="bottom" title="Move" class="fa fa-arrows pull-left fa-lg hoverbutton" aria-hidden="true"></i></button>
      <button class="nobtn" type="submit"  form="form1" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Trash"><i class="fa fa-trash pull-left fa-lg hoverbutton" aria-hidden="true"></i></button>
      <button class="nobtn" data-toggle="modal" style="margin-top:5px;" data-target=".modal-renameFile"><i data-toggle="tooltip" data-html="true" data-placement="bottom" title="Rename" class="fa fa-pencil-square-o pull-left fa-lg hoverbutton" aria-hidden="true"></i></button>
      
</div>
</div>


<div id="trashselectmenu" style="padding-top:5px;" class="pull-right col hidden">
<form action="" method="post" id="form2">
<input type="hidden" id="trashr" name="trashdesubmit">
</form>
<button type="submit" class="btn hoverbutton nobtn" form="form2" style="padding:8px;"><i data-toggle="tooltip" data-html="true" data-placement="bottom" title="Restore" class="fa fa-undo pull-left fa-lg hoverbutton" aria-hidden="true"></i></button>
<span data-toggle="modal" data-target=".modal-purgeFile"><i style="padding:10px; border-right: 1px solid #D3D3D3; line-height: 14px; margin-right:20px;" data-toggle="tooltip" data-target=".modal-purgeFile" data-html="true" data-placement="bottom" title="Purge" class="fa fa-trash fa-lg hoverbutton" aria-hidden="true"></i></span>

</div>
</ul>
</div>
</nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column menu">
	
<div id="actions">

        <div class="col" style="margin-left:15px;">        
        <div class="btn-group">

        <span class="btn btn-primary fileinput-button">
            <span>Upload</span>
        </span>
        <span class="dropdown input-group-btn">
	  <button class="btn btn-sm btn-primary active dropdown-toggle" style="height:38px;" type="button" data-toggle="dropdown"><span class="caret"></span></button>
	  <ul class="dropdown-menu" style="z-index:100000;">
	     <li><a href="#" class="dropdown-item disabled">&nbspUpload Folder</a></li>
	     <li><a href="#" class="dropdown-item" data-toggle="modal" data-target=".modal-folderName">&nbspCreate Folder</a></li>
	     <li><a href="#" class="dropdown-item disabled">&nbspCreate Document</a></li>
	     
	  </ul>
	  </span>
	  </div>
            <button class="btn btn-primary start hidden" style="display: none;">
                <i class="glyphicon glyphicon-upload hidden"></i>
                <span>Start upload</span>
            </button>
            <button class="btn btn-warning cancel hidden" style="display: none;">
                <i class="glyphicon glyphicon-ban-circle "></i>
                <span>Cancel upload</span>
            </button>
        </div>
	  
	  </div>
	</form>

	<ul class="nav nav-tabs" id="mainTabs" role="tablist">
          <div class="dropdown-divider"></div>
            <li id="sidemenu" class="nav-item">
              <a class="nav-link active" data-toggle="tab" role="tab" href="#allfilesmenu"><i class="fa fa-folder-o" aria-hidden="true"></i> All Files <span class="sr-only">(current)</span></a>
            </li>
            <li id="sidemenu" class="nav-item">
              <a class="nav-link disabled" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i> Shared Files</a>
            </li>
            <li id="sidemenu" class="nav-item">
              <a class="nav-link disabled" href="#"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Backups</a>
            </li>
            <li id="sidemenu" class="nav-item">
              <a class="nav-link" data-toggle="tab" role="tab" href="#trashmenu"><i class="fa fa-trash-o" aria-hidden="true"></i> Trash</a>
            </li>
          </ul>
		
          <ul class="nav nav-pills flex-column">
          <li id="sidemenu" class="nav-item">
              <a class="nav-link disabled" data-toggle="modal" data-target=".modal-conversations" href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> Conversations (<small style="font-size:80%; color:red;">BETA</small>)</a>
            </li>
          <li id="sidemenu" class="nav-item">
              <a class="nav-link disabled" href="#"><i class="fa fa-users" aria-hidden="true"></i> Contacts</a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" href="http://esvos.com/cloud/upgrade#storagetiers"><i class="fa fa-hdd-o" aria-hidden="true"></i> Upgrade Storage</a><br />
             <a href="#" title="<?php echo 'Files: ' . formatBytes($allfiles_size) . '<br>' . 'Trash: ' . formatBytes($trash_size); ?>" data-toggle="tooltip" data-html="true" data-placement="bottom"><?php echo '&nbsp&nbsp&nbsp' . formatBytes($total_size) . ' used out of ' . formatBytes($userStorageLimit); ?></a>
            </li>
           </ul> 
  	  </ul>
        </nav>    
       </div>
      </div>
     </div>
    </div>
<main id="mainmenu" class="hidden">
<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 container">
 <?php if ($StorageError == true) {
         echo '<div class="alert alert-danger alert-dismissible show" style="position:fixed; z-index:7000; top:0; right:0; margin-top:8px; margin-right:8px;" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Uploading file will exceed your storage quota.<br />
   Upgrade storage for more space.</strong>
</div>';
      } ?>
      <?php if ($NotifyTrash == true) {
         echo '<div id="success-alert" class="alert alert-success alert-dismissible show" style="position:fixed; z-index:7000; top:0; right:0; margin-top:8px; margin-right:8px;" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>File Moved to trash bin.<br /></strong>
</div>';
      } ?>
      <?php if ($fileNameError == true) {
         echo '<div class="alert alert-danger alert-dismissible show" style="position:fixed; z-index:7000; top:0; right:0; margin-top:8px; margin-right:8px;" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>File name already exists.</strong>
</div>';
      } ?>
      <?php if ($folderNameError == true) {
         echo '<div class="alert alert-danger alert-dismissible show" style="position:fixed; z-index:7000; top:0; right:0; margin-top:8px; margin-right:8px;" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Folder name already exists.</strong>
</div>';
      } ?>
<div class="tab-content" id="parentReload">
<div id="allfilesmenu" class="tab-pane fade in active" role="tabpanel">
<span style="margin:5px;">
<a data-toggle="tab" role="tab" href="#allfilesmenu"><i class="fa fa-home fa-2x" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-angle-right fa-2x" style="color:#778899;" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp <?php if($current_dir!='') { echo $current_dir; ?>&nbsp&nbsp&nbsp<i class="fa fa-angle-right fa-2x" style="color:#778899;" aria-hidden="true"></i> <?php } ?>
</span>
 <div id="tableResp" class="table-responsive">
 <table id="userData" class="table table-hover table-sm userData">
 	<thead>
	<tr class="trHead">
	        <th style="width:75%;">Filename &nbsp<i onclick="sortTable(0)" class="caret-icon fa fa-caret-up"></i></th>
	        <th>Last modified</th>
	        <th>Size</th>
	</tr>
	</thead>
       <tbody class="userTable" id="cloudcontent">
       <div class="result">
              <?php
 		$res1=mysql_query("SELECT * FROM svs_cloud.files WHERE directory='$current_dir' AND owner=".$_SESSION['user']);
 		while ($rows = mysql_fetch_array($res1)) { 
		$name = $rows['name'];
		$tempname = $rows['tempname'];
		$owner = $rows['owner'];
		$size = $rows['size'];
		$type = $rows['type'];
		$id = $rows['id'];
		$date_last_modified = $rows['date_last_modified']; ?>
           <tr onclick="dblclick(this.id);" value="unhide" <?php if($type=='folder') { ?> data-toggle="tab" role="tab" href="#<?php echo $tempname; ?>" <?php } ?> id="<?php echo $id . '-' . $type . '-' . $tempname ?>">
             <th><a id="<?php echo $name; ?>" data-toggle="modal" data-target=".modal-img"><small></a><i class="fa fa-<?php echo $type; ?> fa-lg" aria-hidden="true"></i>&nbsp&nbsp<?php echo fixName($name); ?></small><i class="fa fa-share-alt pull-right" style="margin-right:30px; color:#778899;" aria-hidden="true"></i></th>
             <th><small><?php echo timestamp($date_last_modified); ?></small></th>
             <th><small><?php echo formatBytes($size); ?> </small></th>
           </tr>
           <?php } ?></div>
          </tbody>
       </table>
    </div>
  </div>
<?php
 		$restab=mysql_query("SELECT * FROM svs_cloud.files WHERE type='folder' AND owner=".$_SESSION['user']);
 		while ($rows = mysql_fetch_array($restab)) { 
		$name = $rows['name'];
		$tempname = $rows['tempname'];
		$owner = $rows['owner'];
		$size = $rows['size'];
		$type = $rows['type'];
		$id = $rows['id'];
		$date_last_modified = $rows['date_last_modified']; ?>  
<div id="<?php echo $tempname; ?>" class="tab-pane fade in" role="tabpanel">
<span style="margin:5px;">
<a data-toggle="tab" role="tab" href="#allfilesmenu"><i class="fa fa-home fa-2x" aria-hidden="true"></i>&nbsp&nbsp&nbsp<i class="fa fa-angle-right fa-2x" style="color:#778899;" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp <?php if($current_dir!='') { echo $current_dir; ?>&nbsp&nbsp&nbsp<i class="fa fa-angle-right fa-2x" style="color:#778899;" aria-hidden="true"></i> <?php } ?>
</span>
 <div id="tableResp" class="table-responsive">
 <table id="userData" class="table table-hover table-sm userData">
 	<thead>
	<tr class="trHead">
	        <th style="width:75%;">Filename &nbsp<i onclick="sortTable(0)" class="caret-icon fa fa-caret-up"></i></th>
	        <th>Last modified</th>
	        <th>Size</th>
	</tr>
	</thead>
       <tbody class="userTable">
       <div class="result">
              <?php
 		$res1=mysql_query("SELECT * FROM svs_cloud.files WHERE directory='$tempname' AND owner=".$_SESSION['user']);
 		while ($rows = mysql_fetch_array($res1)) { 
		$name = $rows['name'];
		$tempname = $rows['tempname'];
		$owner = $rows['owner'];
		$size = $rows['size'];
		$type = $rows['type'];
		$id = $rows['id'];
		$date_last_modified = $rows['date_last_modified']; ?>
           <tr onclick="dblclick(this.id);" value="unhide" <?php if($type=='folder') { ?> data-toggle="tab" role="tab" href="#<?php echo $tempname; ?>" <?php } ?> id="<?php echo $id . '-' . $type . '-' . $tempname ?>">
             <th><a id="<?php echo $name; ?>" data-toggle="modal" data-target=".modal-img"><small></a><i class="fa fa-<?php echo $type; ?> fa-lg" aria-hidden="true"></i>&nbsp&nbsp<?php echo fixName($name); ?></small><i class="fa fa-share-alt pull-right" style="margin-right:30px; color:#778899;" aria-hidden="true"></i></th>
             <th><small><?php echo timestamp($date_last_modified); ?></small></th>
             <th><small><?php echo formatBytes($size); ?> </small></th>
           </tr>
           <?php } ?></div>
          </tbody>
       </table>
    </div>
  </div>  <?php } ?>
  
<div id="trashmenu" class="tab-pane fade in" role="tabpanel">

 <div class="table-responsive">
 <table id="usertrashData" class="table table-sm table-hover">
 	<thead>
	<tr class="trHead">
        <th style="width:75%;">Filename</th>
        <th>Deleted On</th>
        <th>Size</th>
	</tr>
	</thead>
       <tbody class="userTable" id="trashcontent">
         <?php $res1=mysql_query("SELECT * FROM svs_cloud.trash WHERE owner=$userId ORDER BY date_deleted ASC");
 		while ($rows = mysql_fetch_array($res1)) { 
		$name = $rows['name'];
		$tempname = $rows['tempname'];
		$owner = $rows['owner'];
		$size = $rows['size'];
		$type = $rows['type'];
		$id = $rows['id'];
		$date_deleted = $rows['date_deleted'];
		$date_last_modified = $rows['date_last_modified']; ?>
            <tr onclick="dblclickr(this.id);" value="<?php echo $name; ?>" id="<?php echo $id ?>">
             <th><a id="<?php echo $name; ?>" data-toggle="modal" data-target=".modal-img"><small></a><i class="fa fa-<?php echo $type; ?> fa-lg" aria-hidden="true"></i>&nbsp&nbsp<?php echo fixName($name); ?></small></th>
             <th><small><?php echo timestamp($date_deleted); ?></small></th>
             <th><small><?php echo formatBytes($size); ?> </small></th>
            </tr><?php } ?>
           
          </tbody>
       </table>
    </div>
  </div>
</div> 
    <div class="modal modal-img fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">
       <img id="imageid" class="img-responsive" style="max-width: 100%; max-height: 100%;" src="">
        </div>
    </div>
    </div>
   </div>
   </div>
       <div class="modal modal-moveFile fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">
       	<h2 style="margin:20px;">&nbspMove File</h2>
       	<form style="margin-left:25px;" action="" method="post" enctype="multipart/form-data">
    	<div class="table-responsive">
         <?php
           
 		$res1=mysql_query("SELECT * FROM svs_cloud.files WHERE directory='$current_dir' AND type='folder' AND owner=".$_SESSION['user']);
 		if(mysql_num_rows($res1) > 0) {
 		while ($rows = mysql_fetch_array($res1)) { 
		$name = $rows['name'];
		$tempname = $rows['tempname'];
		$owner = $rows['owner'];
		$size = $rows['size'];
		$type = $rows['type'];
		$id = $rows['id'];
		$date_last_modified = $rows['date_last_modified']; ?>
 <table class="table table-hover table-sm userData">
 	<thead>
	<tr class="trHead">
        <th style="width:65%;">Filename &nbsp</th>
        <th>Last modified</th>
        <th>Size</th>
	</tr>
	</thead>
       <tbody class="userTable" id="cloudcontent">
       <div class="result">
           <tr onclick="dblclick(this.id);" value="unhide" id="<?php echo $id . '-' . $type . '-' . $tempname ?>">
             <th><a id="<?php echo $name; ?>" data-toggle="modal" data-target=".modal-img"><small></a><i class="fa fa-<?php echo $type; ?> fa-lg" aria-hidden="true"></i>&nbsp&nbsp<?php echo fixName($name); ?></small></th>
             <th><small><?php echo timestamp($date_last_modified); ?></small></th>
             <th><small><?php echo formatBytes($size); ?> </small></th>
           </tr>
           <?php } } else { echo 'Create a folder to move this file.'; }?></div>
           
          </tbody>
       </table>
    </div>
    	
	</form>
	<br />
        </div>
    </div>
    </div>
    
    <div class="modal modal-renameFile fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">
       	<h2>&nbspRename File</h2>
       	<form style="margin-left:25px;" action="" method="post" enctype="multipart/form-data">
    		<input type="text" name="renameFile" id="renameFile" />
    		<input type="submit" name="submit" value="Submit" />
    	
	</form>
	<br />
        </div>
    </div>
    </div>
    
    <div class="modal modal-conversations fade" style="margin:20px;" tabindex="-1" role="dialog" aria-labelledby="conversationsModal">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">

<div class="main_section">
      <div class="chat_container">
         <div class="col chat_sidebar">
         <div class="container">
    	 <div class="row">
    	 <div class="new_message_head">
		 <div class="pull-left"><button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button></div>
	</div>

            <div class="dropdown all_conversation">
               <button type="button">
               <i class="fa fa-weixin" aria-hidden="true"></i>
               All Conversations
               </button>
            </div>
            <div class="member_list">
               <ul class="list-unstyled">
               <!--Start Loop-->
              <?php
 		$chatmems=mysql_query("SELECT * FROM esvos.conversations, esvos.users WHERE conversations.sent_to=users.userId ORDER BY conversations.date ASC");
 		while ($rows = mysql_fetch_array($chatmems)) { 
		$id = $rows['id'];
		$userName = $rows['userName'];
		$firstName = $rows['firstName'];
		$lastName = $rows['lastName'];
		$profilepicture = $rows['profilepicture'];
		$date = $rows['date'];
		$sent_to = $rows['sent_to'];
		$sent_from = $rows['sent_from']; ?>
		<div class="tab-content hover">
                  <li data-toggle="tab" role="tab" href="#chat-<?php echo $sent_from . '-' . $sent_to; ?>" id="messagetab" class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="http://www.esvos.com/lattice/<?php echo $profilepicture; ?>" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font"><?php echo $firstName . ' ' . $lastName; ?></strong> <strong class="pull-right">
                           <?php echo timestamp($date); ?></strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font"><?php echo '(' . $userName . ')'; ?></strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li> <?php } ?>
                </div>
              </ul>
            </div>
           </div>
           </div>
          </div>
         <!--chat_sidebar-->
	 
         <div class="col message_section hidden">
		 <div class="row">
	
		 </div><!--new_message_head-->
		 <div class="chat_area">
		 <div class="pull-left" style="width: 100%; padding: 5px; border: 1px solid #f5f3f3; background:#f5f3f3; height: 38px;"><i class="fa fa-arrow-circle-left msg-back" aria-hidden="true"></i></div>
		 <ul class="list-unstyled"><br />
            <?php
 		$chatcontent=mysql_query("SELECT * FROM esvos.conversations, esvos.users WHERE '$userId'=conversations.sent_from OR '$userId'=conversations.sent_to ORDER BY conversations.date ASC");
 		while ($rows = mysql_fetch_array($chatcontent)) { 
		$id = $rows['id'];
		$userName = $rows['userName'];
		$firstName = $rows['firstName'];
		$lastName = $rows['lastName'];
		$profilepicture = $rows['profilepicture'];
		$content = $rows['content'];
		$date = $rows['date'];
		$sent_to = $rows['sent_to'];
		$sent_from = $rows['sent_from']; ?>
	<div id="chat-<?php echo $sent_from . '-' . $sent_to; ?>" class="tab-pane fade in" role="tabpanel">
		 <li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <img src="http://www.esvos.com/lattice/<?php echo $profilepicture; ?>" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p><?php echo $content; ?></p>
						<div class="chat_time pull-right"><?php echo timestamp($date); ?></div>
                     </div>
                  </li>
		 		 <?php } ?>
		 </ul>
		 </div><!--chat_area-->
		 
          <div class="message_write"><form method="post" action="" enctype="multipart/form-data" autocomplete="off">
    	 <textarea name="msg_content" class="form-control" maxlength="500" placeholder="Type a message"></textarea>
		 <div class="clearfix"></div>
		 <div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
	
<button name="btn-msg" method="post" type="submit" href="#" class="pull-right btn btn-success pull-right">Send</button></form></div>
		 </div>
		 </div>
         </div> <!--message_section-->
      </div>

</div>
</div>
<br />
  </div>
    </div>
    </div>
    
   <div class="modal modal-purgeFile fade" style="margin:20px;" tabindex="-1" role="dialog" aria-labelledby="purgeTrashFileModal">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">
	<h2>&nbspAre you sure you wish to permanantly &nbspdelete this? This action cannot be &nbspundone.</h2>
	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" id="purgeTrashFile" name="purgeTrashFile" value="" />
	<input type="submit" name="submit" class="btn btn-primary" value="Purge" />
	</form>
	<br />
        </div>
    </div>
    </div>
       <div class="modal modal-folderName fade" style="margin:20px;" tabindex="-1" role="dialog" aria-labelledby="folderNameModal">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">
	<h2>&nbspCreate Folder</h2>
       	<form style="margin-left:25px;" action="" method="post" enctype="multipart/form-data">
    		<input type="text" name="folderName" id="folderName" required/>
    		<input type="submit" name="submit" value="Create" />
    	
	</form>
	<br />
        </div>
    </div>
    </div>
    
    <div class="modal modal-shareFile fade" style="margin:20px;" tabindex="-1" role="dialog" aria-labelledby="folderNameModal">
	<div class="modal-dialog" style="margin-top:10%;">
	<div class="modal-content">
	<h2>&nbspShare File</h2>
       	<form style="margin-left:25px;" action="" method="post" enctype="multipart/form-data">
    		<input type="text" name="shareFile" id="shareFile" required/>
    		<input type="submit" name="submit" value="Create" />
    	
	</form>
	<br />
        </div>
    </div>
    </div>
</div> <!--main-->

</main>           
<script src="resources/js/unsortFuncs.js"></script>
<script src="core/js/customMenu.js"></script>

<ul class='custom-menu'>
  <li data-action="first" class="fileinput-button"><i class="fa fa-upload" aria-hidden="true"></i> Upload</li>
  <li data-action="second"><i class="fa fa-clone" aria-hidden="true"></i> Copy</li>
  <li data-action="third"><i class="fa fa-arrows" aria-hidden="true"></i> Move</li>
  <button class="downloadFile"><li><i class="fa fa-download" aria-hidden="true"></i> Download</li></button>
  <li data-action="fifth"><i class="fa fa-trash" aria-hidden="true"></i> Delete</li>
</ul>

    <div class="table table-striped files" style="width:50%;position:fixed;bottom:0;right:0;margin:20px;" id="previews">
        <div id="template" class="file-row">
	<button type="button" class="close" data-target="#previews" data-dismiss="alert">
	<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
	</button>
            <div>
                <span class="preview"><img data-dz-thumbnail /></span>
            </div>
            <div>
                <p class="name" data-dz-name></p>
                <strong class="error text-danger" data-dz-errormessage></strong>
            </div>
            <div>
                <p class="size" data-dz-size></p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                </div>
            </div>
            <div>
                <button class="btn btn-primary start" style="display: none;">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
                <button data-dz-remove class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                <button data-dz-remove class="btn btn-danger delete" style="display: none;">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
            </div>
        </div>

    </div>
    <div class="container" id="container">

        <div class="col">
        <span class="fileupload-process">
          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
          </div>
        </span>
        </div>

    </div>
<script src="resources/dropzone/js/upload.js"></script>
</div>
</body>
</html>