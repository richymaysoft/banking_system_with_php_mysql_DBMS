<?php
session_start();
if ( !isset( $_SESSION[ 'username' ] ) ) {
	header( "Location: login.php" );
	exit();
}
require( '../includes/functions.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- End Required meta tags -->
	<!-- Begin SEO tag -->
	<title><?= $page.' | '.$siteName; ?></title>
	<meta property="og:title" content="<?= $siteName; ?>">
	<meta name="author" content="<?= $siteName; ?>">
	<meta property="og:locale" content="en_US">
	<meta name="description" content="<?= $siteDescription; ?>">
	<meta name="keywords" content="<?= $siteKeywords; ?>"/>
	<meta property="og:description" content="<?= $siteDescription; ?>">
	<link rel="canonical" href="<?= $PageURL; ?>">
	<meta property="og:url" content="<?= $PageURL; ?>">
	<meta property="og:site_name" content="<?= $siteName; ?>">
	<!-- FAVICONS -->
	<link rel="icon" type="image/png" href="<?= $uploadFolder.'/'.$favicon; ?>" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $uploadFolder.'/'.$favicon; ?>">
	<meta name="theme-color" content="<?= $themeColor; ?>">
	<!-- End FAVICONS -->
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
	<!-- End GOOGLE FONT -->
	<!-- BEGIN PLUGINS STYLES -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="../assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="../assets/vendor/flatpickr/flatpickr.min.css">
	<link href="../assets/js/plugins/datatable/datatables.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/vendor/datatable/css/responsive.bootstrap4.min.css">
	<!-- END PLUGINS STYLES -->
	<!-- BEGIN THEME STYLES -->
	<?php include '../assets/stylesheets/theme.php'; ?>
	<link rel="stylesheet" href="../assets/stylesheets/theme-dark.min.css" data-skin="dark">
	<link rel="stylesheet" href="../assets/stylesheets/custom.css">
	<link rel="stylesheet" href="../assets/stylesheets/others.css">
	<!-- END THEME STYLES -->

	<script>
		var skin = localStorage.getItem( 'skin' ) || 'default';
		var disabledSkinStylesheet = document.querySelector( 'link[data-skin]:not([data-skin="' + skin + '"])' );
		// Disable unused skin immediately
		disabledSkinStylesheet.setAttribute( 'rel', '' );
		disabledSkinStylesheet.setAttribute( 'disabled', true );
		// add loading class to html immediately
		document.querySelector( 'html' ).classList.add( 'loading' );
	</script>
	<script src="../assets/javascript/language.js"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<script src="../assets/javascript/countries.js"></script>

	<link href="../assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="../assets/css/all.min.css" rel="stylesheet">
	<script src="../assets/vendor/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	
</head>

<body>
	<!-- .app -->
	<div class="app has-fullwidth">
		<header class="app-header app-header-dark">
			<!-- .navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-lg-0">
				<!-- .container -->
				<div class="container">
					<!-- .navbar-brand -->
					<a href="index.php"><img src="<?= $uploadFolder.'/'.$logo; ?>" width="100px"></a>
					<!-- /.navbar-brand -->
					<a class="d-lg-none" href="support-tickets.php"><i class="fa fa-bell text-white"></i> <sup><sup class="text-white font-weight-bold"><?= $notecount; ?></sup></sup></a> 
					<button class="hamburger hamburger-squeeze d-flex d-lg-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
					<!-- .navbar-collapse -->
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<!-- .navbar-nav -->
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<!-- Dashboard -->
							<li class="nav-item active">
								&nbsp;
							</li>
							<li class="nav-item active">
							
								<a class="nav-link" href="index.php"><i class="fa fa-home text-white"></i> Home</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="CreateAccount.php"><i class="fa fa fa-sign-out-alt text-white"></i> Create Account </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="support-tickets.php"><i class="fa fa-bell text-white"></i> Support Tickets </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="Email.php"><i class="fa fa-envelope text-white"></i> Send Email </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="Notice.php"><i class="fa fa-share text-white"></i> Post Notice </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="EmailTemplate.php"><i class="fa fa-cog text-white"></i> Email Templates </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="GeneralSettings.php"><i class="fa fa-cog text-white"></i> Settings </a>
							</li>
						</ul>
						<!-- /.navbar-nav -->
						<div class="desktop">
						<div class="d-inline-flex">
						<div>
						<a href="support-tickets.php"><i class="fa fa-bell text-white"></i> <sup class="text-white font-weight-bold"><?= $notecount; ?></sup></a> 
						</div>
						</div>
						</div>
						
						<!-- /.top-bar-search -->
						<!-- .btn-account -->
						<div class="navbar-nav dropdown d-flex mr-lg-n3">
							<button class="btn-account w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="<?= $uploadFolder.'/'.$favicon; ?>" alt="<?= $siteName; ?>"></span> <span class="account-summary d-lg-none"><span class="account-name text-capitalize text-primary">Admin</span></span></button>
							<!-- .dropdown-menu -->
							<div class="dropdown-menu dropdown-menu-right">
								<div class="dropdown-arrow mr-3"></div>
								<h6 class="dropdown-header d-none d-lg-block d-lg-none text-capitalize text-primary">
									Admin </h6><a class="dropdown-item" href="admins.php"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="logout.php"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
								<div class="dropdown-divider"></div>
							</div>
							<!-- /.dropdown-menu -->
						</div>
						
						<a href="logout.php" class="btn btn-outline-light" style="margin-left: 20px">Sign Out</a>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
			<!-- /.navbar -->
		</header>
		<!-- /.app-header -->