<?php
// Initialize the session
session_start();
 
if (isset($_GET['username'])){
$view_url = $_GET['url'];
$usr = $_GET['username'];
} 
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php?view_url=$view_url&username=$usr");
exit;
?>