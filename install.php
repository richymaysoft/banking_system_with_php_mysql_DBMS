<?php
$page = 'Install';
include 'online/includes/config.php';
$msg = '';
$show = 'block';

if ( isset( $_POST[ 'install' ] ) ) {
  $query = '';
  $sqlScript = file( 'db/database.sql' );
  foreach ( $sqlScript as $line ) {
    $startWith = substr( trim( $line ), 0, 2 );
    $endWith = substr( trim( $line ), -1, 1 );

    if ( empty( $line ) || $startWith == '--' || $startWith == '/*' || $startWith == '//' ) {
      continue;
    }

    $query = $query . $line;
    if ( $endWith == ';' ) {
      mysqli_query( $conn, $query )or die( '<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query . '</b></div>' );
      $query = '';
    }
  }

  echo "<script type='text/javascript'>window.alert('DATABASE IMPORTED SUCCESSFULLY!'); window.location.href = 'index.php';</script>";
  mysqli_close( $conn );
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="blue">
  <title>INSTALL | Kinsmen Script</title>
  <meta name="description" content="Kinsmen PHP Investment script.">
  <meta name="keywords" content="Kinsmen PHP Investment script."/>
  <link rel="icon" type="image/png" href="assets/images/kinsmen_favicon.png" sizes="32x32">
  <link rel="online/apple-touch-icon" sizes="180x180" href="assets/images/kinsmen_favicon.png">
  <link href="online/assets/css/src/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="online/assets/css/fontawesome.min.css" rel="stylesheet">
  <style>
    :root {
      --primary_color: blue;
      ?>;
      --secondary_color: red;
      ?>;
    }
  </style>
  <link href="online/assets/css/style.css" rel="stylesheet">
  <link href="online/assets/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="online/assets/css/others.css">
  <script src="online/assets/js/language.js"></script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
  <style>
    .authbody {
      background-image: url(online/assets/images/sunset.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
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

    </div>
    <div class="pageTitle"></div>
  </div>
  <!-- * App Header -->

  <!-- App Capsule -->
  <div id="appCapsule" class="cap">

    <div class="section mt-2 text-center">

    </div>
    <div class="section mb-5 p-2">
      <div class="card">
        <div class="card-body pb-1">
          <p class="text-primary">
            <?= $msg; ?>
          </p>
          <h3>IMPORT DATABASE</h3>
          <hr>
          <form method="post">
            <input type="submit" class="btn btn-danger btn-block btn-lg" name="install" value="IMPORT DATABASE">
          </form>
        </div>
      </div>


      <!-- * App Capsule -->
      <!-- Bootstrap -->
      <script src="online/assets/js/lib/bootstrap.bundle.min.js"></script>
      <!-- Splide -->
      <script src="online/assets/js/plugins/splide/splide.min.js"></script>
      <!-- Base Js File -->
      <script src="online/assets/js/fontawesome.min.js"></script>
      <script src="online/assets/js/all.min.js"></script>
      <script src="online/assets/js/jquery.min.js"></script>
</body>
</html>