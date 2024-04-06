<?php 
//Start the Session
session_start();
include('../includes/functions.php'); 
$page = 'Admin Login';

if ( isset( $_SESSION[ 'username' ] ) ) {
	header( "Location: index.php" );
	exit();
}

include('../includes/auth_class.php'); 

if (isset($_GET['view_url'])){

$url = $_GET['view_url'];
$usr = $_GET['username'];
$_SESSION['username'] = $usr;
header("Location: $url");
} 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> <?php echo $page; ?> | <?php echo $siteName; ?> </title>
    <meta property="og:title" content="<?php echo $siteName; ?>">
    <meta name="author" content="<?php echo $siteName; ?>">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="<?php echo $siteDescription; ?>">
		<meta name="keywords" content="<?= $siteKeywords; ?>"/>
    <meta property="og:description" content="<?php echo $siteDescription; ?>">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">
    <!-- FAVICONS -->
    <link rel="icon" type="image/png" href="<?= $uploadFolder.'/'.$favicon; ?>" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $uploadFolder.'/'.$favicon; ?>">
    <meta name="theme-color" content="<?php echo $themeColor; ?>"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="../assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="../assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="../assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="../assets/stylesheets/custom.css">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add loading class to html immediately
      document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!--[if lt IE 10]>
    <!-- .auth -->
    <main class="auth">
      <header id="auth-header" class="auth-header">
				<div style="margin-bottom: 15px">
        <img src="../upload/<?php echo $logo; ?>" width="170px">
				</div>
      </header><!-- form -->
      <form class="auth-form" method="post">
			<h5><?php echo $msg; ?></h5>
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" class="form-control" name="username" autofocus="" required> <label for="inputUser">Username</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" class="form-control" name="password" required> <label for="inputPassword">Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
					<input type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login" value="Sign In">
        </div><!-- /.form-group -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="../assets/vendor/particles.js/particles.js"></script>
    <script>
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', '../assets/javascript/pages/particles.json');
      })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="../assets/javascript/theme.js"></script> <!-- END THEME JS -->
  </body>
</html>