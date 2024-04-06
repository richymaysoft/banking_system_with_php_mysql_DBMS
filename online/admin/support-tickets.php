<?php
$page = 'Support Tickets';
include( 'header.php' );
?>
<main class="app-main">
	<!-- .wrapper -->
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">
				<div class="page-section">
					<div class="row">
						<div class="col-xl-12">
							<?php echo $msg; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<?php echo $page; ?>
									<a href="index.php" class="float-right btn btn-sm btn-outline-primary">Home</a>
								</div>
								<div class="card-body">
									<?php
									$sqlRefe = "SELECT * FROM support_tickets";
									$result = $conn->query( $sqlRefe );
									if ( $result->num_rows > 0 ) {
										$alert = 'none';
										?>
									<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
										<thead>
											<tr>
												<th>Title</th>
												<th>Date</th>
												<th>Reference</th>
												<th>Status</th>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php
											while ( $row = $result->fetch_assoc() ) {
												$endDate = $row[ 'status' ];

												if ( $endDate == '0' ) {
													$expired = '<span class="badge badge-danger">Not Seen</span>';


												} else if ( $endDate == '1' ) {

													$expired = '<span class="badge badge-success">Seen</span>';

												}
												?>
											<tr>
												<td>
													<?php echo $row['subject']; ?>
												</td>

												<td>
													<span style="display:none">
														<?= $row['created_at']; ?>
													</span>
													<?= date( "jS F\, Y h:i A", strtotime( $row['created_at'] ) ); ?>
												</td>
												<td>
													<?php echo $row['ref']; ?>
												</td>
												<td>
													<?php echo $expired; ?><br>
												</td>
												<td>
													<form method="post">
														<input type="hidden" name="read" value="<?= $row['id']; ?>">
														<input type="submit" class="btn btn-sm btn-primary" value="Open" name="read_ticket">
													</form>
												</td>
												<td>
												<a href="view.php?user_id=<?php echo $row['user_id']; ?>&subject=Re: <?php echo $row['subject']; ?>" class="btn btn-sm btn-success text-white">Reply</a>
												</td>

												<td>
													<form method="post" onSubmit="return(confirm('Are you sure that you want to delete?. This action is not reversible!'))">
														<input type="hidden" name="delete" value="<?= $row['id']; ?>">
														<input type="submit" class="btn btn-sm btn-danger" value="Delete" name="delete_ticket">
													</form>
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
			</div>
		</div>
	</div>
	<?php include( 'footer.php' ); ?>