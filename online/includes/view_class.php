<?php
if ( isset( $_GET[ 'user_id' ] ) ) {
	$userID = $_GET[ 'user_id' ];
	$sub = $_GET[ 'subject' ];
} else if ( isset( $_GET[ 'id' ] ) ) {
	$userID = $_GET[ 'id' ];
} else {
	echo "<script type=\"text/javascript\">window.alert('Invalid Input!');
window.location.href = '$PageURL';</script>";
}

$msgRef = $abrv . rand( 1000, 9999 );

$new_user = $conn->query( "SELECT * FROM accounts WHERE id='$userID'" );
$get = $new_user->fetch_assoc();
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
$lTime = $get[ 'lastTime' ];
$lDate = $get[ 'lastDate' ];
$lastUrl = $get[ 'lastUrl' ];
$ip = $get[ 'ip' ];
$allow_codes = $get[ 'allow_codes' ];
$allow_upload = $get[ 'allow_upload' ];

$checkSub = $conn->query("SELECT * FROM subscribers WHERE user_id = '$userID'");
if ($checkSub -> num_rows > 0){
$ids = array(); 
while ($subRow = $checkSub -> fetch_array()){
    $ids[] = $subRow['one_signal_id'];
}
}



if ( $stat == 'Disabled' ) {
	$status = 'Disabled';
} else if ( $stat == 'DailyLimit' ) {
	$status = 'Daily Transfer Limit';
} else if ( $stat == 'WeeklyLimit' ) {
	$status = 'Weekly Transfer Limit';
} else if ( $stat == 'MonthlyLimit' ) {
	$status = 'Monthly Transfer Limit';
} else if ( $stat == 'CotExpire' ) {
	$status = 'COT Expired';
} else if ( $stat == 'Declined' ) {
	$status = 'Transaction Declined';
} else if ( $stat == 'Dormant' ) {
	$status = 'Dormant';
} else if ( $stat == 'Active' ) {
	$status = 'Active';
}



//Location Tracker
$ipdat = @json_decode( file_get_contents( "http://ip-api.com/json/" . $ip ) );
if ( $ipdat->status === 'success' ) {
	$lastC = $ipdat->country;
	if ( empty( $lastC ) ) {
		$lcountry = 'Unable to Retrieve Data';
	} else {
		$lcountry = $ipdat->country;
	}

	$lastR = $ipdat->regionName;
	if ( empty( $lastC ) ) {
		$lcountry = 'Unable to Retrieve Data';
	} else {
		$lregion = $ipdat->regionName;
	}

	$lastCC = $ipdat->city;
	if ( empty( $lastC ) ) {
		$lcity = 'Unable to Retrieve Data';
	} else {
		$lcity = $ipdat->city;
	}
} else {
	$lcountry = 'Unable to Retrieve Data';
	$lregion = 'Unable to Retrieve Data';
	$lcity = 'Unable to Retrieve Data';
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


if ( isset( $_POST[ 'update' ] ) ) {

	$pAcc_id = $_POST[ 'acc_id' ];
	$pName = $_POST[ 'name' ];
	$pStat = $_POST[ 'status' ];
	$pEmail = $_POST[ 'email' ];
	$pCheck_acc = $_POST[ 'check_acc' ];
	$pCheck_balance = $_POST[ 'check_balance' ];
	$pSavings_acc = $_POST[ 'savings_acc' ];
	$pSavings_balance = $_POST[ 'savings_balance' ];
	$pPass = $_POST[ 'password' ];
	
	$pPhone = $_POST[ 'phone' ];
	$Currency = $_POST[ 'currency' ];
	$pCntry = $_POST[ 'country' ];
	$pCty = $_POST[ 'city' ];
	$pAddress = $_POST[ 'address' ];
	$pZip = $_POST[ 'zip' ];
	$pDob = $_POST[ 'dob' ];
	$pGnd = $_POST[ 'gender' ];
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


	if ( empty( $Currency ) ) {
		$pCurrency = $currency;
	} else {
		$pCurrency = $Currency;
	}
	
	if ( empty( $pPass ) ) {
		$pPassword = $password;
	} else {
		$pPassword = md5( $pPass );
	}

	if ( empty( $pCntry ) ) {
		$pCountry = $country;
	} else {
		$pCountry = $pCntry;
	}

	if ( empty( $pCty ) ) {
		$pCity = $city;
	} else {
		$pCity = $pCty;
	}

	if ( empty( $pGnd ) ) {
		$pGender = $gender;
	} else {
		$pGender = $pGnd;
	}

	if ( empty( $pStat ) ) {
		$pStatus = $stat;
	} else {
		$pStatus = $pStat;
	}

	if ( $pAllow_codes === '2' ) {
		$pAllowCodes = $allow_codes;
	} else {
		$pAllowCodes = $pAllow_codes;
	}

	if ( $pAllow_upload === '2' ) {
		$pAllowUpload = $allow_upload;
	} else {
		$pAllowUpload = $allow_upload;
	}

	$Query = $conn->prepare( "UPDATE accounts SET account_id=?, name=?, status=?, email=?, savings_acc=?, check_acc=?, savings_balance=?, check_balance=?, 
	currency=?, password=?, phone=?, city=?, country=?, address=?, zip=?, dob=?, gender=?, occupation=?, pin=?, cot=?, tax=?, imf=?, creditCard=?, expire=?, created_at=?, allow_codes=?, allow_upload=? WHERE id='$userID'" );

	$Query->bind_param( "sssssssssssssssssssssssssss", $pAcc_id, $pName, $pStatus, $pEmail, $pSavings_acc, $pCheck_acc, $pSavings_balance, $pCheck_balance, $pCurrency, 
	$pPassword, $pPhone, $pCity, $pCountry, $pAddress, $pZip, $pDob, $pGender, $pOccupation, $pPin, $pCot, $pTax, $pImf, $pCC, $pCC_exp, $pCreated_at, $pAllow_codes, $pAllow_upload );

	if ( $Query->execute() ) {
		echo "<script type=\"text/javascript\">window.alert('Update Successfull!');
window.location.href = '$PageURL';</script>";
	} else {
		echo "<script type=\"text/javascript\">window.alert('Error Occrred!');
window.location.href = '$PageURL';</script>";
	}

}

if ( isset( $_POST[ 'credit' ] ) ) {
	$AccType = $_POST[ 'account' ];
	$Amt = $_POST[ 'amount' ];
	$Sender = $_POST[ 'sender' ];
	$txDat = $_POST[ 'date' ];
	$Remarks = $_POST[ 'remarks' ];


	$time = strtotime( $txDat );
	$txMonth = date( "F Y", $time );
	$txDate = date( "m/d/Y H:i", $time );

	if ( $AccType == 'Checking' ) {
		$AccTypeAcc = $check_acc;
		$txBalance = $check_balance + $Amt;
		$stmt = $conn->prepare( "UPDATE accounts SET check_balance=? WHERE id='$userID'" );
		$stmt->bind_param( "s", $txBalance );
	} else {
		$AccTypeAcc = $savings_acc;
		$txBalance = $savings_balance + $Amt;
		$stmt = $conn->prepare( "UPDATE accounts SET savings_balance=? WHERE id='$userID'" );
		$stmt->bind_param( "s", $txBalance );
	}

	$sQuery = $conn->prepare( "INSERT INTO transfer (user_id, amount, bank_name, receiver_name, receiver_acc, date, month, balance, ref, sender_id, type, sender_acc, bank_address, remarks ) VALUES (?,  ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Credit', ?, 'Internet Banking', ?)" );
	$sQuery->bind_param( "ssssssssssss", $id, $Amt, $siteName, $name, $AccTypeAcc, $txDate, $txMonth, $txBalance, $msgRef, $Sender, $AccType, $Remarks );

	if ( $sQuery->execute() ) {

		$stmt->execute();

		$Template = $conn->query( "SELECT * FROM email_template WHERE name='Credit Alert'" );
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
		$variables[ 'transaction_amount' ] = $currency . ' ' . number_format( $Amt, 2 );
		$variables[ 'account_type' ] = $AccType;
		$variables[ 'account_number' ] = $AccTypeAcc;
		$variables[ 'account_name' ] = $name;
		$variables[ 'the_sender' ] = $Sender;
		$variables[ 'the_description' ] = $acc_id . '/' . $AccTypeAcc . '/' . $AccType . '/' . $Remarks;
		$variables[ 'reference_id' ] = $msgRef;
		$variables[ 'available_balance' ] = $currency . ' ' . number_format( $txBalance, 2 );

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
		
	include_once 'notification_class.php';
	$response = sendAlert($siteName, $app_id, $ids, $subject);
    $return["allresponses"] = $response;
    $return = json_encode( $return);
    print("\n\nJSON received:\n");
    print($return);
    print("\n");
		
		
		

		echo "<script type=\"text/javascript\">window.alert('Update Successfull!');
window.location.href = '$PageURL';</script>";

	} else {
		echo "<script type=\"text/javascript\">window.alert('Error Occured!');
window.location.href = '$PageURL';</script>";
	}

}


if ( isset( $_POST[ 'debit' ] ) ) {
	$AccType = $_POST[ 'account' ];
	$Amt = $_POST[ 'amount' ];
	$Sender = $_POST[ 'sender' ];
	$txDat = $_POST[ 'date' ];
	$Remarks = $_POST[ 'remarks' ];
	$BankName = $_POST[ 'bank' ];
	$BankAddress = $_POST[ 'bank_address' ];
	$RecAcc = $_POST[ 'RecAcc' ];

	$time = strtotime( $txDat );
	$txMonth = date( "F Y", $time );
	$txDate = date( "m/d/Y H:i", $time );



	if ( $AccType == 'Checking' ) {
		$AccTypeAcc = $check_acc;
		$txBalance = $check_balance - $Amt;
		$theBal = $check_balance;
		$stmt = $conn->prepare( "UPDATE accounts SET check_balance=? WHERE id='$userID'" );
		$stmt->bind_param( "s", $txBalance );
	} else {
		$AccTypeAcc = $savings_acc;
		$txBalance = $savings_balance - $Amt;
		$theBal = $savings_balance;
		$stmt = $conn->prepare( "UPDATE accounts SET savings_balance=? WHERE id='$userID'" );
		$stmt->bind_param( "s", $txBalance );
	}

	if ( $Amt > $theBal ) {
		echo "<script type=\"text/javascript\">window.alert('Insufficient Balance!');
window.location.href = 'view.php?id=$userID';</script>";
	} else {

		$dQuery = $conn->prepare( "INSERT INTO transfer (user_id, amount, bank_name, receiver_name, receiver_acc, date, month, balance, ref, sender_id, sender_acc, bank_address, remarks, type ) VALUES (?,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Debit')" );
		$dQuery->bind_param( "sssssssssssss", $id, $Amt, $BankName, $Sender, $RecAcc, $txDate, $txMonth, $txBalance, $msgRef, $name, $AccTypeAcc, $BankAddress, $Remarks );

		if ( $dQuery->execute() ) {

			$stmt->execute();

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
			$variables[ 'transaction_amount' ] = $currency . ' ' . number_format( $Amt, 2 ) ;
			$variables[ 'account_type' ] = $AccType;
			$variables[ 'account_number' ] = $AccTypeAcc;
			$variables[ 'account_name' ] = $Sender;
			$variables[ 'the_description' ] = $acc_id . '/' . $AccTypeAcc . '/' . $AccType . '/' . $Remarks;
			$variables[ 'reference_id' ] = $msgRef;
			$variables[ 'available_balance' ] = $currency . ' ' . number_format( $txBalance, 2 );

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
			
				include_once 'notification_class.php';
	$response = sendAlert($siteName, $app_id, $ids, $subject);
    $return["allresponses"] = $response;
    $return = json_encode( $return);
    print("\n\nJSON received:\n");
    print($return);
    print("\n");

			echo "<script type=\"text/javascript\">window.alert('Update Successfull!');
window.location.href = '$PageURL';</script>";

		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured!');
window.location.href = '$PageURL';</script>";
		}

	}

}


if ( isset( $_POST[ 'notify' ] ) ) {
	$useSubject =  $_POST[ 'subject' ];
	$description =  $_POST[ 'message' ];
	$mailBody = $description;

	    $headers_newsletter = "From: $siteName <$noreply>" . $eol;
		$headers_newsletter .= "X-Sender: $siteName <$siteEmail>" . $eol;
		$headers_newsletter .= 'X-Mailer: PHP/' . phpversion();
		$headers_newsletter .= "X-Priority: 1" . $eol;
		$headers_newsletter .= "Return-Path: $siteEmail" . $eol;
		$headers_newsletter .= "Reply-To: $siteEmail" . $eol;
		$headers_newsletter .= "MIME-Version: 1.0" . $eol;
		$headers_newsletter .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
		$headers_newsletter .= "Content-Transfer-Encoding: 7bit" . $eol;
		$headers_newsletter .= "This is a MIME encoded message." . $eol;

	if ( $_FILES[ "attachment" ][ "name" ] == "" ) {

		$Insert = $conn->prepare("INSERT INTO notifications (ref, user_id, subject, description, created_at) VALUES (?, ?, ?, ?, ?)");
		$Insert->bind_param("sssss", $msgRef,$userID,$useSubject,$description,$tx_date);

		if ( $Insert->execute() ) {
		    
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

			mail( $email, $useSubject, $body, $headers_newsletter, $spam );

			echo "<script type=\"text/javascript\">window.alert('Message Sending Successfull!');
window.location.href = '$PageURL';</script>";

		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured!'); window.location.href = '$PageURL';</script>";
		}
	} else {

		$aa = ( rand( 100, 999 ) . '_' . $_FILES[ 'attachment' ][ 'name' ] );
		$fileName = str_replace( ' ', '_', $aa );
		$docType = strtolower( pathinfo( $_FILES[ "attachment" ][ "name" ], PATHINFO_EXTENSION ) );
		$doc_extensions = array( "pdf", "jpeg", "jpg", "gif", "bmp", "png" );

		if ( in_array( $docType, $doc_extensions ) ) {

			$Insert = $conn->prepare("INSERT INTO notifications (file, ref, user_id, subject, description, created_at, notice) VALUES (?, ?, ?, ?, ?, ?)");
		    $Insert->bind_param("ssssss", $fileName,$msgRef,$userID,$useSubject,$description,$tx_date);

			if ( $Insert->execute() ) {

				move_uploaded_file( $_FILES[ 'attachment' ][ 'tmp_name' ], '../upload/' . $fileName );
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

				mail( $email, $useSubject, $body, $headers_newsletter, $spam );

				echo "<script type=\"text/javascript\">window.alert('Message Sending Successfull!');
window.location.href = '$PageURL';</script>";

			} else {
				echo "<script type=\"text/javascript\">window.alert('Error Occured!'); window.location.href = '$PageURL';</script>";
			}
		} else {
			echo "<script type=\"text/javascript\">window.alert('Error Occured!'); window.location.href = '$PageURL';</script>";
		}
	}
	
	include_once 'notification_class.php';
	$response = sendSingle($useSubject, $app_id, $ids, $siteName);
    $return["allresponses"] = $response;
    $return = json_encode( $return);
    print("\n\nJSON received:\n");
    print($return);
    print("\n");
    
}

if (isset($_POST['delete_statement'])){
								        $checked = $_POST['savings'];
								        foreach($checked as $selected){ 
								            if ($conn->query("DELETE FROM transfer WHERE id='$selected'")){
								               echo "<script type=\"text/javascript\">window.alert('Deleted Successfully!');
                                                    window.location.href = '$PageURL';</script>"; 
								            }
								        }
								    }



if ( isset( $_POST[ 'photo' ] ) ) {
	$photoname = ( rand( 100, 1999 ) . $_FILES[ 'file' ][ 'name' ] );
	$target_dir = "../upload/";
	$target_file = $target_dir . basename( $_FILES[ "file" ][ "name" ] );


	// Select file type
	$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

	// Valid file extensions
	$extensions_arr = array( "jpg", "jpeg", "png", "gif" );

	// Check extension
	if ( in_array( $imageFileType, $extensions_arr ) ) {

		// Convert to base64 
		$image_base64 = base64_encode( file_get_contents( $_FILES[ 'file' ][ 'tmp_name' ] ) );
		$iimage = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

		// Upload file
		move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ], '../upload/' . $photoname );

		$sqlupload = "UPDATE accounts SET photo='$photoname' WHERE account_id='$acc_id'";

		if ( $conn->query( $sqlupload ) === TRUE ) {

			echo "<script type=\"text/javascript\">window.alert('Update Successfull!');
window.location.href = 'view.php?id=$userID';</script>";

		} else {
			$msg = '<div class="card card-fluid alert alert-dismissible fade show">
								<div class="card-body">
									<button type="button" class="close" data-dismiss="alert">×</button> 
									 <h4 class="alert-heading">Error!</h4> Error Occured. Please try again
								</div>
								</div>';
		}
	} else {
		$msg = '<div class="card card-fluid alert alert-dismissible fade show">
								<div class="card-body">
									<button type="button" class="close" data-dismiss="alert">×</button> 
									 <h4 class="alert-heading">Error!</h4> Invalid file type.
								</div>
								</div>';
	}

}