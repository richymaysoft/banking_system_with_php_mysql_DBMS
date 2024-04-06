<button data-bs-toggle="modal" data-bs-target="#Error" id="ErrorButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#Success" id="SuccessButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#BenSuccess" id="BenSuccessButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#Note" id="nButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#EditBen" id="benButton" style="display: none">click</button>

<!-- Check Deposit -->
<div class="modal fade action-sheet" id="check" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Check Deposit</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="card-body">
							<p>Upload the front and back photo of the Check. Make sure the photo is clear.</p>
							<form method="post" enctype="multipart/form-data">
								<div class="form-group basic">
									<label class="label">Front</label>
									<div class="input-group mb-2">
										<input type="file" class="form-control" name="front" accept="image/*" capture required>
									</div>
								</div>
								<div class="form-group basic">
									<label class="label">Back</label>
									<div class="input-group mb-2">
										<input type="file" class="form-control" name="back" accept="image/*" capture required>
									</div>
								</div>
								<div class="form-group basic">
									<label class="label">Remarks (Optional)</label>
									<div class="input-group mb-2">
										<textarea name="message" class="form-control" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group basic">
									<button type="reset" class="btn btn-danger">Reset</button>

									<input type="submit" name="upload_check" value="Upload" class="btn btn-success">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Check Deposit  -->
<!-- Cards -->
<div class="modal fade action-sheet" id="cards" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>&nbsp;Cards</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<?php include 'includes/card.php'; ?>
						<div class="wrapper">
							<div class="credit-card-wrap">
								<div class="credit-card-inner">
									<img src="upload/<?= $favicon; ?>" class="pull-right sitelogo">
									<div class="mk-icon-sim"></div>
									<div class="credit-font credit-card-number" data-text="">4716 XXXX XXXX
										<?= $cc_no; ?>
									</div>
									<br>
									<footer class="footer">
										<div class="clearfix">
											<div class="pull-left">
												<div class="credit-card-date"><span class="title">VALID THRU</span>
													<span class="credit-font">
														<?= $cc_exp; ?>
													</span>
												</div>
												<div class="credit-font credit-author">
													<?= $name; ?>
												</div>
											</div>
											<div class="pull-right">
												<div class="mk-icon-visa"></div>
											</div>
										</div>
									</footer>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Cards  -->
<!-- Notification Read -->
<div class="modal fade action-sheet" id="Note" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?=$nSubject;?>
				</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="card-body">
							<?=$nBody;?>
						</div>
						<div class="card-footer">
							<div class="card-footer-content">
								<?= date( "jS F\, Y h:i A", strtotime( $nDate ) ); ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Notification Read  -->
<!-- Tips -->
<div class="modal fade action-sheet" id="tips" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>&nbsp;Tips</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="transactions">
							<!-- item -->
							<a href="#support" onClick="mySupport()" class="item">
								<div class="detail"> <span class="fas fa-piggy-bank image-block imaged w48"></span>
									<div> <strong>Auto Save</strong>
										<p>Set a goal, save automatically with
											<?= $siteName; ?>'s Auto Save and track your progress.</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="#support" onClick="mySupport()" class="item">
								<div class="detail"> <span class="fas fa-wallet image-block imaged w48"></span>
									<div> <strong>Budget</strong>
										<p>Check in with your budget and stay on top of your spending</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="#support" onClick="mySupport()" class="item">
								<div class="detail"> <span class="fas fa-home image-block imaged w48"></span>
									<div> <strong>Home Option</strong>
										<p>Your home purchase, refinance and insights right under one roof.</p>
									</div>
								</div>
							</a>
							<!-- * item -->
							<!-- item -->
							<a href="#support" onClick="mySupport()" class="item">
								<div class="detail"> <span class="fa fa-info-circle text-danger image-block imaged w48"></span>
									<div> <strong>Security Tip</strong>
										<p class="text-black">We will NEVER ask you to provide your security details such as COT Code or any sensitive details of your account. </p>
									</div>
								</div>
							</a>
							<!-- * item -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Tips  -->
<!-- Investment-->
<div class="modal fade action-sheet" id="investment" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>&nbsp;Investment</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<h2>Welcome to a more personal way to think about your wealth</h2> Contact Support to get started.
									<hr>
									<div class="row">
										<div class="col-md-6">
											<div align="center"><i class="fa fa-chart-line fa-5x text-warning"></i>
											</div>
											<div class="h5 text-center">Expert Guidance</div>
											<p class="text-center">Tap into
												<?= $siteName; ?>Research Footnote for help adapting your investment strategy to changes in the markets and in your life.</p>

										</div>
										<div class="col-md-6">
											<div align="center"><i class="fas fa-handshake fa-5x text-warning"></i>
											</div>
											<div class="h5 text-center">Personal Connection</div>
											<p class="text-center">Work with a
												<?= $siteName; ?>Advisor to develop a personalized strategy to help you meet your most important goals. </p>

										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<img src="assets/images/fam.png" width="100%"/>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-8">
									<h2>Stay informed with research that sets the standard</h2>
									<p>
										<?= $siteName; ?>analysts deliver comprehensive market research that leads the industry. Browse the latest insights, like market performance over time Footnote, to help you make informed investment decisions.</p>

									<h2>Market Performance Over Time</h2>
									<p>In 22 of the last 40 years, the market dipped by double digits—but still ended the year with positive returns 75% of the time</p>
								</div>
								<div class="col-lg-4">
									<img src="assets/images/chart.png" height="250px"/>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="card-footer-content">
								<h2 class="text-center text-primary">Whether you’re new to investing or have years of experience, we have a strategy for you</h2>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Investment  -->
<!-- Support -->
<div class="modal fade action-sheet" id="support" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>&nbsp;Customer Support</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="card-body">
							<form method="post" style="width: 100%">
								<div class="form-group basic">
									<div class="input-wrapper">
										<label class="label">Department</label>
										<select name="dept" class="form-control" required>
											<option value=""></option>
											<option value="Change Password">Change Password</option>
											<option value="Complaints">Complaints</option>
											<option value="Get card">Get Card</option>
											<option value="Update Profile">Update Profile</option>
											<option value="Card Protect">Card Protect</option>
											<option value="Card Replacement">Card Replacement</option>
											<option value="Dispense Error">Dispense Error</option>
											<option value="PIN Retrieval">PIN Retrieval</option>
											<option value="Loans">Loans</option>
											<option value="Investment">Investments</option>
											<option value="Account Information">Account Information</option>
											<option value="Transfer">Money Transfer</option>
											<option value="Auto Save">Auto Save</option>
											<option value="Budget">Budget</option>
											<option value="Credit Journey">Credit Journey</option>
											<option value="Home Options">Home Options</option>
										</select>
									</div>
								</div>
								<div class="form-group basic">
									<label class="label">Subject</label>
									<div class="input-group mb-2">
										<input type="text" name="subject" class="form-control" required>
									</div>
								</div>
								<div class="form-group basic">
									<label class="label">Message</label>
									<div class="input-group mb-2">
										<textarea name="message" class="form-control" rows="7" required></textarea>
									</div>
								</div>
								<div class="form-group basic">
									<button type="reset" class="btn btn-danger">Reset</button>
									<input type="submit" name="send_support" value="Send" class="btn btn-success">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Support  -->
<!-- Loan -->
<div class="modal fade action-sheet" id="loan" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">
					<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>&nbsp;Loans</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<div class="card">
						<div class="card-header">
							<p><span class="text-primary">Your home journey starts here.</span> Let
								<?= $siteName; ?>be your partner</p>
							<p></p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-4">
									<img src="assets/images/happyhome.png" width="100%"/>
								</div>
								<div class="col-lg-8">
									<h2 class="text-primary">Buying a home</h2>
									<p>Buying a home can be a truly rewarding experience. It's also one of the biggest investments you'll make.
									</p>
									<p>
										From finding your new place to getting the keys – we're here to help.</p>

									<h2 class="text-primary">Get more from your home</h2>
									<p>Use the equity you’ve built to pay for improvements, consolidate debt, pay for college and more</p>
									Click on <strong>Support</strong> to learn more
								</div>
							</div>
						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-lg-8">
									<h2 class="text-primary">Refinancing your mortgage</h2>
									<p>Refinancing can help you lower your monthly payment, pay off your loan sooner, or tap into the equity you've already built into your home.
									</p>
									<p>
										Weigh the pros and cons to see if refinancing is right for you.</p>
									Click on <strong>Support</strong> to learn more
								</div>
								<div class="col-lg-4">
									<img src="assets/images/mortgage.png" width="100%"/>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Loan  -->
<!-- General Error -->
<div class="modal fade dialogbox" id="Error" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-icon text-danger">
				<i class="fas fa-times-circle"></i>
			</div>
			<div class="modal-header">
				<h5 class="modal-title">Error</h5>
			</div>
			<div class="modal-body">
				<?=$msg;?>
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * General Error -->
<!-- Success -->
<div class="modal fade dialogbox" id="Success" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-icon text-success">
				<i class="fas fa-check-circle"></i>
			</div>
			<div class="modal-header">
				<h5 class="modal-title">Success</h5>
			</div>
			<div class="modal-body">
				<?=$msg;?>
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Success -->
<!-- Profile Icon -->
<div class="modal fade action-sheet" id="ProfileModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					<?=$name;?>
				</h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content text-center">
					<?=$ticketAlert;?>
					<hr>
					<a href="Profile.php" class="btn btn-primary btn-block btn-lg">My profile</a>
					<div class="row mt-2">
						<div class="col-6">
							<button type="button" class="btn btn-info btn-block btn-lg" data-bs-dismiss="modal"><i class="fas fa-times"></i> &nbsp;Close</button>
						</div>
						<div class="col-6">
							<a href="logout.php" class="btn btn-danger btn-block btn-lg"><i class="fas fa-sign-out-alt"></i> &nbsp;Sign Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Profile Icon -->
<!-- Wire Transfer -->
<div class="modal fade action-sheet" id="wireTransfer" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Wire Transfer<br><small>Transaction Fee: <?=$wire_fees;?>%</small></h5>

			</div>
			<div class="modal-body">

				<div class="action-sheet-content">
					<form method="POST">
						<input type="hidden" name="type" value="wire">
						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="label" for="account1">From</label>
								<select class="form-control custom-select" name="account" required>
									<option value=""></option>
									<option value="savings">Savings (***
										<?= substr($savings_acc,-4); ?>) -
										<?= $currency.number_format($savings_balance,2); ?>
									</option>
									<option value="checking">Checking (***
										<?= substr($check_acc,-4); ?>) -
										<?= $currency.number_format($check_balance,2); ?>
									</option>
								</select>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Enter Amount</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary">
									<?= $currency; ?>
								</span>
								<input type="number" name="amount" class="form-control" required>
							</div>

						</div>
						<div class="form-group basic">
							<label class="label">Beneficiary Name</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
								<input type="text" name="name" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">IBAN/Account Number</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-file-invoice"></i></span>
								<input type="text" name="acct" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Bank</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-university"></i></span>
								<input type="text" name="bank" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Swift Code</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-random"></i></span>
								<input type="text" name="swift" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Routing Transit Number</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-sync-alt"></i></span>
								<input type="text" name="routing" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Bank Address (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-map-marker-alt"></i></span>
								<textarea class="form-control" rows="3" name="address"></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Remarks</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-edit"></i></span>
								<textarea class="form-control" rows="3" name="remarks"></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">PIN</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-user-shield"></i></span>
								<input type="text" name="pin" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<input type="submit" name="transfer" value="Proceed" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Wire Transfer  -->
<!-- Local Transfer -->
<div class="modal fade action-sheet" id="localTransfer" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> to <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Transfer<br><small>No Transaction Fees</small></h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<form method="POST">
						<input type="hidden" name="swift" value="N/A-Local Transer">
						<input type="hidden" name="routing" value="N/A-Local Transer">
						<input type="hidden" name="type" value="local">
						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="label" for="account1">From</label>
								<select class="form-control custom-select" name="account" required>
									<option value=""></option>
									<option value="savings">Savings (***
										<?= substr($savings_acc,-4); ?>) -
										<?= $currency.number_format($savings_balance,2); ?>
									</option>
									<option value="checking">Checking (***
										<?= substr($check_acc,-4); ?>) -
										<?= $currency.number_format($check_balance,2); ?>
									</option>
								</select>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Enter Amount</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary">
									<?= $currency; ?>
								</span>
								<input type="number" name="amount" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Beneficiary Name (Optional)</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
								<input type="text" name="name" class="form-control">
							
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">IBAN/Account Number</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-file-invoice"></i></span>
								<input type="text" name="acct" class="form-control" required>
							</div>
						</div>
						<input type="hidden" name="bank"  value="<?= $siteName; ?>">
						<input type="hidden" name="address"  value="<?= $siteAddress; ?>">

						<div class="form-group basic">
							<label class="label">Remarks</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-edit"></i></span>
								<textarea class="form-control" rows="4" name="remarks"></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">PIN</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-user-shield"></i></span>
								<input type="text" name="pin" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<input type="submit" name="transfer" value="Proceed" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Local Transfer -->
<!-- Checking Statement -->
<div class="modal fade action-sheet" id="checkingStatement" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Chekings Account Statment <br><span class="text-center text-primary"><?= '#'.$check_acc; ?></span></h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<?php
					$stmt = $conn->query( "SELECT * FROM transfer WHERE user_id='$id' && sender_acc='$check_acc' || receiver_acc='$check_acc'" );
					if ( $stmt->num_rows > 0 ) {
						?>
					<table id="example" class="table dt-responsive nowrap" style="width:100%">
						<thead>
							<small class="text-center mobile">Click the <span class="text-white" style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details</small>
							<hr>
							<tr>
								<th class="text-primary">Date</th>
								<th class="text-primary">Type</th>
								<th class="text-primary">Amount</th>
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
									$Type = '<span class="text-success">Credit</span>';
									$description = $sender . '/' . $bank_name . '/' . $SenderName . '/' . $remarks . '...';
								} else {
									$description = $receiver . '/' . $bank_name . '/' . $receiver_name . '/' . $remarks . '...';
									$Type = '<span class="text-danger">Debit</span>';
								}

								?>
							<tr>
								<td>
									<span style="display:none">
										<?= $row['date']; ?>
									</span>
									<?= date( "jS F\, Y h:i A", strtotime( $row['date'] ) ); ?>
								</td>
								<td>
									<?= $Type; ?>
								</td>
								<td>
									<?= $currency; ?>
									<?= number_format($row[ 'amount' ],2); ?>
								</td>
								<td>
									<a href="TransactionReceipt.php?ref=<?= $row[ 'ref' ]; ?>" class="btn btn-sm btn-primary">RECEIPT</a>

								</td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } else { ?>
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
<!-- * Checking Statement -->
<!-- Savings Statement -->
<div class="modal fade action-sheet" id="savingsStatement" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Savings Account Statment <br><span class="text-center text-primary"><?= '#'.$savings_acc; ?></span></h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<?php
					$stmt = $conn->query( "SELECT * FROM transfer WHERE user_id='$id' && sender_acc='$savings_acc' || receiver_acc='$savings_acc'" );
					if ( $stmt->num_rows > 0 ) {
						?>
					<table id="example1" class="table dt-responsive nowrap" style="width:100%">
						<thead>
							<small class="text-center mobile">Click the <span class="text-white" style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details</small>
							<hr>
							<tr>
								<th class="text-primary">Date</th>
								<th class="text-primary">Type</th>
								<th class="text-primary">Amount</th>
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
									$Type = '<span class="text-success">Credit</span>';
									$description = $sender . '/' . $bank_name . '/' . $SenderName . '/' . $remarks . '...';
								} else {
									$description = $receiver . '/' . $bank_name . '/' . $receiver_name . '/' . $remarks . '...';
									$Type = '<span class="text-danger">Debit</span>';
								}

								?>
							<tr>
								<td>
									<span style="display:none">
										<?= $row['date']; ?>
									</span>
									<?= date( "jS F\, Y h:i A", strtotime( $row['date'] ) ); ?>
								</td>
								<td>
									<?= $Type; ?>
								</td>
								<td>
									<?= $currency; ?>
									<?= number_format($row[ 'amount' ],2); ?>
								</td>
								<td>
									<a href="TransactionReceipt.php?ref=<?= $row[ 'ref' ]; ?>" class="btn btn-sm btn-primary">RECEIPT</a>

								</td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } else { ?>
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
<!-- * Savings Statement -->
<!-- Add Beneficiary -->
<div class="modal fade action-sheet" id="addBeneficiary" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Add Beneficiary</h5>
			</div>
			<div class="modal-body">

				<div class="action-sheet-content">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group basic">
							<label class="label">Beneficiary Name</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
								<input type="text" name="name" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Email</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-envelope"></i></span>
								<input type="text" name="email" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">IBAN/Account Number</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-file-invoice"></i></span>
								<input type="text" name="acc_no" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Bank</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-university"></i></span>
								<input type="text" name="bank" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Swift Code</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-random"></i></span>
								<input type="text" name="swift" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Routing Transit Number</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-sync-alt"></i></span>
								<input type="text" name="rtn" class="form-control" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Address (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-map-marker-alt"></i></span>
								<textarea class="form-control" rows="3" name="address"></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Photo (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-image"></i></span>
								<input type="file" name="photo" class="form-control">
							</div>
						</div>
						<div class="form-group basic">
							<input type="submit" name="add_beneficiary" value="Add" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Add Beneficiary  -->
<!-- Edit Beneficiary -->
<div class="modal fade action-sheet" id="EditBen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Update Beneficiary</h5>
			</div>
			<div class="modal-body">

				<div class="action-sheet-content">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group basic">
							<label class="label">Beneficiary Name</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-user"></i></span>
								<input type="text" name="name" class="form-control" value="<?= $ben_Name; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Email</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-envelope"></i></span>
								<input type="text" name="email" class="form-control" value="<?= $ben_Email; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">IBAN/Account Number</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-file-invoice"></i></span>
								<input type="text" name="acc_no" class="form-control" value="<?= $ben_Acc_no; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Bank</label>
							<div class="input-group mb-2">
								<span class="input-group-text text-primary"><i class="fas fa-university"></i></span>
								<input type="text" name="bank" class="form-control" value="<?= $ben_Bank; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Swift Code</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-random"></i></span>
								<input type="text" name="swift" class="form-control" value="<?= $ben_Swift; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Routing Transit Number</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-sync-alt"></i></span>
								<input type="text" name="rtn" class="form-control" value="<?= $ben_rtn; ?>" required>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Address (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-map-marker-alt"></i></span>
								<textarea class="form-control" rows="3" name="address"><?= $ben_Address; ?></textarea>
							</div>
						</div>
						<div class="form-group basic">
							<label class="label">Photo (Optional)</label>
							<div class="input-group mb-2"> <span class="input-group-text text-primary"><i class="fas fa-image"></i></span>
								<input type="file" name="photo" class="form-control">
							</div>
						</div>
						<div class="form-group basic">
							<input type="submit" name="update_beneficiary" value="Update" class="btn btn-primary btn-block btn-lg">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Edit Beneficiary  -->
<!-- Logout -->
<div class="modal fade dialogbox" id="logout" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="pt-3 text-center">
				<img src="<?= $uploadFolder.'/'.$image; ?>" alt="image" class="imaged" style="width:50px;height:50px;border-radius:50%">
			</div>
			<div class="modal-header pt-2">
				<h5 class="modal-title">You are about to logout</h5>
			</div>
			<div class="modal-body">
				Are you sure about this?
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
					<a href="logout.php" class="btn btn-text-primary">LOGOUT</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Logout-->

<!-- App Bottom Menu -->
<div class="appBottomMenu">
	<a href="Profile.php" class="item active">
		<div class="col">
			<i class="fas fa-cog fa-2x"></i>
			<strong>Settings</strong> </div>
	</a>
	<a href="Notification.php" class="item active">
		<div class="col">
			<i class="far fa-envelope fa-2x"></i>
			<strong>Notifications</strong> </div>
	</a>
	<a href="index.php" class="item active">
		<div class="col">
			<i class="fas fa-house-user fa-2x"></i>
			<strong>Home</strong> </div>
	</a>
	<a href="#" data-bs-toggle="modal" data-bs-target="#support" class="item active">
		<div class="col">
			<i class="far fa-comment-dots fa-2x"></i>
			<strong>Support</strong> </div>
	</a>
	<a href="#" data-bs-toggle="modal" data-bs-target="#logout" class="item active">
		<div class="col">
			<i class="fas fa-sign-out-alt fa-2x"></i>
			<strong>Logout</strong> </div>
	</a>
</div>
<!-- * App Bottom Menu --> 
<!-- iOS Add to Home Action Sheet -->
<div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Install <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?></h5>
				<a href="#" class="close-button" data-bs-dismiss="modal">
					<ion-icon name="close"></ion-icon>
				</a>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content text-center">
					<div class="mb-1"><img src="<?= $uploadFolder.'/'.$favicon; ?>" alt="image" class="imaged w64 mb-2">
					</div>
					<div>
						Install
						<strong>
							<?=$siteName;?>
						</strong> on your iPhone.
					</div>
					<div>
						Tap the Browser Menu (<i class="fa-solid fa-arrow-up-from-square"></i>) and click <strong>Add to homescreen</strong>.
					</div>
					<div class="mt-2">
						<button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- * iOS Add to Home Action Sheet -->
<!-- Android Add to Home Action Sheet -->
<div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Install <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?></h5>
				<a href="#" class="close-button" data-bs-dismiss="modal">
					<ion-icon name="close"></ion-icon>
				</a>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content text-center">
					<div class="mb-1">
						<img src="<?= $uploadFolder.'/'.$favicon; ?>" alt="image" class="imaged w64 mb-2">
					</div>
					<div>
						Install
						<strong>
							<?=$siteName;?>
						</strong> on your Android device.
					</div>
					<div>
						Tap the Browser Menu and click <strong>Add to homescreen</strong>.
					</div>
					<div class="mt-2">
						<button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Android Add to Home Action Sheet -->
<div id="cookiesbox" class="offcanvas offcanvas-bottom cookies-box" tabindex="-1" data-bs-scroll="true" data-bs-backdrop="false">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title">We use cookies</h5>
	</div>
	<div class="offcanvas-body">
		<div>
			<?=$siteName;?> uses cookies to provide necessary website functionality, improve your experience and analyze our traffic. By using our website, you agree to our Privacy Policy and our Cookies Policy.
		</div>
		<div class="buttons">
			<a href="#" class="btn btn-primary btn-block" data-bs-dismiss="offcanvas">I understand</a>
		</div>
	</div>
</div>

<!-- ========= JS Files =========  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendor/jquery/jquery-3.2.1.slim.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Splide -->
<script src="assets/js/plugins/splide/splide.min.js"></script>
<!-- Base Js File -->
<script src="assets/js/main.js"></script>
<!-- ========= Plugins =========  -->
<script src="assets/js/plugins/datatable/datatables.min.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/datetime-moment.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script>
	// Add to Home with 10 seconds delay.
	AddtoHome( "10000", "once" );
</script>
<script language="javascript">
	populateCountries( "country", "state" );
	populateCountries( "country2" );
	populateCountries( "country2" );
</script>
<?= $crisp; ?>

<script src="//code.tidio.co/ynas9z11augeklnxxphbzhvsmheorfl3.js" async></script>
</body>
</html>