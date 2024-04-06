<?php
session_start();
include 'includes/functions.php';
if ( !isset( $_SESSION[ 'acc_id' ] ) ) {
	header( "Location: login.php" );
	exit();
} 
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
	<meta name="keywords" content="<?= $siteKeywords; ?>"/>
	<meta property="og:description" content="<?= $siteDescription; ?>">
	<link rel="canonical" href="<?= $PageURL; ?>">
	<meta property="og:url" content="<?= $PageURL; ?>">
	<meta property="og:site_name" content="<?= $siteName; ?>">
	<meta name="theme-color" content="<?= $themeColor; ?>">
	<link rel="icon" type="image/png" href="<?= $uploadFolder.'/'.$favicon; ?>" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $uploadFolder.'/'.$favicon; ?>">

	<link href="assets/css/src/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/src/splide/splide.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
	<link href="assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="assets/css/all.min.css" rel="stylesheet">
	<link href="assets/js/plugins/datatable/datatables.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/others.css">
	
	<style>
    :root {
      --themeColor: <?=$themeColor; ?>;
      --secondaryColor: <?=$secondaryColor; ?>;
    }
  </style>
    <link rel="stylesheet" href="assets/css/style.css">

	<script src="assets/js/language.js"></script>
	<script src="assets/javascript/countries.js"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<script src="assets/js/clipboard.min.js"></script>
<link rel="manifest" href="_manifest.json">
</head>

<body>

	<!-- loader -->
	<div id="loader"> <img src="<?= $uploadFolder.'/'.$favicon; ?>" alt="icon" class="loading-icon"> </div>
	<!-- * loader -->

	<!-- App Header -->
	<div class="appHeader bg-primary text-light">
		<div class="left"> 
			<?php include 'includes/translator.php'; ?>
			</div>
		<div class="pageTitle"> <img src="<?= $uploadFolder.'/'.$logo; ?>" alt="<?=$siteName;?>" class="logo"> </div>
		<div class="right">
			<a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#ProfileModal"> <img src="<?= $uploadFolder.'/'.$image; ?>" alt="<?= implode(' ', array_slice(explode(' ', $name), 0, 1)); ?>" class="imaged" style="width:35px;height:35px;border-radius:50%"> <span class="badge badge-danger"><?=$notecount;?></span> </a> </div>
	</div>
	<!-- * App Header -->