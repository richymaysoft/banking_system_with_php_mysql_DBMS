<?php
/***********Kinsmen Bank****************/

require 'extract.php';
include 'config.php';
$PageURL = ( isset( $_SERVER[ 'HTTPS' ] ) && $_SERVER[ 'HTTPS' ] === 'on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$configQuery = $conn->query( "SELECT * FROM settings WHERE id='1'" );
$configRow = $configQuery->fetch_assoc();
$siteDomain = $configRow[ 'domain' ];
$timezone = $configRow[ 'company_timezone' ];
date_default_timezone_set( "$timezone" );
$siteUrl = $configRow[ 'protocol' ] . $configRow[ 'domain' ];
$siteName = $configRow[ 'company_name' ];
$siteEmail = $configRow[ 'company_email' ];
$siteDescription = $configRow[ 'company_description' ];
$siteKeywords = $configRow[ 'siteKeywords' ];
$uploadFolder = $configRow[ 'upload_folder' ];
$themeFolder = $configRow[ 'theme_folder' ];
$siteAddress = $configRow[ 'company_address' ];
$sitePhone = $configRow[ 'company_phone' ];
$themeColor = $configRow[ 'theme_color' ];
$secondaryColor = $configRow[ 'secondary_color' ];
$publickey = $configRow[ 'captchaPublicKey' ];
$privatekey = $configRow[ 'captchaPrivateKey' ];
$logo = $configRow[ 'company_logo' ];
$favicon = $configRow[ 'company_favicon' ];
$abrv = $configRow[ 'abrv' ];
$chatCode = $configRow[ 'chat_code' ];
$live_chat = $configRow[ 'live_chat' ];
$email_header = $configRow[ 'email_header' ];
$email_footer = $configRow[ 'email_footer' ];
$wire_fees = $configRow[ 'wire_fees' ];
$mail_date = date( "Y" );
$recaptcha = $configRow[ 'recaptcha' ];
$login_notification = $configRow[ 'login_notification' ];
$transfer_otp = $configRow[ 'otp' ];
$app_id = $configRow[ 'one_signal_api' ];
$spam = '-f' . $siteEmail;
$tx_date = date( "m/d/Y H:i" );
$nSubject = '';
$nBody = '';
$nDate = '';
$msg = '';
$dl = '';
$ben_Name = '';
$ben_Acc_no = '';
$ben_Swift = '';
$ben_rtn = '';
$ben_Email = '';
$ben_Bank = '';
$ben_Address = '';
$GetUserId = '';
$noreply = 'noreply@' . $siteDomain;

$md = rand( 10000, 99999 );
$accGen = rand( 1, 5 );
if ( $accGen == 1 ) {
	$acc_no = '0011';
} else if ( $accGen == 2 ) {
	$acc_no = '0022';
} else if ( $accGen == 3 ) {
	$acc_no = '0033';
} else if ( $accGen == 4 ) {
	$acc_no = '0044';
} else if ( $accGen == 5 ) {
	$acc_no = '0055';
}

include 'language.php';

function limit_text( $text, $limit ) {
	if ( str_word_count( $text, 0 ) > $limit ) {
		$words = str_word_count( $text, 2 );
		$pos = array_keys( $words );
		$text = substr( $text, 0, $pos[ $limit ] ) . '...';
	}
	return $text;
}


//Last Login Information
function get_client_ip() {
	$ipaddress = '';
	if ( getenv( 'HTTP_CLIENT_IP' ) )
		$ipaddress = getenv( 'HTTP_CLIENT_IP' );
	else if ( getenv( 'HTTP_X_FORWARDED_FOR' ) )
		$ipaddress = getenv( 'HTTP_X_FORWARDED_FOR' );
	else if ( getenv( 'HTTP_X_FORWARDED' ) )
		$ipaddress = getenv( 'HTTP_X_FORWARDED' );
	else if ( getenv( 'HTTP_FORWARDED_FOR' ) )
		$ipaddress = getenv( 'HTTP_FORWARDED_FOR' );
	else if ( getenv( 'HTTP_FORWARDED' ) )
		$ipaddress = getenv( 'HTTP_FORWARDED' );
	else if ( getenv( 'REMOTE_ADDR' ) )
		$ipaddress = getenv( 'REMOTE_ADDR' );
	else
		$ipaddress = '127.0.0.1';
	return $ipaddress;
}
$PublicIP = get_client_ip();
$currentTime = date( "h:i A" );
$currentDate = date( "l jS \of F Y" );

$separator = md5( time() );
$eol = "\r\n";
$headers = "From: $siteName <$noreply>" . $eol;
$headers .= "X-Sender: $siteName <$siteEmail>" . $eol;
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1" . $eol;
$headers .= "Return-Path: $siteEmail" . $eol;
$headers .= "Reply-To: $siteEmail" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: text/html; charset=iso-8859-1" . $eol;

function hex2rgba( $color, $opacity = false ) {
	$defaultColor = 'rgb(0,0,0)';
	if ( empty( $color ) ) {
		return $defaultColor;
	}
	if ( $color[ 0 ] == '#' ) {
		$color = substr( $color, 1 );
	}
	if ( strlen( $color ) == 6 ) {
		$hex = array( $color[ 0 ] . $color[ 1 ], $color[ 2 ] . $color[ 3 ], $color[ 4 ] . $color[ 5 ] );
	} elseif ( strlen( $color ) == 3 ) {
		$hex = array( $color[ 0 ] . $color[ 0 ], $color[ 1 ] . $color[ 1 ], $color[ 2 ] . $color[ 2 ] );
	} else {
		return $default;
	}
	$rgb = array_map( 'hexdec', $hex );
	if ( $opacity ) {
		if ( abs( $opacity ) > 1 ) {
			$opacity = 0.5;
		}
		$output = 'rgba(' . implode( ",", $rgb ) . ',' . $opacity . ')';
	} else {
		$output = 'rgb(' . implode( ",", $rgb ) . ')';
	}
	return $output;
}
$rgba = hex2rgba( $themeColor, 0.2 );

if ( $recaptcha == 1 ) {
	$recap_yes = 'selected';
	$recap_no = '';
} else {
	$recap_yes = '';
	$recap_no = 'selected';
}

if ( $login_notification == 1 ) {
	$login_yes = 'selected';
	$login_no = '';
} else {
	$login_yes = '';
	$login_no = 'selected';
}

if ( $transfer_otp == 1 ) {
	$otp_yes = 'selected';
	$otp_no = '';
} else {
	$otp_yes = '';
	$otp_no = 'selected';
}

if ( $live_chat == 1 ) {
	$crisp = $configRow[ 'chat_code' ];
	$chat_yes = 'selected';
	$chat_no = '';
} else if ( empty( $live_chat ) ) {
	$crisp = '';
	$chat_yes = '';
	$chat_no = '';
} else {
	$crisp = '';
	$chat_yes = '';
	$chat_no = 'selected';
}

///////////////////USER CLASS//////////////////////////////
if ( isset( $_SESSION[ 'acc_id' ] ) ) {
  $UserNew = $_SESSION[ 'acc_id' ];

	$UserStmt = $conn->query( "SELECT * FROM accounts WHERE account_id='$UserNew'" );
	if ( $UserStmt->num_rows > 0 ) {
		while ( $get = $UserStmt->fetch_assoc() ) {
			$id = $get[ 'id' ];
			$name = $get[ 'name' ];
			$acc_id = $get[ 'account_id' ];
			$stat = $get[ 'status' ];
			$savings_acc = $get[ 'savings_acc' ];
			$check_acc = $get[ 'check_acc' ];
			$savings_balance = $get[ 'savings_balance' ];
			$check_balance = $get[ 'check_balance' ];
			$email = $get[ 'email' ];
			$currency = $get[ 'currency' ];
			$password = $get[ 'password' ];
			$phone = $get[ 'phone' ];
			$city = $get[ 'city' ];
			$country = $get[ 'country' ];
			$address = $get[ 'address' ];
			$zip = $get[ 'zip' ];
			$dob = $get[ 'dob' ];
			$gender = $get[ 'gender' ];
			$occupation = $get[ 'occupation' ];
			$cot = $get[ 'cot' ];
			$tax = $get[ 'tax' ];
			$imf = $get[ 'imf' ];
			$pin = $get[ 'pin' ];
			$otp = $get[ 'otp' ];
			$image = $get[ 'photo' ];
			$cc_no = $get[ 'creditCard' ];
			$cc_exp = $get[ 'expire' ];
			$created_at = $get[ 'created_at' ];
			$lastDate = $get[ 'lastDate' ];
			$lastTime = $get[ 'lastTime' ];
			$allow_codes = $get[ 'allow_codes' ];
			$allow_upload = $get[ 'allow_upload' ];
		}

		//LOCATION TRACKER
	$conn->query( "UPDATE accounts SET ip='$PublicIP', lastTime='$currentTime', lastDate='$currentDate', lastUrl='$PageURL' WHERE account_id='$UserNew'" );

	if ( $stat == 'Disabled' ) {
		echo "<script type=\"text/javascript\">window.alert('Account Blocked. Kindly contact support');
window.location.href = 'logout.php';</script>";
	} else if ( $stat == 'DailyLimit' ) {
		$status = 'Daily Limit Exceeded';
	} else if ( $stat == 'WeeklyLimit' ) {
		$status = 'Weekly Limit Exceeded';
	} else if ( $stat == 'MonthlyLimit' ) {
		$status = 'Monthly Limit Exceeded';
	} else if ( $stat == 'CotExpire' ) {
		$status = 'COT Expired';
	} else if ( $stat == 'Declined' ) {
		$status = 'Transaction Decline';
	} else if ( $stat == 'Dormant' ) {
		$status = 'Dormant';
	} else if ( $stat == 'Active' ) {
		$status = 'Active';
	}

	//Get Update
	$resultuser = $conn->query( "SELECT * FROM news WHERE id='1'" );
	$rowv = $resultuser->fetch_assoc();
	$st = $rowv[ 'status' ];
	if ( $st == '1' ) {
		$news = '<div class="stat-box">
				<div class="card-header">
					<h4 class="text-primary font-weight-bold">
					' . $rowv[ 'title' ] . '

					</h4>
					</div>
					<div class="title text-black mt-1">
						' . $rowv[ 'body' ] . '
				</div>
	</div>';
	} else {
		$news = '';
	}

	//NOTIFICATION COUNT
	$sqlnote = $conn->query( "SELECT * FROM notifications WHERE user_id='$id' and status='0'" );
	$notecount = $sqlnote->num_rows;
	if ( $notecount > 0 ) {
		$ticketAlert = '<strong class="text-black">You have <span class="text-success">' . $notecount . '</span> unread Notification</strong> <a href="Notification.php" class="alert-link text-success">Click here to view</a>';
	} else {
		$ticketAlert = '<strong>No new Notification</strong>';
	}

	$Month = date( "F Y" );
	//SAVINGS TOTAL MONTHLY CREDIT
	$CreditM = $conn->query( "SELECT SUM(amount) As total FROM transfer WHERE month='$Month' and type='Credit' and receiver_acc='$savings_acc'" );
	$getC = $CreditM->fetch_assoc();
	$MonthlyCredit = $getC[ 'total' ];

	//SAVINGS TOTAL MONTHLY DEBIT
	$DebitM = $conn->query( "SELECT SUM(amount) As total FROM transfer WHERE month='$Month' and type='Debit' and sender_acc='$savings_acc'" );
	$getD = $DebitM->fetch_assoc();
	$MonthlyDebit = $getD[ 'total' ];

	//CHECK TOTAL MONTHLY CREDIT
	$cCreditM = $conn->query( "SELECT SUM(amount) As total FROM transfer WHERE month='$Month' and type='Credit' and receiver_acc='$check_acc'" );
	$cgetC = $cCreditM->fetch_assoc();
	$cMonthlyCredit = $cgetC[ 'total' ];
	//CHECK TOTAL MONTHLY DEBIT
	$cDebitM = $conn->query( "SELECT SUM(amount) As total FROM transfer WHERE month='$Month' and type='Debit' and sender_acc='$check_acc'" );
	$cgetD = $cDebitM->fetch_assoc();
	$cMonthlyDebit = $cgetD[ 'total' ];

	//**************ADD BENEFECIARY***********************//
	if ( isset( $_POST[ 'add_beneficiary' ] ) ) {
		$Name = $_POST[ 'name' ];
		$Acc_no = $_POST[ 'acc_no' ];
		$Swift = $_POST[ 'swift' ];
		$rtn = $_POST[ 'rtn' ];
		$Email = $_POST[ 'email' ];
		$Bank = $_POST[ 'bank' ];
		$Address = $_POST[ 'address' ];

		if ( $_FILES[ "photo" ][ "name" ] == "" ) {

			$Query = $conn->prepare( "INSERT INTO beneficiary (name,address,bank,swift,rtn,acc_no,email,donor,created_at) VALUES (?,?,?,?,?,?,?,?,?)" );
			$Query->bind_param( "sssssssss", $Name, $Address, $Bank, $Swift, $rtn, $Acc_no, $Email, $acc_id, $tx_date );

			if ( $Query->execute() ) {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			}

		} else {
			$aa = ( $abrv . rand( 100, 999 ) . '_' . $_FILES[ 'photo' ][ 'name' ] );
			$fileName = str_replace( ' ', '_', $aa );
			$docType = strtolower( pathinfo( $_FILES[ "photo" ][ "name" ], PATHINFO_EXTENSION ) );
			$doc_extensions = array( "jpeg", "jpg", "gif", "bmp", "png" );

			if ( in_array( $docType, $doc_extensions ) ) {

				move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ], 'upload/' . $fileName );
				$Query = $conn->prepare( "INSERT INTO beneficiary (name,address,bank,swift,rtn,acc_no,image,email,donor,created_at) VALUES (?,?,?,?,?,?,?,?,?,?)" );
				$Query->bind_param( "ssssssssss", $Name, $Address, $Bank, $Swift, $rtn, $Acc_no, $fileName, $Email, $acc_id, $tx_date );

				if ( $Query->execute() ) {
					$msg = $success;
					echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
				} else {
					$msg = $error;
					echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
				}

			}
		}
	}
	//**************ADD BENEFECIARY***********************//

	//****************EDIT BENEFICIARY***********************//
	if ( isset( $_POST[ 'edit_ben' ] ) ) {
		$ben_id = $_POST[ 'edit_ben' ];

		$stmt = $conn->query( "SELECT * FROM beneficiary WHERE id='$ben_id'" );
		if ( $stmt->num_rows > 0 ) {
			while ( $ben_row = $stmt->fetch_assoc() ) {
				$ben_Name = $ben_row[ 'name' ];
				$ben_Acc_no = $ben_row[ 'acc_no' ];
				$ben_Swift = $ben_row[ 'swift' ];
				$ben_rtn = $ben_row[ 'rtn' ];
				$ben_Email = $ben_row[ 'email' ];
				$ben_Bank = $ben_row[ 'bank' ];
				$ben_Address = $ben_row[ 'address' ];
			}
			echo '<script> 
		window.onload = function(){
  document.getElementById("benButton").click();
	}</script>';
		} else {
			$msg = $error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		}
	}

	if ( isset( $_POST[ 'update_beneficiary' ] ) ) {
		$Name = $_POST[ 'name' ];
		$Acc_no = $_POST[ 'acc_no' ];
		$Swift = $_POST[ 'swift' ];
		$rtn = $_POST[ 'rtn' ];
		$Email = $_POST[ 'email' ];
		$Bank = $_POST[ 'bank' ];
		$Address = $_POST[ 'address' ];

		if ( $_FILES[ "photo" ][ "name" ] == "" ) {

			$Query = $conn->prepare( "UPDATE beneficiary SET name=?, address=?, bank=?, swift=?, rtn=?, acc_no=?, email=?, donor=?, created_at=?" );
			$Query->bind_param( "sssssssss", $Name, $Address, $Bank, $Swift, $rtn, $Acc_no, $Email, $acc_id, $tx_date );

			if ( $Query->execute() ) {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			}

		} else {
			$aa = ( $abrv . rand( 100, 999 ) . '_' . $_FILES[ 'photo' ][ 'name' ] );
			$fileName = str_replace( ' ', '_', $aa );
			$docType = strtolower( pathinfo( $_FILES[ "photo" ][ "name" ], PATHINFO_EXTENSION ) );
			$doc_extensions = array( "jpeg", "jpg", "gif", "bmp", "png" );

			if ( in_array( $docType, $doc_extensions ) ) {

				move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ], 'upload/' . $fileName );
				$Query = $conn->prepare( "UPDATE beneficiary SET name=?, address=?, bank=?, swift=?, rtn=?, acc_no=?, email=?, donor=?, created_at=?, image=?" );
				$Query->bind_param( "ssssssssss", $Name, $Address, $Bank, $Swift, $rtn, $Acc_no, $Email, $acc_id, $tx_date, $fileName );

				if ( $Query->execute() ) {
					$msg = $success;
					echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
				} else {
					$msg = $error;
					echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
				}

			}
		}
	}
	//****************EDIT BENEFICIARY***********************//


	//**************UPLOAD BENEFECIARY PHOTO***********************//
	if ( isset( $_POST[ 'upload_ben_photo' ] ) ) {
		$b_id = $_POST[ 'id' ];
		$photoname = ( rand( 100, 1999 ) . $_FILES[ 'photo' ][ 'name' ] );
		$target_dir = "upload/";
		$target_file = $target_dir . basename( $_FILES[ "photo" ][ "name" ] );
		$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
		$extensions_arr = array( "jpg", "jpeg", "png", "gif" );
		if ( in_array( $imageFileType, $extensions_arr ) ) {
			move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ], 'upload/' . $photoname );

			$sqlUpload = $conn->prepare( "UPDATE beneficiary SET image=? WHERE id=?" );
			$sqlUpload->bind_param( "si", $photoname, $b_id );

			if ( $sqlUpload->execute() ) {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			}
		} else {
			$msg = $invalid_file;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		}
	}
	//**************UPLOAD BENEFECIARY PHOTO***********************//

	//**************DELETE BENEFECIARY***********************//
	if ( isset( $_POST[ 'delete_ben' ] ) ) {

		$getId = $conn->real_escape_string( $_POST[ 'id' ] );

		if ( $conn->query( "DELETE FROM beneficiary WHERE id='$getId'" ) === TRUE ) {
			$msg = 'Beneficiary Deleted Successfully';
			$show_ben = 'none';
			echo '<script> 
		window.onload = function(){
  document.getElementById("BenSuccessButton").click();
	}</script>';
		} else {
			$msg = 'Connection Error';
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		}

	} else {
		$show_ben = 'block';
	}
	//**************DELETE BENEFECIARY***********************//


	//*******WIRE TRANSFER*************//
	if ( isset( $_POST[ 'transfer' ] ) ) {
		$Ref = $abrv.rand( 1000, 9999 );
		$acct = $_POST[ "acct" ];
		$amt = $_POST[ "amount" ];
		$amount = str_replace( ',', '', $amt );
		$bank_name = $_POST[ "bank" ];
		$acct_name = $_POST[ "name" ];
		$swift_code = $_POST[ "swift" ];
		$routing = $_POST[ "routing" ];
		$bank_address = $_POST[ "address" ];
		$remarks = $_POST[ "remarks" ];
		$Pin = $_POST[ "pin" ];
		$Account = $_POST[ "account" ];
		$Type = $_POST[ "type" ];
		$txMonth = date( "F Y" );

		if ( $Pin != $pin ) {
			$msg = $pin_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';

		} else if ( $stat == 'DailyLimit' ) {
			$msg = $daily_limit_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';

		} else if ( $stat == 'WeeklyLimit' ) {
			$msg = $weekly_limit_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else if ( $stat == 'MonthlyLimit' ) {
			$msg = $monthly_limit_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else if ( $stat == 'Declined' ) {
			$msg = $tx_declined;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else if ( $stat == 'Dormant' ) {
			$msg = $tx_dormant;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else {
			if ( $Account === 'savings' ) {
				$the_balance = $savings_balance;
				$Bal = $savings_balance - $amount;
				$the_acc = $savings_acc;
			} else if ( $Account === 'checking' ) {
				$the_balance = $check_balance;
				$Bal = $check_balance - $amount;
				$the_acc = $check_acc;
			}
			if ( $amount > $the_balance ) {
				$msg = $balance_error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			} else {
				$Query = $conn->prepare( "INSERT INTO temp_transfer (user_id, month, sender_id, amount, bank_name, sender_acc, ref, receiver_name, receiver_acc, type, swift, routing, remarks, balance, date, bank_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'Debit', ?, ?, ?, ?, ?, ?)" );
				$Query->bind_param( "sssssssssssssss", $id, $txMonth, $acc_id, $amount, $bank_name, $the_acc, $Ref, $acct_name, $acct, $swift_code, $routing, $remarks, $Bal, $tx_date, $bank_address );
				if ( $Query->execute() ) {

					if ( $Type === 'local' ) {
						$find = $conn->query( "SELECT * FROM accounts WHERE savings_acc = '$acct' || check_acc = '$acct'" );
						
						if (($acct === $savings_acc) || ($acct === $check_acc)){
						   $msg = $own_error;
								echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>'; 
						} else {
						  if ( $find->num_rows > 0 ) {
							while ( $receiver_row = $find->fetch_assoc() ) {
								$recv_savings = $receiver_row[ 'savings_balance' ];
								$recv_savings_acc = $receiver_row[ 'savings_acc' ];
								$recv_checking = $receiver_row[ 'check_balance' ];
								$recv_checking_acc = $receiver_row[ 'check_acc' ];
								$recv_name = $receiver_row[ 'name' ];
								$recv_email = $receiver_row[ 'email' ];
								$recv_id = $receiver_row[ 'id' ];
							}

							$temp = $conn->query( "SELECT * FROM temp_transfer WHERE ref='$Ref'" );
							if ( $temp->num_rows > 0 ) {
								while ( $row = $temp->fetch_assoc() ) {
									$tx_amount = $row[ 'amount' ];
									$tx_bank = $row[ 'bank_name' ];
									$tx_bank_add = $row[ 'bank_address' ];
									$tx_sender = $row[ 'sender_acc' ];
									$tx_receiver_acc = $row[ 'receiver_acc' ];
									$tx_type = $row[ 'type' ];
									$tx_swift = $row[ 'swift' ];
									$tx_routing = $row[ 'routing' ];
									$tx_remarks = $row[ 'remarks' ];
									$tx_dates = $row[ 'date' ];
									$tx_month = $row[ 'month' ];
								}
								
								    $tx_receiver = $recv_name;

								if ( $tx_sender == $check_acc ) {
									$TxAcc = 'CHECKING';
									$BalUpdate = $check_balance - $tx_amount;
									$update = "UPDATE accounts SET check_balance='$BalUpdate' WHERE id='$id'";
								} else if ( $tx_sender == $savings_acc ) {
									$TxAcc = 'SAVINGS';
									$BalUpdate = $savings_balance - $tx_amount;
									$update = "UPDATE accounts SET savings_balance='$BalUpdate' WHERE id='$id'";
								}

								if ( $acct === $recv_savings_acc ) {
									$recBalUpdate = $recv_savings + $tx_amount;
									$recAccountType = 'Savings';
									$update_rec = "UPDATE accounts SET savings_balance='$recBalUpdate' WHERE savings_acc = '$acct'";
								} else if ( $acct === $recv_checking_acc ) {
									$recBalUpdate = $recv_checking + $tx_amount;
									$recAccountType = 'Checking';
									$update_rec = "UPDATE accounts SET check_balance='$recBalUpdate' WHERE check_acc = '$acct'";
								}

								$Template = $conn->query( "SELECT * FROM email_template WHERE name='Debit Alert'" );
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
								$variables[ 'transaction_amount' ] = $currency . ' ' . number_format( $tx_amount, 2 );
								$variables[ 'account_type' ] = $TxAcc;
								$variables[ 'account_number' ] = $tx_sender;
								$variables[ 'account_name' ] = $name;
								$variables[ 'the_description' ] = $Ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks;
								$variables[ 'reference_id' ] = $Ref;
								$variables[ 'available_balance' ] = $currency . '' . number_format( $BalUpdate, 2 );

								$subject = $mailSubject;
								foreach ( $variables as $keys => $values ) {
									$subject = str_replace( $keys, $values, $subject );
								}
								$template = $email_header . $mailBody . $email_footer;
								foreach ( $variables as $key => $value ) {
									$template = str_replace( $key, $value, $template );
								}
								$body = ' ' . $template . $eol;
								
								


								$Template_credit = $conn->query( "SELECT * FROM email_template WHERE name='Credit Alert'" );
								$Tp_credit = $Template_credit->fetch_assoc();
								$mailSubject_credit = $Tp_credit[ 'subject' ];
								$mailBody_credit = $Tp_credit[ 'body' ];
								$variables_credit = array();
								$variables_credit[ 'site_url' ] = $siteUrl;
								$variables_credit[ 'site_theme_color' ] = $themeColor;
								$variables_credit[ 'site_upload_folder' ] = $uploadFolder;
								$variables_credit[ 'site_logo' ] = $logo;
								$variables_credit[ 'site_name' ] = $siteName;
								$variables_credit[ 'site_email' ] = $siteEmail;
								$variables_credit[ 'current_year' ] = $mail_date;
								$variables_credit[ 'current_date' ] = date( "jS F\, Y h:i A" );

								$variables_credit[ 'user_full_name' ] = $recv_name;
								$variables_credit[ 'transaction_amount' ] = $currency . ' ' . number_format( $tx_amount, 2 );
								$variables_credit[ 'account_type' ] = $recAccountType;
								$variables_credit[ 'account_number' ] = $acct;
								$variables_credit[ 'account_name' ] = $recv_name;
								$variables_credit[ 'the_sender' ] = $name;
								$variables_credit[ 'the_description' ] = $Ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks;
								$variables_credit[ 'reference_id' ] = $Ref;
								$variables_credit[ 'available_balance' ] = $currency . ' ' . number_format( $recBalUpdate, 2 );

								$subject_credit = $mailSubject_credit;
								foreach ( $variables_credit as $keys_credit => $values_credit ) {
									$subject_credit = str_replace( $keys_credit, $values_credit, $subject_credit );
								}
								$template_credit = $email_header . $mailBody_credit . $email_footer;
								foreach ( $variables_credit as $key_credit => $value_credit ) {
									$template_credit = str_replace( $key_credit, $value_credit, $template_credit );
								}
								$body_credit = ' ' . $template_credit . $eol;



								if ( ( $conn->query( $update ) === TRUE ) && ( $conn->query( $update_rec ) === TRUE ) ) {

									//Updte Transfer
									$conn->query( "UPDATE temp_transfer SET status='Successfull' WHERE ref='$Ref'" );

									//Sender Transaction History
									$conn->query( "INSERT INTO transfer (user_id, amount, bank_name, sender_acc, ref, receiver_name, receiver_acc, type, swift, routing, remarks, balance, date, bank_address, month, sender_id) 
								VALUES ('$id', '$tx_amount', '$tx_bank', '$tx_sender', '$Ref', '$tx_receiver', '$tx_receiver_acc', 'Debit', '$tx_swift', '$tx_routing', '$tx_remarks', '$BalUpdate', '$tx_dates', '$tx_bank_add', '$tx_month', '$acc_id')" );

									//Receiver Transaction History
									$conn->query( "INSERT INTO transfer (user_id, amount, bank_name, sender_acc, ref, receiver_name, receiver_acc, type, swift, routing, remarks, balance, date, bank_address, month, sender_id) 
								VALUES ('$recv_id', '$tx_amount', '$tx_bank', '$tx_sender', '$Ref', '$tx_receiver', '$tx_receiver_acc', 'Credit', '$tx_swift', '$tx_routing', '$tx_remarks', '$recBalUpdate', '$tx_dates', '$tx_bank_add', '$tx_month', '$acc_id')" );

									//Send Mail
									mail( $email, $subject, $body, $headers, $spam );

									//Send Receiver Mail
									mail( $recv_email, $subject_credit, $body_credit, $headers, $spam );
									
									$checkSub = $conn->query("SELECT * FROM subscribers WHERE user_id = '$id'");
                                    if ($checkSub -> num_rows > 0){
                                    $user_ids = array(); 
                                    while ($subRow = $checkSub -> fetch_array()){
                                        $user_ids[] = $subRow['one_signal_id'];
                                    }
                                    
                                    include_once 'notification_class.php';
	                                $response = sendDebitAlert($subject, $app_id, $user_ids, $siteName);
                                    $return["allresponses"] = $response;
                                    $return = json_encode( $return);
                                    //print("\n\nJSON received:\n");
                                    //print($return);
                                    //print("\n");
                                    }
									
									
                                    
                                    $checkSubRec = $conn->query("SELECT * FROM subscribers WHERE user_id = '$recv_id'");
                                    if ($checkSubRec -> num_rows > 0){
                                    $rec_ids = array(); 
                                    while ($subRows = $checkSubRec -> fetch_array()){
                                        $rec_ids[] = $subRows['one_signal_id'];
                                    }
                                    
                                    include_once 'notification_class.php';
	                                $responses = sendCreditAlert($subject_credit, $app_id, $rec_ids, $siteName);
                                    $returns["allresponses"] = $responses;
                                    $returns = json_encode( $returns);
                                    //print("\n\nJSON received:\n");
                                    //print($returns);
                                    //print("\n");
                                    
                                    }

									echo '<script> window.location = "TransactionSuccessfull.php?ref=' . $Ref . '"; </script>';

								} else {
									$msg = $error;
									echo '<script> 
		window.onload = function(){
  document.getElementById("transferButton").click();
	}</script>';
								}
							} else {
								$msg = $error;
								echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
							}

						} else {
							$msg = $local_error;
							echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';  
						}
						
						
						}

					} else {
						$fee = ( ( $wire_fees / 100 ) * $amount ) + $amount;
						if ( $fee > $the_balance ) {
							$msg = $fee_error;
							echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
						} else {
						    
						    if ($transfer_otp == 1){
						        
						        $sent_otp = rand(1000,9999);
						        $conn->query("UPDATE accounts SET otp='$sent_otp' WHERE id='$id'");
						        
						        $Template = $conn->query( "SELECT * FROM email_template WHERE name='OTP'" );
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
								$variables[ 'the_otp' ] = $sent_otp;
							

								$subject = $mailSubject;
								foreach ( $variables as $keys => $values ) {
									$subject = str_replace( $keys, $values, $subject );
								}
								$template = $email_header . $mailBody . $email_footer;
								foreach ( $variables as $key => $value ) {
									$template = str_replace( $key, $value, $template );
								}
								$body = ' ' . $template . $eol;
								
								//Send Mail
								mail( $email, $subject, $body, $headers, $spam );
								
						       echo '<script> window.location = "otp.php?ref=' . $Ref . '"; </script>'; 
						    } else {
						      echo '<script> window.location = "cot.php?ref=' . $Ref . '"; </script>';  
						    }
							
						}

					}

				}
			}
		}
	}
	//*******TRANSFER *************//
	
		//*******OTP*************//
	if ( isset( $_POST[ 'otp_transfer' ] ) ) {
		$otp_code = $_POST[ "otp" ];
		$Ref = $_POST[ "Ref" ];
		if ( $otp_code !== $otp ) {
			$msg = $otp_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("cotButton").click();
	}</script>';
		} else {

			echo '<script> window.location = "cot.php?ref=' . $Ref . '"; </script>';

		}

	}
	//*******OTP*************//

	//*******COT TRANSFER*************//
	if ( isset( $_POST[ 'cot_transfer' ] ) ) {
		$cot_code = $_POST[ "cot" ];
		$Ref = $_POST[ "Ref" ];
		if ( $cot_code !== $cot ) {
			$msg = $cot_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("cotButton").click();
	}</script>';
		} else if ( $stat === 'CotExpire' ) {
			$msg = $cot_expired;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else {

			echo '<script> window.location = "tax.php?ref=' . $Ref . '"; </script>';

		}

	}
	//*******COT*************//

	//*******TAX*************//
	if ( isset( $_POST[ 'tax_transfer' ] ) ) {
		$tax_code = $conn->real_escape_string( $_POST[ "tax" ] );
		$Ref = $conn->real_escape_string( $_POST[ "Ref" ] );
		if ( $tax_code != $tax ) {
			$msg = $tax_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("cotButton").click();
	}</script>';
		} else {
			echo '<script> window.location = "imf.php?ref=' . $Ref . '"; </script>';
		}
	}
	//*******TAX*************//

	//*******IMF*************//
	if ( isset( $_POST[ 'imf_transfer' ] ) ) {
		$imf_code = $conn->real_escape_string( $_POST[ "imf" ] );
		$Ref = $conn->real_escape_string( $_POST[ "Ref" ] );

		if ( $imf_code != $imf ) {
			$msg = $imf_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("cotButton").click();
	}</script>';
		} else {

			$temp = $conn->query( "SELECT * FROM temp_transfer WHERE ref='$Ref'" );
			if ( $temp->num_rows > 0 ) {
				while ( $row = $temp->fetch_assoc() ) {
					$tx_amount = $row[ 'amount' ];
					$tx_bank = $row[ 'bank_name' ];
					$tx_bank_add = $row[ 'bank_address' ];
					$tx_sender = $row[ 'sender_acc' ];
					$tx_receiver = $row[ 'receiver_name' ];
					$tx_receiver_acc = $row[ 'receiver_acc' ];
					$tx_type = $row[ 'type' ];
					$tx_swift = $row[ 'swift' ];
					$tx_routing = $row[ 'routing' ];
					$tx_remarks = $row[ 'remarks' ];
					$tx_dates = $row[ 'date' ];
					$tx_month = $row[ 'month' ];
				}

				if ( $tx_sender == $check_acc ) {
					$TxAcc = 'CHECKING';
					$BalUpdate = $check_balance - ( ( ( $wire_fees / 100 ) * $tx_amount ) + $tx_amount );
					$update = "UPDATE accounts SET check_balance='$BalUpdate' WHERE id='$id'";
				} else if ( $tx_sender == $savings_acc ) {
					$TxAcc = 'SAVINGS';
					$BalUpdate = $savings_balance - ( ( ( $wire_fees / 100 ) * $tx_amount ) + $tx_amount );
					$update = "UPDATE accounts SET savings_balance='$BalUpdate' WHERE id='$id'";
				}


				$conn->query( "UPDATE temp_transfer SET status='Successfull' WHERE ref='$Ref'" );

				$conn->query( "INSERT INTO transfer (amount, bank_name, sender_acc, ref, receiver_name, receiver_acc, type, swift, routing, remarks, balance, date, bank_address, month, sender_id) 
				VALUES ('$tx_amount', '$tx_bank', '$tx_sender', '$Ref', '$tx_receiver', '$tx_receiver_acc', '$tx_type', '$tx_swift', '$tx_routing', '$tx_remarks', '$BalUpdate', '$tx_dates', '$tx_bank_add', '$tx_month', '$acc_id')" );

				$Template = $conn->query( "SELECT * FROM email_template WHERE name='Debit Alert'" );
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
				$variables[ 'transaction_amount' ] = $currency . ' ' . number_format( $tx_amount, 2 );
				$variables[ 'account_type' ] = $TxAcc;
				$variables[ 'account_number' ] = $tx_sender;
				$variables[ 'account_name' ] = $name;
				$variables[ 'the_description' ] = $Ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks;
				$variables[ 'reference_id' ] = $Ref;
				$variables[ 'available_balance' ] = $currency . '' . number_format( $BalUpdate, 2 );

				$subject = $mailSubject;
				foreach ( $variables as $keys => $values ) {
					$subject = str_replace( $keys, $values, $subject );
				}
				$template = $email_header . $mailBody . $email_footer;
				foreach ( $variables as $key => $value ) {
					$template = str_replace( $key, $value, $template );
				}
				$body = ' ' . $template . $eol;

				//Send Mail
				mail( $email, $subject, $body, $headers, $spam );

				if ( $conn->query( $update ) === TRUE ) {
					echo '<script> window.location = "TransactionSuccessfull.php?ref=' . $Ref . '"; </script>';
				} else {
					$msg = $error;
					echo '<script> 
		window.onload = function(){
  document.getElementById("transferButton").click();
	}</script>';
				}

			} else {
				$msg = $invalid_tx;
				echo '<script> 
		window.onload = function(){

  document.getElementById("transferButton").click();
	}</script>';
			}

		}
	}
	//*******IMF*************//


	//*******SUPPORT*************//
	if ( isset( $_POST[ 'send_support' ] ) ) {
		$msubject = $_POST[ 'subject' ];
		$dept = $_POST[ 'dept' ];
		$description = nl2br( $_POST[ 'message' ] );
		$Ref = $abrv . rand( 1000, 9999 );

		$sQuery = $conn->prepare( "INSERT INTO support_tickets (dept,user_id,name,email,subject,description,created_at,ref) VALUES (?,?,?,?,?,?,?,?)" );
		$sQuery->bind_param( "ssssssss", $dept, $id, $name, $email, $msubject, $description, $tx_date, $Ref );
		if ( $sQuery->execute() ) {
			$Template = $conn->query( "SELECT * FROM email_template WHERE name='Support Ticket'" );
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
			$variables[ 'ticket_title' ] = $msubject;
			$variables[ 'ticket_dept' ] = $dept;
			$variables[ 'ticket_description' ] = $description;
			$variables[ 'ticket_reference' ] = $Ref;
			$subject = $mailSubject;
			foreach ( $variables as $keys => $values ) {
				$subject = str_replace( $keys, $values, $subject );
			}
			$template = $email_header . $mailBody . $email_footer;
			foreach ( $variables as $key => $value ) {
				$template = str_replace( $key, $value, $template );
			}


			$body = ' ' . $template . $eol;
			//Send Mail
			mail( $siteEmail, $subject, $body, $headers, $spam );
			$msg = $support_ticket;
			echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
		} else {
			$msg = $error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		}

	}
	//*******SUPPORT*************//


	//*******NOTIFICATION*************//
	if ( isset( $_POST[ 'notification_read' ] ) ) {
		$read = $_POST[ 'read' ];

		$sqlwallet = "SELECT * FROM notifications WHERE id='$read'";
		$resultwallet = $conn->query( $sqlwallet );
		if ( $resultwallet->num_rows > 0 ) {
			while ( $nrow = $resultwallet->fetch_assoc() ) {
				$nSubject = $nrow[ 'subject' ];
				$nDate = $nrow[ 'created_at' ];
				$nBody = $nrow[ 'description' ];
			}
			$conn->query( "UPDATE notifications SET status='1' WHERE id='$read'" );
			echo '<script> 
		window.onload = function(){
  document.getElementById("nButton").click();
	}</script>';
		}

	}

	if ( isset( $_POST[ 'notification_delete' ] ) ) {
		$delete = $_POST[ 'delete' ];
		echo '<script> 
		window.onload = function(){
  document.getElementById("DeleteButton").click();
	}</script>';

	}

	if ( isset( $_POST[ 'notification_deleted' ] ) ) {
		$delete = $_POST[ 'delete' ];

		$selDelete = "DELETE FROM notifications WHERE id='$delete'";
		$conn->query( $selDelete );

		$msg = 'Message Deleted';
		echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';

	}
	//*******NOTIFICATION*************//

	//**************UPLOAD CHECK***********************//
	if ( isset( $_POST[ 'upload_check' ] ) ) {
		$Remarks = $_POST[ 'message' ];
		$front = ( rand( 100, 999 ) . $_FILES[ 'front' ][ 'name' ] );
		$back = ( rand( 100, 999 ) . $_FILES[ 'back' ][ 'name' ] );


		$front_file = basename( $_FILES[ "front" ][ "name" ] );
		$back_file = basename( $_FILES[ "back" ][ "name" ] );
		$frontFileType = strtolower( pathinfo( $front_file, PATHINFO_EXTENSION ) );
		$backFileType = strtolower( pathinfo( $back_file, PATHINFO_EXTENSION ) );

		$extensions_arr = array( "jpg", "jpeg", "png", "gif" );
		if ( ( in_array( $frontFileType, $extensions_arr ) ) && ( in_array( $backFileType, $extensions_arr ) ) ) {

			move_uploaded_file( $_FILES[ 'front' ][ 'tmp_name' ], 'upload/' . $front );
			move_uploaded_file( $_FILES[ 'back' ][ 'tmp_name' ], 'upload/' . $back );


			$sqlUpload = $conn->prepare( "INSERT INTO checks (user_id, front, back, remarks, created_at) VALUES (?, ?, ?, ?, ?)" );
			$sqlUpload->bind_param( "sssss", $id, $front, $back, $Remarks, $tx_date );

			if ( $sqlUpload->execute() ) {

				$Template = $conn->query( "SELECT * FROM email_template WHERE name='Check Deposit'" );
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
				$variables[ 'the_remarks' ] = $Remarks;
				$variables[ 'the_front' ] = $front;
				$variables[ 'the_back' ] = $back;
				$subject = $mailSubject;
				foreach ( $variables as $keys => $values ) {
					$subject = str_replace( $keys, $values, $subject );
				}
				$template = $email_header . $mailBody . $email_footer;
				foreach ( $variables as $key => $value ) {
					$template = str_replace( $key, $value, $template );
				}
				$body = ' ' . $template . $eol;
				//Send Mail
				mail( $siteEmail, $subject, $body, $headers, $spam );

				$msg = $deposit_check;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			}
		} else {
			$msg = $invalid_file;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		}
	}
	//**************UPLOAD CHECK***********************//

	//**************UPLOAD PROFILE PHOTO***********************//
	if ( isset( $_POST[ 'upload_photo' ] ) ) {
		$photoname = ( rand( 100, 1999 ) . $_FILES[ 'photo' ][ 'name' ] );
		$target_file = basename( $_FILES[ "photo" ][ "name" ] );
		$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
		$extensions_arr = array( "jpg", "jpeg", "png", "gif" );
		if ( in_array( $imageFileType, $extensions_arr ) ) {
			move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ], 'upload/' . $photoname );

			$sqlUpload = $conn->prepare( "UPDATE accounts SET photo=? WHERE id=?" );
			$sqlUpload->bind_param( "si", $photoname, $id );

			if ( $sqlUpload->execute() ) {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			}
		} else {
			$msg = $invalid_file;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		}
	}
	//**************UPLOAD PROFILE PHOTO***********************//


	//*******PIN*************//
	if ( isset( $_POST[ 'change_pin' ] ) ) {
		$get_otp = md5($_POST[ 'otp' ]);
		$get_pin = $_POST[ 'pin' ];

		if ( $get_otp != $password ) {

			$msg = $password_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';

		} else {

			$sql = $conn->prepare( "UPDATE accounts SET pin=? WHERE id=?" );
			$sql->bind_param( "si", $get_pin, $id );

			if ( $sql->execute() ) {
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
			}

		}

	}
	//*******PIN*************//

	//*******PASSWORD*************//
	if ( isset( $_POST[ 'change_password' ] ) ) {
		$old_password = $_POST[ 'old_password' ];
		$new_password = $_POST[ 'new_password' ];
		$confirm = $_POST[ 'confirm_password' ];
		$hashpass = md5( $_POST[ 'new_password' ] );


		if ( $_POST[ 'new_password' ] !== $_POST[ 'confirm_password' ] ) {
			$msg = $password_match_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else if ( md5( $_POST[ 'old_password' ] ) !== $password ) {
			$msg = $password_old_error;
			echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';
		} else {
			$sql = $conn->prepare( "UPDATE accounts SET password=?, pass=? WHERE id=?" );
			$sql->bind_param( "ssi", $hashpass, $new_password, $id );
			if ( $sql->execute() ) {
			  
			  $conn->query("DELETE FROM sessions WHERE access = '$acc_id");
			  
				$msg = $success;
				echo '<script> 
		window.onload = function(){
  document.getElementById("SuccessButton").click();
	}</script>';
			} else {
				$msg = $error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';

			}

		}
	}
	//*******PASSWORD*************//
	
	
	//**********************LOGOUT ALL *******************//
	if (isset($_POST['logout_all'])){
	 if ($conn->query( "DELETE FROM sessions WHERE access='$acc_id'" ) === TRUE){
	    echo '<script> window.location = "logout_all.php"; </script>';  
	 } else {
	   $msg = $error;
				echo '<script> 
		window.onload = function(){
  document.getElementById("ErrorButton").click();
	}</script>';  
	 }
	 
	}
	//**********************LOGOUT ALL *******************//
	
	
	} else {
		header( "Location: login.php" );
	exit(); 
	}
	
} 
///////////////////USER CLASS//////////////////////////////

/////////////////ADMIN CLASS/////////////////////////////
if ( isset( $_SESSION[ 'username' ] ) ) {
	$Admin = $_SESSION[ 'username' ];
	$Stmt = $conn->query( "SELECT * FROM admin WHERE username='$Admin'" );
	if ( $Stmt->num_rows < 1 ) {
		header( "Location: login.php" );
	}

	//*******************CREATE ACCOUNT***************************//
	if ( isset( $_POST[ 'create_account' ] ) ) {

		$pAcc_id = $_POST[ 'acc_id' ];
		$pName = $_POST[ 'name' ];
		$pStatus = $_POST[ 'status' ];
		$pEmail = $_POST[ 'email' ];
		$pCheck_acc = $_POST[ 'check_acc' ];
		$pCheck_balance = $_POST[ 'check_balance' ];
		$pSavings_acc = $_POST[ 'savings_acc' ];
		$pSavings_balance = $_POST[ 'savings_balance' ];
		$pPass = $_POST[ 'password' ];
		$pPassword = md5( $pPass );
		$pPhone = $_POST[ 'phone' ];
		$pCurrency = $_POST[ 'currency' ];
		$pCountry = $_POST[ 'country' ];
		$pCity = $_POST[ 'city' ];
		$pAddress = $_POST[ 'address' ];
		$pZip = $_POST[ 'zip' ];
		$pDob = $_POST[ 'dob' ];
		$pGender = $_POST[ 'gender' ];
		$pOccupation = $_POST[ 'occupation' ];
		$pPin = $_POST[ 'pin' ];
		$pCot = $_POST[ 'cot' ];
		$pImf = $_POST[ 'imf' ];
		$pTax = $_POST[ 'tax' ];
		$pCC = $_POST[ 'creditCard' ];
		$pCC_exp = $_POST[ 'cc_exp' ];
		$pCreated_at = $_POST[ 'created_at' ];
		$pAllow_upload = $_POST[ 'allow_upload' ];
		$pAllow_codes = $_POST[ 'allow_codes' ];



		$create = $conn->prepare( "INSERT INTO accounts (account_id, name, status, email, savings_acc, check_acc, savings_balance, check_balance, currency, password, phone, city, country, address, zip, 
		dob, gender, occupation, pin, cot, tax, imf, creditCard, expire,created_at,allow_codes,allow_upload) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)" );
		$create->bind_param( "sssssssssssssssssssssssssss", $pAcc_id, $pName, $pStatus, $pEmail, $pSavings_acc, $pCheck_acc, $pSavings_balance, $pCheck_balance, $pCurrency, $pPassword, 
	 $pPhone, $pCity, $pCountry, $pAddress, $pZip, $pDob, $pGender, $pOccupation, $pPin, $pCot, $pTax, $pImf, $pCC, $pCC_exp, $pCreated_at, $pAllow_codes, $pAllow_upload );


		if ( $create->execute() ) {

			$g = $conn->query( "SELECT * FROM accounts WHERE account_id='$pAcc_id'" );
			$ab = $g->fetch_assoc();
			$nxt_id = $ab[ 'id' ];

			echo "<script type=\"text/javascript\">window.alert('Account Creation Successfull!');
window.location.href = 'view.php?id=$nxt_id';</script>";
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error!');
window.location.href = '$PageURL';</script>";
		}

	}
	//*******************CREATE ACCOUNT***************************//


	//NOTIFICATION COUNT
	$sqlnote = $conn->query( "SELECT * FROM support_tickets WHERE status='0'" );
	$notecount = $sqlnote->num_rows;


	if ( isset( $_POST[ 'delete_user' ] ) ) {
		$getId = $_POST[ 'id' ];
		$conn->query( "DELETE FROM accounts WHERE account_id='$getId'" );
		$conn->query( "DELETE FROM support_tickets WHERE user_id='$getId'" );
		$conn->query( "DELETE FROM notifications WHERE user_id='$getId'" );

		echo "<script type=\"text/javascript\">window.alert('Deleted Successfully!');
window.location.href = '$PageURL';</script>";
	}

	//TOTAL USERS
	$TotalUs = "SELECT COUNT(id) As totalUsers FROM accounts";
	$ttUser = $conn->query( $TotalUs );
	$ttUsers = $ttUser->fetch_assoc();
	$totalUsers = $ttUsers[ 'totalUsers' ];

	//LAST USER
	$lastUser = "SELECT * FROM accounts ORDER BY id DESC LIMIT 1";
	$latestUser = $conn->query( $lastUser );
	$userRow = $latestUser->fetch_assoc();
	$lastUserName = $userRow[ 'name' ];

	//************READ TICKET*********************//
	if ( isset( $_POST[ 'read_ticket' ] ) ) {
		$read = $_POST[ 'read' ];
		$sqlwallet = "SELECT * FROM support_tickets WHERE id='$read'";
		$resultwallet = $conn->query( $sqlwallet );
		if ( $resultwallet->num_rows > 0 ) {
			while ( $row = $resultwallet->fetch_assoc() ) {

				$msg = '<div class="card-body">
                  
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">' . $row[ 'subject' ] . '</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">' . $row[ 'description' ] . '</p>
                            </div>
                            <div class="card-footer">
														<div class="card-footer-content text-muted">
														' . $row[ 'created_at' ] . '
                            </div>
                            </div>
                        </div>
                
            </div>';
			}
			$conn->query( "UPDATE support_tickets SET status='1' WHERE id='$read'" );
		}

	}
	//************READ TICKET*********************//

	//*************DLETE TICKET*************************//
	if ( isset( $_POST[ 'delete_ticket' ] ) ) {
		$delete = $_POST[ 'delete' ];
		$conn->query( "DELETE FROM support_tickets WHERE id='$delete'" );
		echo "<script type=\"text/javascript\">window.alert('Deleted Successfully!');
window.location.href = '$PageURL';</script>";
	}
	//*************DLETE TICKET*************************//

	////settings////////
	if ( isset( $_POST[ 'update_settings' ] ) ) {

		$websiteName = $_POST[ 'siteName' ];
		$websiteTheme = $_POST[ 'theme' ];
		$websiteAddress = $_POST[ 'address' ];
		$websitePhone = $_POST[ 'phone' ];
		$websiteUploadFolder = $_POST[ 'uploadFolder' ];
		$websiteDescription = $_POST[ 'desc' ];
		$websiteEmail = $_POST[ 'email' ];
		$websiteTimezon = $_POST[ 'timezone' ];
		$websitePublicKey = $_POST[ 'public' ];
		$websitePrivateKey = $_POST[ 'private' ];
		$websiteAbrv = $_POST[ 'abrv' ];
		$websiteAsset = $_POST[ 'assetFolder' ];
		$websiteCrisp = $_POST[ 'crisp' ];
		$websiteChat = $_POST[ 'chat_code' ];
		$websiteRecaptcha = $_POST[ 'recaptcha' ];
		$websiteFees = $_POST[ 'wire_fees' ];
		$websiteOtp = $_POST[ 'transfer_otp' ];
		$websiteLogin = $_POST[ 'login_notification' ];


		if ( empty( $websiteTimezon ) ) {
			$websiteTimezone = $timezone;
		} else {
			$websiteTimezone = $websiteTimezon;
		}

		$updateSettings = $conn->prepare( "UPDATE settings SET 
	company_name=?, 
	abrv=?,
	company_description=?, 
	company_email=?,
	chat_code=?, 
	live_chat=?, 
	theme_color=?, 
	company_address=?,company_phone=?, 
	upload_folder=?,  
	captchaPublicKey=?, 
	captchaPrivateKey=?, 
	company_timezone=?,
	recaptcha=?, 
	wire_fees=?, 
	theme_folder=?,
	otp=?,
	login_notification=?
	WHERE id='1'" );


		$updateSettings->bind_param( "ssssssssssssssssss", $websiteName, $websiteAbrv, $websiteDescription,
			$websiteEmail, $websiteCrisp, $websiteChat, $websiteTheme, $websiteAddress, $websitePhone,
			$websiteUploadFolder, $websitePublicKey, $websitePrivateKey, $websiteTimezone, $websiteRecaptcha, $websiteFees, $websiteAsset, $websiteOtp, $websiteLogin );

		if ( $updateSettings->execute() ) {

			echo "<script type=\"text/javascript\">window.alert('Updated Successfully!');
window.location.href = '$PageURL';</script>";

		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
		}

	}
	if ( isset( $_POST[ 'update_logo' ] ) ) {

		$websiteLogo = ( rand( 100, 999 ) . $_FILES[ 'logo' ][ 'name' ] );

		$logo_target_dir = "../upload/";
		$logo_target_file = $logo_target_dir . basename( $_FILES[ "logo" ][ "name" ] );
		$logoImageFileType = strtolower( pathinfo( $logo_target_file, PATHINFO_EXTENSION ) );
		$logo_extensions_arr = array( "jpg", "jpeg", "png", "gif" );

		if ( in_array( $logoImageFileType, $logo_extensions_arr ) ) {

			move_uploaded_file( $_FILES[ 'logo' ][ 'tmp_name' ], '../upload/' . $websiteLogo );

			$updateSet = $conn->prepare( "UPDATE settings SET company_logo=? WHERE id='1'" );
			$updateSet->bind_param( "s", $websiteLogo );


			if ( $updateSet->execute() ) {

				echo "<script type=\"text/javascript\">window.alert('Updated Successfully!');
window.location.href = 'GeneralSettings.php';</script>";

			} else {
				echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
			}
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
		}

	}
	if ( isset( $_POST[ 'update_favicon' ] ) ) {

		$websiteLogo = ( rand( 100, 999 ) . $_FILES[ 'logo' ][ 'name' ] );

		$logo_target_dir = "../upload/";
		$logo_target_file = $logo_target_dir . basename( $_FILES[ "logo" ][ "name" ] );
		$logoImageFileType = strtolower( pathinfo( $logo_target_file, PATHINFO_EXTENSION ) );
		$logo_extensions_arr = array( "jpg", "jpeg", "png", "gif" );

		if ( in_array( $logoImageFileType, $logo_extensions_arr ) ) {

			move_uploaded_file( $_FILES[ 'logo' ][ 'tmp_name' ], '../upload/' . $websiteLogo );

			$updateSet = $conn->prepare( "UPDATE settings SET company_favicon=? WHERE id='1'" );
			$updateSet->bind_param( "s", $websiteLogo );


			if ( $updateSet->execute() ) {

				echo "<script type=\"text/javascript\">window.alert('Updated Successfully!');
window.location.href = '$PageURL';</script>";

			} else {
				echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
			}
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
		}

	}
	////settings///////////

	//****************EMAIL TEMPLATES*********************//
	if ( isset( $_POST[ 'update_header' ] ) ) {
		$EmailHeader = $_POST[ 'email_header' ];
		$Update = $conn->prepare( "UPDATE settings SET email_header = ? WHERE id='1'" );
		$Update->bind_param( "s", $EmailHeader );

		if ( $Update->execute() ) {
			echo "<script type=\"text/javascript\">window.alert('Update Successfull.'); window.location.href = '$PageURL';</script>";
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
		}
	}
	if ( isset( $_POST[ 'update_footer' ] ) ) {
		$EmailFooter = $_POST[ 'email_footer' ];
		$Update = $conn->prepare( "UPDATE settings SET email_footer = ? WHERE id='1'" );
		$Update->bind_param( "s", $EmailFooter );

		if ( $Update->execute() ) {
			echo "<script type=\"text/javascript\">window.alert('Update Successfull.'); window.location.href = '$PageURL';</script>";
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
		}
	}

	if ( isset( $_POST[ 'update_template' ] ) ) {
		$EmailSubject = $conn->real_escape_string( $_POST[ 'email_subject' ] );
		$EmailB = $conn->real_escape_string( $_POST[ 'email_body' ] );
		$EmailBody = nl2br( $EmailB );
		$EmailId = $_POST[ 'id' ];

		$Update = $conn->prepare( "UPDATE email_template SET subject = ?, body = ? WHERE id=?" );
		$Update->bind_param( "sss", $EmailSubject, $EmailBody, $EmailId );
		if ( $Update->execute() ) {
			echo "<script type=\"text/javascript\">window.alert('Update Successfull.'); window.location.href = '$PageURL';</script>";
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
		}
	}
	//****************EMAIL TEMPLATES*********************//

	////send email////////
	if ( isset( $_POST[ 'send_email' ] ) ) {
		$useSubject = $conn->real_escape_string( $_POST[ 'subject' ] );
		$description = $conn->real_escape_string( $_POST[ 'message' ] );
		$bcc = $_POST[ 'all' ];
		$mailBody = $description;

		$headers_newsletter = "From: $siteName <$noreply>" . $eol;
		$headers_newsletter .= "X-Sender: $siteName <$siteEmail>" . $eol;
		$headers_newsletter .= 'X-Mailer: PHP/' . phpversion();
		$headers_newsletter .= "X-Priority: 1" . $eol;
		$headers_newsletter .= "Return-Path: $siteEmail" . $eol;
		$headers_newsletter .= "Reply-To: $siteEmail" . $eol;
		$headers_newsletter .= "Bcc: $bcc" . $eol;
		$headers_newsletter .= "MIME-Version: 1.0" . $eol;
		$headers_newsletter .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
		$headers_newsletter .= "Content-Transfer-Encoding: 7bit" . $eol;
		$headers_newsletter .= "This is a MIME encoded message." . $eol;

		if ( $_FILES[ "file" ][ "name" ] == "" ) {

			$variables = array();
			$variables[ 'site_url' ] = $siteUrl;
			$variables[ 'site_theme_color' ] = $themeColor;
			$variables[ 'site_upload_folder' ] = $uploadFolder;
			$variables[ 'site_logo' ] = $logo;
			$variables[ 'site_name' ] = $siteName;
			$variables[ 'site_email' ] = $siteEmail;
			$variables[ 'current_year' ] = $mail_date;
			$variables[ 'current_date' ] = date( "jS F\, Y h:i A" );

			$template = $email_header . $mailBody . $email_footer;
			foreach ( $variables as $key => $value ) {
				$template = str_replace( $key, $value, $template );
			}


			$body = "--" . $separator . $eol;
			$body .= "Content-Type: text/html; charset=iso-8859-1" . $eol;
			$body .= ' ' . $template . $eol;

			if ( mail( $bcc, $useSubject, $body, $headers_newsletter, $spam ) ) {
				echo "<script type=\"text/javascript\">window.alert('Action Successfull!'); window.location.href = '$PageURL';</script>";
			} else {
				echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
			}

		} else {

			$aa = ( $abrv . rand( 100, 999 ) . '_' . $_FILES[ 'file' ][ 'name' ] );
			$fileName = str_replace( ' ', '_', $aa );
			$docType = strtolower( pathinfo( $_FILES[ "file" ][ "name" ], PATHINFO_EXTENSION ) );
			$doc_extensions = array( "pdf", "doc", "jpeg", "jpg", "gif", "bmp", "png", "docx", "mp4" );

			if ( in_array( $docType, $doc_extensions ) ) {

				move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ], '../upload/' . $fileName );

				$file = '../upload/' . $fileName;
				$content = file_get_contents( $file );
				$content = chunk_split( base64_encode( $content ) );

				$variables = array();
				$variables[ 'site_url' ] = $siteUrl;
				$variables[ 'site_theme_color' ] = $themeColor;
				$variables[ 'site_upload_folder' ] = $uploadFolder;
				$variables[ 'site_logo' ] = $logo;
				$variables[ 'site_name' ] = $siteName;
				$variables[ 'site_email' ] = $siteEmail;
				$variables[ 'current_year' ] = $mail_date;
				$variables[ 'current_date' ] = date( "jS F\, Y h:i A" );

				$template = $email_header . $mailBody . $email_footer;
				foreach ( $variables as $key => $value ) {
					$template = str_replace( $key, $value, $template );
				}


				$body = "--" . $separator . $eol;
				$body .= "Content-Type: text/html; charset=iso-8859-1" . $eol;
				$body .= ' ' . $template . $eol;
				$body .= "--" . $separator . $eol;
				$body .= "Content-Type: application/octet-stream; name=\"" . $fileName . "\"" . $eol;
				$body .= "Content-Transfer-Encoding: base64" . $eol;
				$body .= "Content-Disposition: attachment" . $eol;
				$body .= $content . $eol;
				$body .= "--" . $separator . "--";

				if ( mail( $bcc, $useSubject, $body, $headers_newsletter, $spam ) ) {
					echo "<script type=\"text/javascript\">window.alert('Action Successfull!'); window.location.href = '$PageURL';</script>";
				} else {
					echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
				}

			} else {
				echo "<script type=\"text/javascript\">window.alert('Error Occured. Please try again later'); window.location.href = '$PageURL';</script>";
			}
		}

	}
	////send email////////

	////notice////////
	$NoticeQuery = $conn->query( "SELECT * FROM news WHERE id='1'" );
	$nrow = $NoticeQuery->fetch_assoc();
	$title = $nrow[ 'title' ];
	$body = $nrow[ 'body' ];
	$st = $nrow[ 'status' ];

	if ( $st == 0 ) {
		$theStatus = '<button class="btn btn-danger"> Currently Inactive</button>';
	} else {
		$theStatus = '<button class="btn btn-success"> Currently Active</button>';
	}

	if ( isset( $_POST[ 'post_notice' ] ) ) {
		$subject = $conn->real_escape_string( $_POST[ 'subject' ] );
		$stat = $conn->real_escape_string( $_POST[ 'status' ] );
		$description = $conn->real_escape_string( $_POST[ 'message' ] );

		$noticeQuery = $conn->prepare( "UPDATE news SET title=?, status=?, body=?, updated=? WHERE id='1'" );
		$noticeQuery->bind_param( "ssss", $subject, $stat, $description, $tx_date );

		if ( $noticeQuery->execute() ) {
			echo "<script type=\"text/javascript\">window.alert('Updated Successfully!');
window.location.href = 'Notice.php';</script>";

		}
	}
	////notice////////

	if ( isset( $_POST[ 'update_tx' ] ) ) {
		$tp = $_POST[ 'tp' ];
		$ID = $_POST[ 'id' ];
		$rf = $_POST[ 'rf' ];

		$TheAmount = $conn->real_escape_string( $_POST[ "amount" ] );
		$TheBankName = $conn->real_escape_string( $_POST[ "bank_name" ] );
		$TheBankAddress = $conn->real_escape_string( $_POST[ "bank_address" ] );
		$TheSenderId = $conn->real_escape_string( $_POST[ "sender_id" ] );
		$TheSenderAcc = $conn->real_escape_string( $_POST[ "sender_acc" ] );
		$TheRef = $conn->real_escape_string( $_POST[ "ref" ] );
		$TheReceiverAcc = $conn->real_escape_string( $_POST[ "receiver_acc" ] );
		$TheReceiverName = $conn->real_escape_string( $_POST[ "receiver_name" ] );

		$Typ = $conn->real_escape_string( $_POST[ "type" ] );
		if ( empty( $Typ ) ) {
			$TheType = $tp;
		} else {
			$TheType = $Typ;
		}

		$TheSwift = $conn->real_escape_string( $_POST[ "swift" ] );
		$TheRouting = $conn->real_escape_string( $_POST[ "routing" ] );
		$TheRemarks = $conn->real_escape_string( $_POST[ "remarks" ] );
		$TheDate = $conn->real_escape_string( $_POST[ "date" ] );
		$TheMonth = $conn->real_escape_string( $_POST[ "month" ] );
		$TheBalance = $conn->real_escape_string( $_POST[ "balance" ] );

		if ( $conn->query( "UPDATE transfer SET 
	amount='$TheAmount', 
	bank_name='$TheBankName', 
	bank_address='$TheBankAddress', 
	sender_id='$TheSenderId', 
	sender_acc='$TheSenderAcc', 
	ref='$rf', 
	receiver_name='$TheReceiverName', 
	receiver_acc='$TheReceiverAcc', 
	type='$TheType', 
	swift='$TheSwift', 
	routing='$TheRouting', 
	remarks='$TheRemarks', 
	balance='$TheBalance', 
	date='$TheDate', 
	month='$TheMonth' 
	WHERE ref='$rf'" ) === TRUE ) {
			echo "<script type=\"text/javascript\">window.alert('Updated Successfully!');
window.location.href = 'view.php?id=$ID';</script>";
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Ocured. Try again!');
window.location.href = 'edit_tx.php?id=$ID&ref=$rf';</script>";
		}

	}

}
/////////////////ADMIN CLASS/////////////////////////////