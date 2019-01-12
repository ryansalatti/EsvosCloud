<?php
 include 'core/Controller/authController.php';
 include 'core/Controller/loginController.php';
?>
<!DOCTYPE html>
<html>
<head>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link href="../lattice/css/style.css" rel="stylesheet" type="text/css" />
<title>Esvos</title>
</head>
<body>
<nav class="navbar navbar-inverse bg-fade">
<div class="container">
<!-- Toggle Button -->

<div class="row hidden-sm-up">
<div class="col-xs-2">
<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#nav-content">
<span class="navbar-toggler-icon pull-left"><i class="fa fa-bars" aria-hidden="true"></i></span>
</button>
</div>
<a class="navbar-brand hidden-sm-up" style="margin-left:7px;" href="http://www.esvos.com/">
<div class="col-sm-8 mx-auto">
<img style="padding:5px;" src="http://www.esvos.com/cloud/img/logo-large.png"  width="160" /></img></a>
</div>
</div>
<!-- Nav Content -->
<div class="collapse navbar-toggleable-xs" id="nav-content" >
<ul class="nav navbar-nav">

<a class="navbar-brand hidden-sm-down" href="http://www.esvos.com/">
    <img src="http://www.esvos.com/cloud/img/logo-large.png" height="24" alt="">
  </a>
 
  <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="col-sm-3">
             <div class="input-group">
             <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="col-sm-3">
             <div class="input-group">
             <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="col-xs-1">
             <button type="submit" class="btn btn-primary" name="btn-login">Sign In</button>
            </div>
        
        </div>
   
    </form>
            
</div>
</ul>
</div>
</nav>
<br />
<div class="container">
<div class="col-md-6">
        
         <div class="form-group">
             <h2 class="">Don't have an account?</h2>
             <h4 ><a style="color:#2A5DB0;" href="http://www.esvos.com/cloud/register">Create one now!</a></h4>
            </div>
</div>
</body>
</html>
<?php ob_end_flush(); ?>