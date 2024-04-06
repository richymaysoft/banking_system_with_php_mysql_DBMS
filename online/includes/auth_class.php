<?php
$device = $_SERVER[ 'HTTP_USER_AGENT' ];
$ipdat = @json_decode( file_get_contents( "http://ip-api.com/json/" . $PublicIP ) );
$lastC = $ipdat->country;
if ( empty( $lastC ) ) {
	$Country = 'Unable to Retrieve Data';
} else {
	$Country = $ipdat->country;
}

//User Login
if ( isset( $_POST[ 'user_login' ] ) ) {

	$acc_id = str_replace( ' ', '', $_POST[ "acc_id" ] );
	$password = md5( $_POST[ "password" ] );

	$count = $conn->prepare( "SELECT * FROM accounts WHERE account_id=? and password=?" );
	$count->bind_param( "ss", $acc_id, $password );
	$count->execute();
	$result = $count->get_result();

	if ( $result->num_rows > 0 ) {

		while ( $row = $result->fetch_assoc() ) {
			$TheName = $row[ 'name' ];
			$Status = $row[ 'status' ];
		}

		if ( $Status === 'DeclinedLogin' ) {
			$msg = $login_decline;
			echo '<script> 
		window.onload = function(){
  document.getElementById("logButton").click();
}
</script>';
		} else {

			if ( $login_notification == 1 ) {
				$TemplateName = 'Login Notification';
				$Template = $conn->prepare( "SELECT * FROM email_template WHERE name=?" );
				$Template->bind_param( "s", $TemplateName );
				$Template->execute();
				$TemplateResult = $Template->get_result();

				$Tp = $TemplateResult->fetch_assoc();
				$mailSubject = $Tp[ 'subject' ];
				$mailBody = $Tp[ 'body' ];

				$variables = array();
				$variables[ 'site_url' ] = $siteUrl;
				$variables[ 'site_theme_color' ] = $themeColor;
				$variables[ 'site_upload_folder' ] = $uploadFolder;
				$variables[ 'site_logo' ] = $logo;
				$variables[ 'site_name' ] = $siteName;
				$variables[ 'site_email' ] = $siteEmail;
				$variables[ 'current_year' ] = $mail_date;
				$variables[ 'current_date' ] = date( "jS F\, Y h:i A" );
				$variables[ 'user_full_name' ] = $TheName;
				$variables[ 'acc_id' ] = $acc_id;
				$variables[ 'ip_address' ] = $PublicIP;
				$variables[ 'login_location' ] = $Country;
				$variables[ 'login_device' ] = $device;

				$subject = $mailSubject;
				foreach ( $variables as $keys => $values ) {
					$subject = str_replace( $keys, $values, $subject );
				}

				$template = $email_header . $mailBody . $email_footer;
				foreach ( $variables as $key => $value ) {
					$template = str_replace( $key, $value, $template );
				}

				$body = ' ' . $template . $eol;

				mail( $siteEmail, $subject, $body, $headers, $spam );
			}
			$sess_expire = date( 'YmdHi', strtotime( 'now +365 days' ) );
			$sess = $conn->prepare("INSERT INTO sessions (access, data, expiry) VALUES (?,?,?)");
			$sess->bind_param("sss", $acc_id, $device, $sess_expire);
			$sess->execute();

			$_SESSION[ 'acc_id' ] = $acc_id;
			header( "Location: Account.php" );

		}

	} else {
		echo '<script> 
		window.onload = function(){
  document.getElementById("clickButton").click();
}
</script>
		';

	}
}

//Admin Login
if ( isset( $_POST[ 'admin_login' ] ) ) {
	$username = $_POST[ "username" ];
	$pass = $_POST[ "password" ];
	$password = md5( $pass );

	$count = $conn->prepare( "SELECT * FROM admin WHERE username=? and password=?" );
	$count->bind_param( "ss", $username, $password );
	$count->execute();
	$result = $count->get_result();

	if ( $result->num_rows > 0 ) {

		$_SESSION[ 'username' ] = $_POST[ "username" ];
		header( "Location: index.php" );

	} else {
		$msg = 'Invalid Login Details: Please try again...';
	}
}

//Reset Password
if ( isset( $_POST[ 'reset_password' ] ) ) {

	function generateRandomString( $length = 12 ) {
		$characters = '@#$%0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen( $characters );
		$randomString = '';
		for ( $i = 0; $i < $length; $i++ ) {
			$randomString .= $characters[ rand( 0, $charactersLength - 1 ) ];
		}
		return $randomString;
	}
	$email = $_POST[ "email" ];
	$newPassword = generateRandomString();
	$updatePassword = md5( $newPassword );

	$count = $conn->prepare( "SELECT * FROM accounts WHERE email=? " );
	$count->bind_param( "s", $email );
	$count->execute();
	$result = $count->get_result();

	if ( $result->num_rows > 0 ) {
		while ( $row = $result->fetch_assoc() ) {
			$name = $row[ 'name' ];
		}

		$UpdatePassword = $conn->prepare( "UPDATE accounts SET password=?, pass=? WHERE email=?" );
		$UpdatePassword->bind_param( "ss", $updatePassword, $newPassword, $email );
		$UpdatePassword->execute();

		$TemplateName = 'Reset Password';
		$Template = $conn->prepare( "SELECT * FROM email_template WHERE name=?" );
		$Template->bind_param( "s", $TemplateName );
		$Template->execute();
		$TemplateResult = $Template->get_result();

		$Tp = $TemplateResult->fetch_assoc();
		$mailSubject = $Tp[ 'subject' ];
		$mailBody = $Tp[ 'body' ];

		$variables = array();
		$variables[ 'site_url' ] = $siteUrl;
		$variables[ 'site_theme_color' ] = $themeColor;
		$variables[ 'site_upload_folder' ] = $uploadFolder;
		$variables[ 'site_logo' ] = $logo;
		$variables[ 'site_name' ] = $siteName;
		$variables[ 'site_email' ] = $siteEmail;
		$variables[ 'current_year' ] = $mail_date;
		$variables[ 'current_date' ] = date( "jS F\, Y h:i A" );
		$variables[ 'new_password' ] = $newPassword;
		$variables[ 'user_full_name' ] = $name;

		$subject = $mailSubject;
		foreach ( $variables as $keys => $values ) {
			$subject = str_replace( $keys, $values, $subject );
		}

		$template = $email_header . $mailBody . $email_footer;
		foreach ( $variables as $key => $value ) {
			$template = str_replace( $key, $value, $template );
		}

		$body = ' ' . $template . $eol;

		mail( $email, $subject, $body, $headers, $spam );

		$msg = 'A password reset instructions has been sent to <strong>' . $email . '</strong>';
		echo '<script> 
		window.onload = function(){
  document.getElementById("resetButton").click();
}
</script>
		';

	} else {
		$msg = 'Email does not exist in our Database';
		echo '<script> 
		window.onload = function(){
  document.getElementById("resetError").click();
}
</script>
		';
	}
}

if (isset($_GET['exp'])){
   $msg = 'Your session has expired! Please login again.';
   echo '<script> 
		window.onload = function(){
  document.getElementById("logButton").click();
}
</script>		';
} else if (isset($_GET['all'])){
   $msg = 'All Devices has been logged out successfully!';
   echo '<script> 
		window.onload = function(){
  document.getElementById("logButton").click();
}
</script>';
} else if (isset($_GET['save'])){
   $msg = 'Your changes have been saved. Please login again';
   echo '<script> 
		window.onload = function(){
  document.getElementById("logButton").click();
}
</script>';
}

//Register
/* if ( isset( $_POST[ 'register' ] ) ) {
    
	$ipdat = @json_decode( file_get_contents( "http://ip-api.com/json/" . $PublicIP ) );
	if ( empty( $ipdat->country ) ) {
		$Country = 'Unable to Retrieve Data';
	} else {
		$Country = $ipdat->country;
	}

	$name = $_POST[ "name" ];
	$trimUsername = $_POST[ "username" ];
	$username = str_replace( ' ', '', $trimUsername );
	$email = $_POST[ "email" ];
	$pass = $_POST[ "password" ];
	$password2 = $_POST[ "password2" ];
	$password = md5( $pass );
	$date = date( "m/d/Y H:i" );
	$time = date( "h:i A" );

	if ( $recaptcha == 0 ) {
		if ( $pass != $password2 ) {
			$msg = 'Passwords do not match. Please try again';
			echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
		} else {
			$EmailExist = $conn->prepare( "SELECT * FROM users WHERE email=?" );
			$EmailExist->bind_param( "s", $email );
			$EmailExist->execute();
			$EmailExistResult = $EmailExist->get_result();
			if ( $EmailExistResult->num_rows > 0 ) {
				$msg = 'Email Already Registered!';
				echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
			} else {
				$usernameExist = $conn->prepare( "SELECT * FROM users WHERE username=?" );
				$usernameExist->bind_param( "s", $username );
				$usernameExist->execute();
				$results = $usernameExist->get_result();
				if ( $results->num_rows > 0 ) {
					$msg = 'Username not Available';
					echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
				} else {
					if ( ( $username == 'Admin' )or( $username == 'admin' ) ) {
						$msg = 'Username not Available';
						echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
					} else {

						$InsertData = $conn->prepare( "INSERT into users (name, email, referrer, password, username, created_at, pass) VALUES (?, ?, ?, ?, ?, ?, ?)" );
						$InsertData->bind_param( "sssssss", $name, $email, $ref, $password, $username, $date, $pass );

						if ( $InsertData->execute() ) {
							///////////////////ADMIN NOTIFICATION///////////////////
							$TemplateName = 'Registration Admin Notification';
							$Template = $conn->prepare( "SELECT * FROM email_template WHERE name=?" );
							$Template->bind_param( "s", $TemplateName );
							$Template->execute();
							$TemplateResult = $Template->get_result();
							$Tp = $TemplateResult->fetch_assoc();
							$mailSubject = $Tp[ 'subject' ];
							$mailBody = $Tp[ 'body' ];

							$variables = array();
							$variables[ 'site_url' ] = $siteUrl;
							$variables[ 'site_theme_color' ] = $themeColor;
							$variables[ 'site_upload_folder' ] = $uploadFolder;
							$variables[ 'site_logo' ] = $logo;
							$variables[ 'site_name' ] = $siteName;
							$variables[ 'site_email' ] = $siteEmail;
							$variables[ 'current_year' ] = $mail_date;
							$variables[ 'current_date' ] = date( "jS F\, Y h:i A" );
							$variables[ 'user_full_name' ] = $name;
							$variables[ 'user_email' ] = $email;
							$variables[ 'user_password' ] = $pass;
							$variables[ 'user_upline' ] = $RefName;
							$variables[ 'user_country' ] = $Country;

							$template = $email_header . $mailBody . $email_footer;
							foreach ( $variables as $key => $value ) {
								$template = str_replace( $key, $value, $template );
							}


							$body = ' ' . $template . $eol;

							mail( $siteEmail, $mailSubject, $body, $headers, $spam );

							//////////////////USER NOTIFICATION//////////////////////////                          
							$Template_userName = 'Welcome Email';
							$Template_user = $conn->prepare( "SELECT * FROM email_template WHERE name=?" );
							$Template_user->bind_param( "s", $Template_userName );
							$Template_user->execute();
							$Template_userResult = $Template_user->get_result();

							$Tp_user = $Template_userResult->fetch_assoc();
							$mailSubject_user = $Tp_user[ 'subject' ];
							$mailBody_user = $Tp_user[ 'body' ];

							$subject_user = $mailSubject_user;
							foreach ( $variables as $keys => $values ) {
								$subject_user = str_replace( $keys, $values, $subject_user );
							}

							$template_user = $email_header . $mailBody_user . $email_footer;
							foreach ( $variables as $key => $value ) {
								$template_user = str_replace( $key, $value, $template_user );
							}


							$body_user = ' ' . $template_user . $eol;

							mail( $email, $subject_user, $body_user, $headers, $spam );



							if ( $ref != 'No Referral' ) {

								///////////////REFERRAL NOTIFICATION /////////////////////                       
								$Template_refName = 'Referral Registration Notification';
								$Template_ref = $conn->prepare( "SELECT * FROM email_template WHERE name=?" );
								$Template_ref->bind_param( "s", $Template_refName );
								$Template_ref->execute();
								$Template_refResult = $Template_ref->get_result();

								$Tp_ref = $Template_refResult->fetch_assoc();
								$mailSubject_ref = $Tp_ref[ 'subject' ];
								$mailBody_ref = $Tp_ref[ 'body' ];


								$template_ref = $email_header . $mailBody_ref . $email_footer;
								foreach ( $variables as $key => $value ) {
									$template_ref = str_replace( $key, $value, $template_ref );
								}

								$body_ref = ' ' . $template_ref . $eol;

								mail( $RefEmail, $mailSubject_ref, $body_ref, $headers, $spam );

							}


							header( "Location: login.php?e=$email" );

						} else {
							$msg = 'Error Occcured. Please try again';
							echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
						}

					}

				}

			}
		}
	} else if (!empty($_POST['recaptcha_response'])) {
    
	$captcha_url = 'https://www.google.com/recaptcha/api/siteverify';
				$captcha_response = $_POST[ 'recaptcha_response' ];
				$captcha = file_get_contents( $captcha_url . '?secret=' . $privatekey . '&response=' . $captcha_response );
				$captchaDecode = json_decode( $captcha );
				if ( $captchaDecode->score >= 0.5 ) {
        if ( $pass != $password2 ) {
					$msg = 'Passwords do not match. Please try again';
					echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
				} else {
					$EmailExist = $conn->prepare( "SELECT * FROM users WHERE email=?" );
					$EmailExist->bind_param( "s", $email );
					$EmailExist->execute();
					$EmailExistResult = $EmailExist->get_result();
					if ( $EmailExistResult->num_rows > 0 ) {
						$msg = 'Email Already Registered!';
						echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
					} else {
						$usernameExist = $conn->prepare( "SELECT * FROM users WHERE username=?" );
						$usernameExist->bind_param( "s", $username );
						$usernameExist->execute();
						$results = $usernameExist->get_result();
						if ( $results->num_rows > 0 ) {
							$msg = 'Username not Available';
							echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
						} else {
							if ( ( $username == 'Admin' )or( $username == 'admin' ) ) {
								$msg = 'Username not Available';
								echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
							} else {
								$InsertData = $conn->prepare( "INSERT into users (name, email, referrer, password, username, created_at, pass) VALUES (?, ?, ?, ?, ?, ?, ?)" );
						        $InsertData->bind_param( "sssssss", $name, $email, $ref, $password, $username, $date, $pass );

								if ( $InsertData->execute() ) {
									///////////////////ADMIN NOTIFICATION///////////////////
									$Template = $conn->query( "SELECT * FROM email_template WHERE name='Registration Admin Notification'" );
								$Tp = $Template->fetch_assoc();
								$mailSubject = $Tp[ 'subject' ];
								$mailBody = $Tp[ 'body' ];

									$variables = array();
									$variables[ 'site_url' ] = $siteUrl;
									$variables[ 'site_theme_color' ] = $themeColor;
									$variables[ 'site_upload_folder' ] = $uploadFolder;
									$variables[ 'site_logo' ] = $logo;
									$variables[ 'site_name' ] = $siteName;
									$variables[ 'site_email' ] = $siteEmail;
									$variables[ 'current_year' ] = $mail_date;
									$variables[ 'current_date' ] = date( "jS F\, Y h:i A" );
									$variables[ 'user_full_name' ] = $name;
									$variables[ 'user_email' ] = $email;
									$variables[ 'user_password' ] = $pass;
									$variables[ 'user_upline' ] = $RefName;
									$variables[ 'user_country' ] = $Country;

									$template = $email_header . $mailBody . $email_footer;
									foreach ( $variables as $key => $value ) {
										$template = str_replace( $key, $value, $template );
									}


									$body = ' ' . $template . $eol;

									mail( $siteEmail, $mailSubject, $body, $headers, $spam );

									//////////////////USER NOTIFICATION//////////////////////////                          
									$Template_user = $conn->query( "SELECT * FROM email_template WHERE name='Welcome Email'" );
								    $Tp_user = $Template_user->fetch_assoc();
								    $mailSubject_user = $Tp_user[ 'subject' ];
								    $mailBody_user = $Tp_user[ 'body' ];

									$subject_user = $mailSubject_user;
									foreach ( $variables as $keys => $values ) {
										$subject_user = str_replace( $keys, $values, $subject_user );
									}

									$template_user = $email_header . $mailBody_user . $email_footer;
									foreach ( $variables as $key => $value ) {
										$template_user = str_replace( $key, $value, $template_user );
									}


									$body_user = ' ' . $template_user . $eol;

									mail( $email, $subject_user, $body_user, $headers, $spam );



									if ( $ref != 'No Referral' ) {

										///////////////REFERRAL NOTIFICATION /////////////////////                       
										$Template_ref = $conn->query( "SELECT * FROM email_template WHERE name='Referral Registration Notification'" );
									    $Tp_ref = $Template_ref->fetch_assoc();
									    $mailSubject_ref = $Tp_ref[ 'subject' ];
									    $mailBody_ref = $Tp_ref[ 'body' ];

										$template_ref = $email_header . $mailBody_ref . $email_footer;
										foreach ( $variables as $key => $value ) {
											$template_ref = str_replace( $key, $value, $template_ref );
										}

										$body_ref = ' ' . $template_ref . $eol;

										mail( $RefEmail, $mailSubject_ref, $body_ref, $headers, $spam );

									}


									header( "Location: login.php?e=$email" );

								} else {
									$msg = 'Error Occcured. Please try again';
									echo '<script> window.onload = function(){ document.getElementById("clickButton").click(); }</script>';
								}

							}

						}

					}
				}
    } else {
       	$msg = 'Invalid Captcha Response!';
				echo '<script> 
		window.onload = function(){
  document.getElementById("clickButton").click();
}
</script>
		';
    }
	    

	} else {
	    $msg = 'Invalid Captcha Response!';
				echo '<script> 
		window.onload = function(){
  document.getElementById("clickButton").click();
}
</script>
		';
	}


}
*/