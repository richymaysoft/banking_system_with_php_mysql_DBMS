<?php
session_start();
require 'online/includes/functions.php';
if ( isset( $_SESSION[ 'acc_id' ] ) ) {
  header( "Location: online/" );
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <title>
    <?= $page.' | '.$siteName; ?>
  </title>
  <meta name="robots" content="index,follow">
  <meta name="robots" content="noindex,follow">
  <meta name="robots" content="index,nofollow">
  <meta name="robots" content="noindex,nofollow">
  <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noodp"/>
  <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?= $siteDescription; ?>">
  <meta name="keywords" content="<?= $siteKeywords; ?>"/>
  <meta property="og:description" content="<?= $siteDescription; ?>">
  <link rel="canonical" href="<?= $PageURL; ?>">
  <meta property="og:url" content="<?= $PageURL; ?>">
  <meta property="og:site_name" content="<?= $siteName; ?>">
  <meta name="theme-color" content="<?= $themeColor; ?>">
  <link rel="icon" type="image/png" href="<?= $uploadFolder.'/'.$favicon; ?>" sizes="32x32">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $uploadFolder.'/'.$favicon; ?>">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
  <style>
    :root {
      --themeColor: <?=$themeColor; ?>;
      --secondaryColor: <?=$secondaryColor; ?>;
    }
  </style>
  	<link rel="stylesheet" href="online/assets/vendor/flatpickr/flatpickr.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="online/assets/css/others.css">
  <link href="online/assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="online/assets/css/all.min.css" rel="stylesheet">
  <script src="online/assets/js/language.js"></script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
  <script src="online/assets/javascript/countries.js"></script>
  <style>
.ie-panel {
    display: none;
    background: #212121;
    padding: 10px 0;
    box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
    clear: both;
    text-align: center;
    position: relative;
    z-index: 1;
}
html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
    display: block;
}
</style>
<style>
input[type=text], select, input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>

<body>
  <div class="preloader">
    <div class="preloader-body">
      <p><img src="<?= $uploadFolder.'/'.$favicon; ?>" width="100px">
      </p>
    </div>
  </div>
  <div class="page">
    <header class="section page-header rd-navbar-transparent-wrap">
      <!--RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
          </div>
          <div class="rd-navbar-aside-outer rd-navbar-collapse">
            <div class="rd-navbar-aside">
              <div class="rd-navbar-info">
                <?php include 'online/includes/trans.php'; ?>
              </div>
              <ul class="list-lined">
                <li><a href="online/login.php">Log in</a>
                </li>
                <li><a href="open-account.php">Open Account</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main-inner">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="<?= $siteUrl; ?>">
                    <img class="brand-logo-dark" src="<?= $uploadFolder.'/'.$logo; ?>" alt="<?= $siteName; ?>" width="100px" height="40px" />
                    <img class="brand-logo-light" src="<?= $uploadFolder.'/'.$logo; ?>" alt="<?= $siteName; ?>" width="100px" height="40px"/></a>
                  
                  </div>
                </div>
              
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item">
                        <a class="rd-nav-link" href="wealth.php">
                          <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Wealth Management</a>
                      </li>
                      <li class="rd-nav-item">
                        <a class="rd-nav-link" href="business.php">
                          <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Business Banking</a>
                      </li>
                      <li class="rd-nav-item">
                        <a class="rd-nav-link" href="inst.php">
                          <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Investment Banking</a>
                      </li>
                      <li class="rd-nav-item">
                        <a class="rd-nav-link" href="online/">
                          <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Cards</a>
                      </li>
                    
                      <li class="rd-nav-item"><a class="rd-nav-link button button-primary text-white" href="online/">INTERNET BANKING</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <?php if ($page != 'Welcome') { ?>
       <div class="rd-navbar-bg novi-background bg-image" style="background-image: url(assets/img/cen2.jpg)"></div>
        <div class="rd-navbar-bg novi-background bg-image" style="height: 100px; background-image: url(assets/img/cen2.jpg)"></div>
      <?php } ?>
    </header>