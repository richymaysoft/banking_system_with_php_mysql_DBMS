<?php
$page = 'Edit Transaction';
include( 'header.php' );

if ( isset( $_GET[ 'ref' ] ) ) {
	$ref = $_GET[ 'ref' ];
	$userID = $_GET[ 'id' ];
	$details = $conn->query( "SELECT * FROM transfer WHERE ref='$ref'" );
	$row = $details->fetch_assoc();

} else {
	echo "<script type=\"text/javascript\">window.alert('Invalid Input!');
window.location.href = 'index.php';</script>";
}

?>
<main class="app-main">
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">
				<!-- .container -->

				<div class="page-section">
					<div class="row">
						<div class="col-lg-9">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold"><?php echo $page.' #'.$ref; ?></span></span>
									<a href="view.php?id=<?php echo $userID; ?>" class="float-right btn btn-sm btn-outline-primary">Back</a>
								</div>
								<div class="card-body">
									<form method="post">
										<input type="hidden" name="id" value="<?php echo $userID; ?>">
										<input type="hidden" name="tp" value="<?php echo $row['type']; ?>">
										<input type="hidden" name="rf" value="<?php echo $ref; ?>">
										<div class="card-body">
											<!-- form row -->
											<div class="form-row">
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Amount</label> <input type="number" class="form-control" name="amount" value="<?php echo $row['amount']; ?>" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Bank Name</label> <input type="text" class="form-control" name="bank_name" value="<?php echo $row['bank_name']; ?>" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Bank Address</label>
													<textarea name="bank_address" class="form-control" rows="2" required><?php echo $row['bank_address']; ?></textarea>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Sender</label> <input type="text" class="form-control" name="sender_id" value="<?php echo $row['sender_id']; ?>" required>
												</div>
											</div>
											<!-- form row -->
											<div class="form-row">
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Sender Account</label> <input type="text" class="form-control" name="sender_acc" value="<?php echo $row['sender_acc']; ?>" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Transaction ID</label> <input type="text" class="form-control" name="ref" value="<?php echo $row['ref']; ?>" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Receiver</label>
													<input type="text" class="form-control" name="receiver_name" value="<?php echo $row['receiver_name']; ?>" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Receiver Account Number</label> <input type="text" class="form-control" name="receiver_acc" value="<?php echo $row['receiver_acc']; ?>" required>
												</div>
											</div>
											<!-- form row -->
											<div class="form-row">
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Credit or Debit</label>
													<select name="type" class="form-control">
														<option value="">Select</option>
														<option value="Credit">Credit</option>
														<option value="Debit">Debit</option>
													</select>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Swift Code</label> <input type="text" class="form-control" name="swift" value="<?php echo $row['swift']; ?>">
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Routing Number</label>
													<input type="text" class="form-control" name="routing" value="<?php echo $row['routing']; ?>">
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Remarks</label>
													<textarea name="remarks" class="form-control" rows="2" required><?php echo $row['remarks']; ?></textarea>
												</div>
											</div>
											<!-- form row -->
											<div class="form-row">
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Date & Time</label>
													<input id="flatpickr02" type="text" name="date" value="<?php echo $row['date']; ?>" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-date-format="l J \of F Y H:i" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Transaction Month</label>
													<input id="flatpickr02" type="text" value="<?php echo $row['month']; ?>" name="month" placeholder="Same as Date & Time" class="form-control" data-toggle="flatpickr" data-enable-time="false" data-date-format="F Y" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">Balance</label>
													<input type="text" class="form-control" name="balance" value="<?php echo $row['balance']; ?>" required>
												</div>
												<div class="col-md-3 mb-3">
													<label class="text-primary font-weight-bold">&nbsp;</label>
													<input name="update_tx" type="submit" class="btn btn-primary form-control" value="Update Transaction">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Stats</span></span>
										</div>
										<div class="card-body">
											<div class="alert alert-primary has-icon" role="alert">
												<div class="alert-icon bg-primary">
													<span class="fas fa-users"></span>
												</div>
												<h3 class="card-title mb-4"> <span class="badge badge-sm badge-primary">TOTAL ACCOUNTS</span></h3>
												<h4 class="text-primary">
													<?php echo $totalUsers; ?>
												</h4>
											</div>
											<div class="alert alert-primary has-icon" role="alert">
												<div class="alert-icon bg-primary">
													<span class="fas fa-user"></span>
												</div>
												<h3 class="card-title mb-4"> <span class="badge badge-sm badge-primary">LAST ACCOUNT</span></h3>
												<h4 class="text-primary">
													<?php echo $lastUserName; ?>
												</h4>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>


			</div>
			<!-- /.page -->





			<?php include( 'footer.php' ); ?>