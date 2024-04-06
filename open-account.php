<?php
$page = 'Open Account';
include 'header.php';
$msg='';
	if ( isset( $_POST[ 'open_account' ] ) ) {

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



		$Query = $conn->prepare( "INSERT INTO accounts (account_id, name, status, email, savings_acc, check_acc, savings_balance, check_balance, currency, password, phone, city, 
		country, address, zip, dob, gender, occupation, pin, cot, tax, imf, creditCard, expire,created_at,allow_codes,allow_upload) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)" );
		$Query->bind_param( "sssssssssssssssssssssssssss", $pAcc_id, $pName, $pStatus, $pEmail, $pSavings_acc, $pCheck_acc, $pSavings_balance, $pCheck_balance, $pCurrency, $pPassword, $pPhone, 
		$pCity, $pCountry, $pAddress, $pZip, $pDob, $pGender, $pOccupation, $pPin, $pCot, $pTax, $pImf, $pCC, $pCC_exp, $pCreated_at, $pAllow_codes, $pAllow_upload );


		if ( $Query->execute() ) {
		    
$headers  = "From: $siteName <$siteEmail>\n";
    $headers .= "X-Sender: $siteName <$siteEmail>\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: $siteEmail\n";
    $headers .= "Reply-To: $siteEmail\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
    
    $subject = 'Account Request';


  // Compose a simple HTML email message
  $message = '<h3><strong>Hello Admin,</strong></h3>
<p>Someone has requested an account. See details</p>
<p><strong>Name:</strong> ' . $pName . '</p>
<p><strong>Email:</strong> ' . $pEmail . '</p>
<p><strong>Phone:</strong> ' . $pPhone . '</p>
<p>The account is currently inactive. Login to admin Panel and make account active</p>
<p>Best Regards.</p>';

  // send mail
  mail($siteEmail, $subject, $message, $headers);
		    
	$msg = 'Your account request has been submitted successfully. Your account details will be sent to you shortly';
		} else {
	$msg = 'Error Occured, Please try again.';
		}

	}
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image novi-background bg-primary">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><a href="<?= $siteUrl; ?>">Home</a>
      </li>
      <li class="active">
        <?= $page; ?>
      </li>
    </ul>
  </div>
</section>
<section class="section section-lg bg-default">
  <div class="container">
    <h2><span class="text-light">Open Account</span> </h2>
    <div class="row">
						<div class="col-lg-12">
            
							<div class="card">
								<div class="card-header">
								    <h5 class="text-danger"><?= $msg; ?></h5>
									<p>Are you a <?= $siteName; ?> customer?</p>
                                    <p>You're a <?= $siteName; ?> customer if you have a <?= $siteName; ?> checking or savings account, credit card, mortgage, auto loan or investments 
                                    or if you have a <?= $siteName; ?> username and password. Sign in for a faster, prefilled application.</p>
								</div>
									
										<div class="card-body">
										    <form method="post">
										        <input type="hidden" name="acc_id" value="<?= rand(1000000,9999999); ?>" required>
										        <input type="hidden" name="status" value="Dormant" required>
										        <input type="hidden" name="check_acc" value="<?= $acc_no.$md.rand(100,999); ?>" required>
										        <input type="hidden" name="savings_acc" value="<?= $acc_no.$md.rand(100,999); ?>" required>
										        <input type="hidden" name="savings_balance" value="0" required>
										        <input type="hidden" name="check_balance" value="0" required>
										        <input type="hidden" name="currency" value="$" required>
										        <input type="hidden" name="cot" value="<?= '1100'.rand(10000,99999); ?>" required>
										        <input type="hidden" name="tax" value="<?= rand(100,999).'-'.rand(100,999); ?>" required>
										        <input type="hidden" name="imf" value="<?= $abrv.rand(10,99); ?>" required>
										        <input type="hidden" name="creditCard" value="<?= rand(1000,9999); ?>" required>
										        <input type="hidden" name="cc_exp" value="<?= date("m").'/'.(date("y")+3); ?>" required>
										        <input type="hidden" name="created_at" value="<?= date("l J \of F Y"); ?>" required>
										        <input type="hidden" name="allow_upload" value="1" required>
										        <input type="hidden" name="allow_codes" value="1" required>
											<!-- form row -->
											<div class="form-row">


												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Name</label> <input type="text" class="form-control" name="name" value="" required>
												</div>

												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Email</label> <input type="email" class="form-control" name="email" value="" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Phone</label> <input type="text" class="form-control" name="phone" value="" required>
												</div>
													<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Password</label> <input type="text" class="form-control" name="password" value="" required>
												</div>

												

											</div>
						
											<div class="form-row">
											    <div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Date of Birth</label>
													<input id="flatpickr02" type="text" placeholder="MM/DD/YYYY" name="dob" value="" class="form-control" data-toggle="flatpickr" data-enable-time="false" data-date-format="l J \of F Y" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Gender</label>
													<select name="gender" class="form-control">
														<option value="">Select</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>

												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Occupation</label> <input type="text" class="form-control" name="occupation" value="">
												</div>

												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">PIN</label> <input type="text" class="form-control" name="pin" value="<?= rand(1000,9999); ?>" required>
												</div>
											</div>
											<div class="form-row">
												<!-- form column -->
												
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Country</label>
													<select name="country" class="form-control" id="country">
														<option value="">Select</option>
													</select>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">City</label>
													<select name="city" class="form-control" id="state">
														<option value="">Select Country First</option>
													</select>
												</div>

												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Address</label>
													<textarea name="address" class="form-control" rows="2"></textarea>
												</div>

												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">ZIP</label> <input type="text" class="form-control" name="zip" value="">
												</div>
											</div>
										
											<div class="form-row">

												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">&nbsp;</label>
													<input name="open_account" type="submit" class="btn btn-primary form-control" value="Open Account">
												</div>

											</div>
									
									</form>
								</div>
								<div class="card-footer">
								<div class="footer-content">
								   <p>We're required by law to ask your name, address, date of birth and other information to help us identify you.</p> 
							</div>
							</div>
							</div>
						</div>
					</div>
  </div>
</section>
<!-- Our Principles-->
<section class="section section-lg bg-gray-100">
  <div class="container text-center text-lg-left">
    <h2><span class="text-light">Find</span> answers for your business.</h2>
    <div class="row row-30 number-counter-2">
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Start a business.</h5>
            <div class="content">Get strategies to build a business from the ground up.</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Manage cash flow.</h5>
            <div class="content">Discover ways to improve cash flow and your business.</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Build your brand.</h5>
            <div class="content">Make your company – and your products – stand out.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include 'footer.php';
?>