<?php
$page = 'Reset Password';
$msg ='';
include 'includes/functions.php';
include 'includes/auth_class.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="<?= $themeColor; ?>">
	<title>
		<?= $page.' | '.$siteName; ?>
	</title>
	<meta name="description" content="<?= $siteDescription; ?>">
	<meta name="keywords" content="<?= $siteName; ?>"/>
	<link rel="icon" type="image/png" href="upload/<?= $favicon; ?>" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="upload/<?= $favicon; ?>">
	<link href="assets/css/src/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/fontawesome.min.css" rel="stylesheet">
	<style>
    :root {
      --themeColor: <?=$themeColor; ?>;
      --secondaryColor: <?=$secondaryColor; ?>;
    }
  </style>
    <link rel="stylesheet" href="assets/css/style.css">
	<link href="assets/css/all.min.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/others.css">
	<script src="assets/js/language.js"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<style>

		.authbody {
			background:linear-gradient(0deg, <?=$rgba;?>, <?=$rgba;?>), url('assets/images/bg.jpg');
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			height: 100%;
		}
		
		.cap {
		
			left: 0;
			right: 0;
			top: 15%;
			width: 480px;
			margin: 0 auto
		}
		
		@media only screen and (max-width: 600px) {
			.cap {
	
				left: 0;
				right: 0;
				top: 0;
				width: 100%;
				margin: 0 auto
			}
		}
	</style>

</head>

<body class="authbody">


	<!-- App Header -->
	<div class="appHeader no-border transparent position-absolute">
		<div class="left">
			<a href="register.php">
					 SIGN UP <i class="fas fa-sign-in-alt text-white"></i> 
					</a>

		</div>
		<div class="pageTitle"></div>
		<div class="right">
			<?php include 'includes/translator.php'; ?>
		</div>
	</div>
	<!-- * App Header -->

	<!-- App Capsule -->
	<div id="appCapsule" class="cap">

		<div class="section mt-2 text-center">
			<a href="<?= $siteUrl; ?>">
			<img src="upload/<?= $logo; ?>" width="150px"/>
			</a>
		</div>
		<div class="section mb-5 p-2">

			<form method="post">
			    
				<div class="card">
					<div class="card-body pb-1">
						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="label" for="email1">Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>
						</div>
					
						<div class="form-group basic">
							<div class="input-wrapper">
								<a href="login.php" class="text-primary">Login</a>
							</div>
						</div>
						<input type="submit" class="btn btn-primary btn-block btn-lg" name="reset_password" value="Reset Password">
					</div>
				</div>

			</form>
		</div>
		
	</div>
	<!-- DialogIconedDanger -->
		<button data-bs-toggle="modal" data-bs-target="#DialogIconedDanger" id="resetButton" style="display: none">click</button>
		<div class="modal fade dialogbox" id="DialogIconedDanger" data-bs-backdrop="static" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-icon text-danger">
						<i class="fas fa-check-circle text-success"></i>
					</div>
					<div class="modal-header">
						<h5 class="modal-title">Success</h5>
					</div>
					<div class="modal-body">
						<?= $msg; ?>
					</div>
					<div class="modal-footer">
						<div class="btn-inline">
							<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- * DialogIconedDanger -->
	<!-- DialogIconedDanger -->
		<button data-bs-toggle="modal" data-bs-target="#DialogIconedDangerr" id="resetError" style="display: none">click</button>
		<div class="modal fade dialogbox" id="DialogIconedDangerr" data-bs-backdrop="static" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-icon text-danger">
						<i class="fas fa-times-circle text-danger"></i>
					</div>
					<div class="modal-header">
						<h5 class="modal-title">Error</h5>
					</div>
					<div class="modal-body">
						<?= $msg; ?>
					</div>
					<div class="modal-footer">
						<div class="btn-inline">
							<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- * DialogIconedDanger -->
	<!-- * App Capsule -->
	<!-- Bootstrap -->
	<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
	<!-- Splide -->
	<script src="assets/js/plugins/splide/splide.min.js"></script>
	<!-- Base Js File -->
	<script src="assets/js/fontawesome.min.js"></script>
	<script src="assets/js/all.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<?= $crisp; ?>
</body>
</html>
