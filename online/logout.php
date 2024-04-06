<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

if (isset($_GET['exp'])){
    $r = 'login.php?exp';
} else if (isset($_GET['save'])){
    $r = 'login.php?save';
} else {
    $r = 'login.php';
}
 
// Redirect to login page
header("location: $r");
exit;
?>