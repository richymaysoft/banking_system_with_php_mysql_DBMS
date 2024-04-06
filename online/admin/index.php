<?php
$page = 'Admin Dashboard';
include( 'header.php' );
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
						<?php if ( $notecount > 0 ) { ?>
						<div class="col-lg-12">
							<div class="alert alert-success has-icon alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<div class="alert-icon bg-success">
									<span class="fa fa-envelope"></span>
								</div>
								<h5 class="alert-heading text-success">Notification</h5>
								<strong class="text-black">You have <span class="text-success"><?=$notecount;?></span> unread Notification</strong> <a href="support-tickets.php" class="alert-link text-success">Click here to view</a>
							</div>
						</div>
						<?php } ?>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Bank Accounts</span></span>
									<a href="CreateAccount.php" class="float-right btn btn-sm btn-outline-primary">Create Account</a>
								</div>
								<div class="card-body">
									<?php
									$bnkAcc = $conn->query( "SELECT * FROM accounts" );
									if ( $bnkAcc->num_rows > 0 ) {
										?>
									<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
										<thead>
											<tr>
												<th class="text-primary">Account ID</th>
												<th class="text-primary">Name</th>
												<th class="text-primary">Email</th>
												<th class="text-primary">Account Status</th>
												<th class="text-primary">Checking / Balance</th>
												<th class="text-primary">Savings / Balance</th>
												<th class="text-primary">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											while ( $row = $bnkAcc->fetch_assoc() ) {
												?>
											<tr>
												<td>
													<?= $row['account_id']; ?>
												</td>
												<td>
													<?= $row['name']; ?>
												</td>
												<td>
													<?= $row['email']; ?>
												</td>
												<td>
													<?= $row['status']; ?>
												</td>
												<td>
													<?= $row['check_acc']; ?> /
													<?= '$'.number_format($row['check_balance'],2); ?>
												</td>
												<td>
													<?= $row['savings_acc']; ?> /
													<?= '$'.number_format($row['savings_balance'],2); ?>
												</td>
												<td>
													<div style="display: flex">
														<div><a href="view.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary">Manage</a>
														</div>
														<div>&nbsp;</div>
														<div>
															<form method="post" onSubmit="return(confirm('Are you sure that you want to delete This user?. This action is not reversible!'))">
																<input type="hidden" name="id" value="<?= $row['account_id']; ?>">
																<input type="submit" name="delete_user" value="Delete" class="btn btn-sm btn-danger">
															</form>
														</div>
													</div>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
									<?php } else { ?>
								</div>
								<div class="card">
									<div class="card-body" align="center">
										<i class="fa fa-exclamation-triangle text-primary fa-2x"></i><br>
										<strong>No Records Found!</strong>
										<br>
										<a href="CreateAccount.php" class="btn btn-sm btn-primary">CREATE ACCOUNT</a>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Last Account</span></span>
									</div>
									<div class="card-body">
										<div class="alert alert-primary has-icon" role="alert">
											<div class="alert-icon bg-primary">
												<span class="fas fa-users"></span>
											</div>
											<h3 class="card-title mb-4"> <span class="badge badge-sm badge-primary">TOTAL ACCOUNTS</span></h3>
											<h4 class="text-primary">
												<?= $totalUsers; ?>
											</h4>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold">Stats</span></span>
									</div>
									<div class="card-body">
										<div class="alert alert-primary has-icon" role="alert">
											<div class="alert-icon bg-primary">
												<span class="fas fa-user"></span>
											</div>
											<h3 class="card-title mb-4"> <span class="badge badge-sm badge-primary">LAST ACCOUNT</span></h3>
											<h4 class="text-primary">
												<?= $lastUserName; ?>
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