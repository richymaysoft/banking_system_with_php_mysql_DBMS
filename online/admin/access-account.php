<?php  
//Start the Session
session_start();
include('../includes/functions.php');

if(count($_GET)>0) {
$acc_id = $conn->real_escape_string($_GET["email"]);
$pass = $conn->real_escape_string($_GET["pass"]);
$loginQuery = "SELECT * FROM accounts WHERE account_id='$acc_id' and password = '$pass'";
$count  = $conn->query( $loginQuery );
if ( $count->num_rows > 0 ) {
 $_SESSION[ 'acc_id' ] = $acc_id;
	header("Location: ../index.php");
	} else {
	echo "<script type=\"text/javascript\">window.alert('Invalid Login Credentials');
window.location.href = '$PageURL';</script>";
	}
}
?>