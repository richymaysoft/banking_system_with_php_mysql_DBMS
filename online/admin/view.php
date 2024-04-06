<?php
$page = 'View User';
include 'header.php';
$sub = '';
require '../includes/view_class.php';
?>
<main class="app-main">
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-capitalize alert alert-primary" align="center"><i class="fa fa-caret-down text-primary"></i>
							<h5>
								<?= $name; ?>'s Account Management</h5>
						</div>
					</div>
				</div>

				<!-- .container -->

				<div class="page-section">
					<div class="row">
						<div class="col-lg-3">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold"><?= $name; ?></span></span>
									<a href="index.php" class="float-right btn btn-sm btn-outline-primary"><i class="fa fa-home text-primary"></i> Back To Dashboard</a>
								</div>
								<div class="card-header" align="center">
									<span class="user-avatar user-avatar-xxl"><img src="<?= $uploadFolder.'/'.$image; ?>" alt="<?= $name; ?>"></span>
									<hr>
									<form method="post" enctype="multipart/form-data">
										<div class="form-row">
											<div class="col-md-8 mb-3">
												<input type="file" class="form-control" id="name" name="file">
											</div>
											<div class="col-md-4 mb-3">
												<input name="photo" type="submit" class="btn btn-primary form-control" value="Upload">
											</div>
										</div>
										<!-- /.form-actions -->
									</form>
								</div>
								<div class="card-body">
									<header class="page-cover">
										<div class="text-center">
											<div class="my-1">
												<?= $email; ?>
											</div>
											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">Account Status</span> <br>
												<span class="text-black">
													<?= $status; ?>
												</span>
											</div>
											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">Account ID</span> <br>
												<span class="text-black">
													<?= $acc_id; ?>
												</span>
											</div>
											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">PIN</span> <br>
												<span class="text-black">
													<?= $pin; ?>
												</span>
											</div>
											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">COT Code</span> <br>
												<span class="text-black">
													<?= $cot; ?>
												</span>
											</div>

											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">TAX Code</span> <br>
												<span class="text-black">
													<?= $tax; ?>
												</span>
											</div>

											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">IMF Code</span> <br>
												<span class="text-black">
													<?= $imf; ?>
												</span>
											</div>
											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">Checking Balance/Acc Number</span> <br>
												<span class="text-black">
													<?= $currency.number_format($check_balance,2); ?>/
													<span class="text-danger">
														<?= $check_acc; ?>
													</span>
												</span>
											</div>
											<div style="margin-bottom: 5px">
												<span class="font-weight-bold text-primary">Savings Balance/Acc Number</span> <br>
												<span class="text-black">
													<?= $currency.number_format($savings_balance,2); ?>/
													<span class="text-danger">
														<?= $savings_acc; ?>
													</span>
												</span>
											</div>
											<hr>
											<a href="access-account.php?email=<?= $acc_id; ?>&pass=<?= $password; ?>" onClick="return(confirm('You are about to login the user dashboard. Click Ok to continue. Page Opens in New Tab'))" target="_blank" class="btn btn-primary">Access Dashboard</a>
										</div>
									</header>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-6">
											<div class="card">
												<div class="card-header">
													<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Last Login Information</span></span>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-lg-4">
															<p><span class="text-primary">
											Date:</span>
															


																<br>
																<strong>
																	<?= $lDate; ?>
																</strong>
															</p>
														</div>
														<div class="col-lg-4">
															<p><span class="text-primary">
											Time:</span>
															


																<br>
																<strong>
																	<?= $lTime; ?>
																</strong>
															</p>
														</div>
														<div class="col-lg-4">
															<p><span class="text-primary">
											Region:</span>
															


																<br>
																<strong>
																	<?= $lregion; ?>
																</strong>
															</p>
														</div>
														<div class="col-lg-4">
															<p><span class="text-primary">
											City:</span>
															


																<br>
																<strong>
																	<?= $lcity; ?>
																</strong>
															</p>
														</div>
														<div class="col-lg-8">
															<p><span class="text-primary">
											URL:</span>
															


																<br>
																<strong>
																	<?= $lastUrl; ?>
																</strong>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="card">
												<form method="get" action="AutoRecord.php">
													<div class="card-header">
														<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Automatic Transaction History Generator</span></span>


													</div>
													<div class="card-body">

														<input type="hidden" name="name" value="<?= $name; ?>">
														<input type="hidden" name="id" value="<?= $id; ?>">
														<input type="hidden" name="admin" value="<?= $Admin; ?>">
														<div class="form-row">

															<div class="col-md-3 mb-3">
																<select name="acc" class="form-control" required>
																	<option value="">Select Account</option>
																	<option value="<?= $check_acc; ?>">Checking</option>
																	<option value="<?= $savings_acc; ?>">Savings</option>

																</select>
															</div>
															<div class="col-md-3 mb-3">
																<select name="type" class="form-control" required>
																	<option value="">Select Type</option>
																	<option value="Credit">Credit</option>
																	<option value="Debit">Debit</option>

																</select>
															</div>
															<div class="col-md-3 mb-3">
																<input id="flatpickr02" type="text" placeholder="From" name="from" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="d-m-Y H:i" required>
															</div>
															<div class="col-md-3 mb-3">
																<input id="flatpickr02" type="text" placeholder="To" name="to" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="d-m-Y H:i" required>
															</div>

														</div>
														<div class="form-row">
															<div class="col-md-3 mb-3">
																<input type="number" class="form-control" name="num" placeholder="No. of Records" required>
															</div>
															<div class="col-md-3 mb-3">
																<input type="number" class="form-control" name="min" placeholder="Minimum <?= $currency; ?>" required>
															</div>
															<div class="col-md-3 mb-3">
																<input type="number" class="form-control" name="max" placeholder="Maximum <?= $currency; ?>" required>
															</div>
															<div class="col-md-3 mb-3">
																<input name="run" type="submit" class="btn btn-primary form-control" value="Run">
															</div>
														</div>
														<!-- /.form-actions -->
												</form>
												</div>
											</div>
										</div>
									</div>


								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Update Profile</span></span>
										</div>
										<form method="post">
											<div class="card-body">
												<!-- form row -->
												<div class="form-row">
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Account ID</label> <input type="text" class="form-control" name="acc_id" value="<?= $acc_id; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Name</label> <input type="text" class="form-control" name="name" value="<?= $name; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Account Status</label>
														<select name="status" class="form-control">
															<option value="">Select</option>
															<option value="Active">Active</option>
															<option value="Dormant">Dormant</option>
															<option value="DailyLimit">Daily Limit Exceeded</option>
															<option value="WeeklyLimit">Weekly Limit Exceeded</option>
															<option value="MonthlyLimit">Monthly Limit Exceeded</option>
															<option value="CotExpire">COT Expired</option>
															<option value="Declined">Transaction Decline</option>
															<option value="DeclinedLogin">Login Decline</option>
														</select>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Email</label> <input type="email" class="form-control" name="email" value="<?= $email; ?>" required>
													</div>

												</div>
												<div class="form-row">
													<!-- form column -->
													<div class="col-md-3 mb-3">
														<label class="text-danger font-weight-bold">Checking Account Number</label> <input type="number" class="form-control" name="check_acc" value="<?= $check_acc; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-danger font-weight-bold">Checking Account Balance</label> <input type="number" class="form-control" name="check_balance" value="<?= $check_balance; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-success font-weight-bold">Savings Account Number</label> <input type="number" class="form-control" name="savings_acc" value="<?= $savings_acc; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-success font-weight-bold">Savings Account Balance</label> <input type="number" class="form-control" name="savings_balance" value="<?= $savings_balance; ?>" required>
													</div>

												</div>
												<div class="form-row">
													<!-- form column -->
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Account Status</label>
														<select name="currency" class="form-control">
															<option value="">Select</option>
															<option value="$">Dollars</option>
															<option value="€">Euro</option>
															<option value="£">Pounds</option>
														</select>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Password</label> <input type="text" class="form-control" name="password" placeholder="Leave empty for old password">
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Phone</label> <input type="text" class="form-control" name="phone" value="<?= $phone; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Country</label>
														<select name="country" class="form-control" id="country">
															<option value="">Select</option>
														</select>
													</div>

												</div>
												<div class="form-row">
													<!-- form column -->
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">City</label>
														<select name="city" class="form-control" id="state">
															<option value="">Select Country First</option>
														</select>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Address</label>
														<textarea name="address" class="form-control" rows="2" required><?= $address; ?></textarea>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">ZIP</label> <input type="text" class="form-control" name="zip" value="<?= $zip; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Date of Birth</label>
														<input id="flatpickr02" type="text" name="dob" value="<?= $dob; ?>" class="form-control" data-toggle="flatpickr" data-enable-time="false" data-date-format="l J \of F Y" required>
													</div>

												</div>
												<div class="form-row">
													<!-- form column -->
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Gender</label>
														<select name="gender" class="form-control">
															<option value="">Select</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Occupation</label> <input type="text" class="form-control" name="occupation" value="<?= $occupation; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">PIN</label> <input type="text" class="form-control" name="pin" value="<?= $pin; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">COT Code</label> <input type="text" class="form-control" name="cot" value="<?= $cot; ?>" required>
													</div>

												</div>
												<div class="form-row">
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">TAX Code</label> <input type="text" class="form-control" name="tax" value="<?= $tax; ?>" required>
													</div>
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">IMF Code</label> <input type="text" class="form-control" name="imf" value="<?= $imf; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Credit Card Last 4 Digit</label> <input type="text" class="form-control" name="creditCard" value="<?= $cc_no; ?>" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Card Expiry Month/Year</label> <input type="text" maxlength="5" class="form-control" name="cc_exp" value="<?= $cc_exp; ?>" required>
													</div>

												</div>
												<div class="form-row">

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Account Created On</label>
														<input id="flatpickr02" type="text" name="created_at" value="<?= $created_at; ?>" class="form-control" data-toggle="flatpickr" data-enable-time="false" data-date-format="l J \of F Y" required>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Photo Upload</label>
														<select name="allow_upload" class="form-control">
															<option value="2">Select</option>
															<option value="1">Enable</option>
															<option value="0">Disabled</option>
														</select>
														<small>This option is to enable/disable profile photo upload from the user dashboard</small>
													</div>

													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">Show Codes</label>
														<select name="allow_codes" class="form-control">
															<option value="2">Select</option>
															<option value="1">Show</option>
															<option value="0">Hide</option>
														</select>
														<small>This option is to show/hide COT,IMF, & Tax codes from the user dashboard</small>
													</div>
													<div class="col-md-3 mb-3">
														<label class="text-primary font-weight-bold">&nbsp;</label>
														<input name="update" type="submit" class="btn btn-primary form-control" value="Update Account">
													</div>

												</div>
											</div>
										</form>
									</div>


								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Credit Account</span></span>
										</div>
										<div class="card-body">
											<form method="post" onSubmit="return(confirm('Proceed?'))">
												<div class="form-group">
													<label for="input01">Account to Credit</label>
													<select class="form-control" name="account" required>
														<option value="">-Select-</option>
														<option value="Checking">Checking -
															<?= $currency.$check_balance; ?>
														</option>
														<option value="Savings">Savings -
															<?= $currency.$savings_balance; ?>
														</option>
													</select>
												</div>
												<div class="form-group">
													<label>Amount</label>
													<input type="number" name="amount" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Sender</label>
													<input type="text" name="sender" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Date & Time</label>
													<input id="flatpickr02" type="text" name="date" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="d-m-Y H:i" required>

												</div>

												<div class="form-group">
													<label>Remarks</label>
													<textarea class="form-control" rows="4" name="remarks"></textarea>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<button type="reset" class="btn btn-danger">Reset</button>
														<input type="submit" name="credit" value="Credit" class="btn btn-primary">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Debit Account</span></span>
										</div>
										<div class="card-body">
											<form method="post" onSubmit="return(confirm('Proceed?'))">
												<div class="form-group">
													<label for="input01">Account to Debit</label>
													<select class="form-control" name="account" required>
														<option value="">-Select-</option>
														<option value="Checking">Checking -
															<?= $currency.$check_balance; ?>
														</option>
														<option value="Savings">Savings -
															<?= $currency.$savings_balance; ?>
														</option>
													</select>
												</div>


												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label>Amount</label>
															<input type="number" name="amount" class="form-control" required>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Receiver Bank</label>
															<input type="text" name="bank" class="form-control" required>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label>Receiver Name</label>
															<input type="text" name="sender" class="form-control" required>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Receiver Account Number</label>
															<input type="text" name="RecAcc" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Date & Time</label>
													<input id="flatpickr02" type="text" name="date" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="d-m-Y H:i" required>
												</div>
												<div class="form-group">
													<label>Bank Address</label>
													<textarea class="form-control" rows="2" name="bank_address"></textarea>
												</div>
												<div class="form-group">
													<label>Remarks</label>
													<textarea class="form-control" rows="3" name="remarks"></textarea>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<button type="reset" class="btn btn-danger">Reset</button>
														<input type="submit" name="debit" value="Debit" class="btn btn-primary">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<i class="fa fa-caret-down text-primary"></i> Send Notification
								</div>
								<div class="card-body">
									<form method="post" enctype="multipart/form-data">
										<div class="form-group">
											<input type="text" name="subject" class="form-control" placeholder="Subject" value="<?= $sub; ?>" required>
										</div>
										<div class="form-group">
											<textarea name="message" id="summernote" required></textarea>
										</div>
										<div class="form-group">
											<input type="file" name="attachment" class="form-control">
											<small>You can attach screenshot (jpg, jpeg, png, gif, gif)</small>
										</div>

										<div class="form-group row">
											<div class="col-sm-10">
												<button type="reset" class="btn btn-danger">Reset</button>
												<input type="submit" name="notify" value="Send" class="btn btn-success">
											</div>
										</div>
									</form>
								</div>
								<br>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Checking Account Statement</span></span>
									<span class="float-right"><i class="fa fa-info-circle text-primary"></i></span>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-8">
											<span class="float-left text-uppercase font-weight-bold text-primary">
												<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>SAVINGS (
												<?= $check_acc; ?>) <i class="fa fa-caret-right"></i>
											</span>
										</div>
										<div class="col-lg-4">

										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6">
											<h5 class="text-black">
												<?= $currency; ?>
												<?= number_format($check_balance,2); ?>
											</h5>
											<span class="text-muted font-weight-bold">Available Balance</span>
										</div>
										<div class="col-lg-3">
											<span class="text-black font-weight-bold">
												<?= $currency; ?>
												<?= number_format($cMonthlyCredit,2); ?>
											</span><br>
											<small class="text-muted font-weight-bold">Credit this month</small>
										</div>
										<div class="col-lg-3">
											<span class="text-black font-weight-bold">
												<?= $currency; ?>
												<?= number_format($cMonthlyDebit,2); ?>
											</span><br>
											<small class="text-muted font-weight-bold">Debit this month</small>
										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="table-responsive">
										<?php
										$stmt = $conn->query( "SELECT * FROM transfer WHERE sender_acc='$check_acc' || receiver_acc='$check_acc'" );
										if ( $stmt->num_rows > 0 ) {
											?>

										<form method="post" onSubmit="return(confirm('Are you sure that you want to delete This user?. This action is not reversible!'))">
											<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
												<thead>
													<tr>
														<th class="text-primary" style="width: 2%">
															<input type="button" id="checking_toggle" class="btn btn-sm btn-primary" value="select all" onClick="do_checking()">
														</th>
														<th class="text-primary">Date/Time</th>
														<th class="text-primary">Type</th>
														<th class="text-primary">Description</th>
														<th class="text-primary">Amount</th>

														<th class="text-primary">Balance</th>
														<th class="text-primary">Transaction ID</th>
														<th class="text-primary"></th>

													</tr>
												</thead>
												<tbody>
													<?php
													while ( $row = $stmt->fetch_assoc() ) {
														$ref = $row[ 'ref' ];
														$type = $row[ 'type' ];
														$receiver = $row[ 'receiver_acc' ];
														$sender = $row[ 'sender_acc' ];
														$bank_name = $row[ 'bank_name' ];
														$sender_id = $row[ 'sender_id' ];
														$receiver_name = $row[ 'receiver_name' ];
														$remark = limit_text( $row[ 'remarks' ], 4 );
														$remarks = '<span class="text-capitalize">' . $remark . '</span>';



														$getSender = $conn->query( "SELECT * FROM accounts WHERE savings_acc='$sender'" );
														if ( $getSender->num_rows > 0 ) {
															while ( $rows = $getSender->fetch_assoc() ) {
																$SenderName = $rows[ 'name' ];
															}

														} else {
															$SenderName = $sender_id;
														}

														if ( $type == 'Credit' ) {
															$Type = '<span class="badge badge-success">Credit</span>';
															$description = $sender . '/' . $bank_name . '/' . $SenderName . '/' . $remarks . '...';
														} else {
															$description = $receiver . '/' . $bank_name . '/' . $receiver_name . '/' . $remarks . '...';
															$Type = '<span class="badge badge-danger">Debit</span>';
														}

														?>
													<tr>
														<td>
															<div class="custom-control custom-control-inline custom-checkbox">
																<input type="checkbox" name="checking[]" value="<?= $row['id']; ?>" class="custom-control-input checkbox" id="<?= $row['id']; ?>"> <label class="custom-control-label" for="<?= $row['id']; ?>"></label>
															</div>
														</td>
														<td>
															<?= $row[ 'date' ]; ?>
														</td>
														<td>
															<?= $Type; ?>
														</td>
														<td>
															<?= $description; ?>
														</td>
														<td>
															<?= $currency; ?>
															<?= number_format($row[ 'amount' ],2); ?>
														</td>

														<td>
															<?= $currency; ?>
															<?= number_format($row[ 'balance' ],2); ?>
														</td>
														<td>
															<?= $row[ 'ref' ]; ?>
														</td>
														<td>
															<a href="edit_tx.php?ref=<?= $row[ 'ref' ]; ?>&id=<?= $userID; ?>" class="btn btn-info">EDIT</a>
														</td>

													</tr>
													<?php } ?>
												</tbody>
											</table>
											<br>
											<input type="submit" name="delete_statement" value="Delete Selected" class="btn btn-sm btn-danger">
										</form>
										<br>
										<?php } else { ?>
									</div>
									<div class="card">
										<div class="card-body" align="center">
											<i class="fa fa-exclamation-triangle text-primary fa-2x"></i><br>
											<strong>No Records Found!</strong>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>

						</div>






						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Savings Account Statement</span></span>
									<span class="float-right"><i class="fa fa-info-circle text-primary"></i></span>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-8">
											<span class="float-left text-uppercase font-weight-bold text-primary">
												<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>SAVINGS (
												<?= $savings_acc; ?>) <i class="fa fa-caret-right"></i>
											</span>
										</div>
										<div class="col-lg-4">

										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6">
											<h5 class="text-black">
												<?= $currency; ?>
												<?= number_format($savings_balance,2); ?>
											</h5>
											<span class="text-muted font-weight-bold">Available Balance</span>
										</div>
										<div class="col-lg-3">
											<span class="text-black font-weight-bold">
												<?= $currency; ?>
												<?= number_format($MonthlyCredit,2); ?>
											</span><br>
											<small class="text-muted font-weight-bold">Credit this month</small>
										</div>
										<div class="col-lg-3">
											<span class="text-black font-weight-bold">
												<?= $currency; ?>
												<?= number_format($MonthlyDebit,2); ?>
											</span><br>
											<small class="text-muted font-weight-bold">Debit this month</small>
										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="table-responsive">
										<?php
										$stmt = $conn->query( "SELECT * FROM transfer WHERE sender_acc='$savings_acc' || receiver_acc='$savings_acc'" );
										if ( $stmt->num_rows > 0 ) {
											?>
										<form method="post" onSubmit="return(confirm('Are you sure that you want to delete This user?. This action is not reversible!'))">
											<table id="example2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">

												<thead>
													<tr>
														<th class="text-primary" style="width:2%">
															<input type="button" id="savings_toggle" class="btn btn-sm btn-primary" value="select all" onClick="do_savings()">
														</th>
														<th class="text-primary">Date/Time</th>
														<th class="text-primary">Type</th>
														<th class="text-primary">Description</th>
														<th class="text-primary">Amount</th>

														<th class="text-primary">Balance</th>
														<th class="text-primary">Transaction ID</th>
														<th class="text-primary"></th>

													</tr>
												</thead>
												<tbody>
													<?php
													while ( $row = $stmt->fetch_assoc() ) {
														$ref = $row[ 'ref' ];
														$type = $row[ 'type' ];
														$receiver = $row[ 'receiver_acc' ];
														$sender = $row[ 'sender_acc' ];
														$bank_name = $row[ 'bank_name' ];
														$sender_id = $row[ 'sender_id' ];
														$receiver_name = $row[ 'receiver_name' ];
														$remarks = limit_text( $row[ 'remarks' ], 4 );



														$getSender = $conn->query( "SELECT * FROM accounts WHERE savings_acc='$sender'" );
														if ( $getSender->num_rows > 0 ) {
															while ( $rows = $getSender->fetch_assoc() ) {
																$SenderName = $rows[ 'name' ];
															}

														} else {
															$SenderName = $sender_id;
														}

														if ( $type == 'Credit' ) {
															$Type = '<span class="badge badge-success">Credit</span>';
															$description = $sender . '/' . $bank_name . '/' . $SenderName . '/' . $remarks . '...';
														} else {
															$description = $receiver . '/' . $bank_name . '/' . $receiver_name . '/' . $remarks . '...';
															$Type = '<span class="badge badge-danger">Debit</span>';
														}

														?>
													<tr>
														<td>
															<div class="custom-control custom-control-inline custom-checkbox">
																<input type="checkbox" name="savings[]" value="<?= $row['id']; ?>" class="custom-control-input checkbox" id="<?= $row['id']; ?>"> <label class="custom-control-label" for="<?= $row['id']; ?>"></label>
															</div>
														</td>
														<td>
															<?= $row[ 'date' ]; ?>
														</td>
														<td>
															<?= $Type; ?>
														</td>
														<td>
															<?= $description; ?>
														</td>
														<td>
															<?= $currency; ?>
															<?= number_format($row[ 'amount' ],2); ?>
														</td>

														<td>
															<?= $currency; ?>
															<?= number_format($row[ 'balance' ],2); ?>
														</td>
														<td>
															<?= $row['ref']; ?>
														</td>
														<td>
															<a href="edit_tx.php?ref=<?= $row[ 'ref' ]; ?>&id=<?= $userID; ?>" class="btn btn-info">EDIT</a>
														</td>

													</tr>
													<?php } ?>
												</tbody>
											</table>
											<br>
											<input type="submit" name="delete_statement" value="Delete Selected" class="btn btn-sm btn-danger">
										</form>
										<br>
										<?php } else { ?>
									</div>
									<div class="card">
										<div class="card-body" align="center">
											<i class="fa fa-exclamation-triangle text-primary fa-2x"></i><br>
											<strong>No Records Found!</strong>
										</div>
									</div>
									<?php } ?>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.page -->
		</div>

	
	<script type="text/javascript">

    function do_savings(){

        var checkboxes = document.getElementsByName('savings[]');
        var button = document.getElementById('savings_toggle');

        if(button.value == 'select all'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'deselect all'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'select all';
        }
    }
</script>
				<script type="text/javascript">

    function do_checking(){

        var checkboxes = document.getElementsByName('checking[]');
        var button = document.getElementById('checking_toggle');

        if(button.value == 'select all'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'deselect all'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'select all';
        }
    }
</script>

		<?php include( 'footer.php' ); ?>