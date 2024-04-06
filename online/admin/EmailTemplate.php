<?php
$page = 'Email Template Settings';
include 'header.php';
?>
<main class="app-main">
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">

				<div class="page-section">
					<header class="page-title-bar bg-primary">
						<p class="lead font-weight-bold text-center text-white p-2">
							<?= $page; ?>
						</p>
					</header>
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									Available Merge Fields
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Current Date</span> = current_date</p>
											<p><span class="text-primary font-weight-bold">Current Year</span> = current_year</p>
											<p><span class="text-primary font-weight-bold">Site Email</span> = site_email</p>
											<p><span class="text-primary font-weight-bold">Site Logo</span> = site_logo</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Site Name</span> = site_name</p>
											<p><span class="text-primary font-weight-bold">theme Color</span> = site_theme_color</p>
											<p><span class="text-primary font-weight-bold">Upload Folder</span> = site_upload_folder</p>
											<p><span class="text-primary font-weight-bold">Site Link</span> = site_url</p>
											<p><span class="text-primary font-weight-bold">Amount</span> = the_amount</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">Support Department</span> = ticket_dept</p>
											<p><span class="text-primary font-weight-bold">Support Ticket Message</span> = ticket_description</p>
											<p><span class="text-primary font-weight-bold">Support Ticket Reference</span> = ticket_reference</p>
											<p><span class="text-primary font-weight-bold">Support Ticket Title</span> = ticket_title</p>
											<p><span class="text-primary font-weight-bold">Transaction Reference</span> = transaction_reference</p>
										</div>
										<div class="col-lg-3">
											<p><span class="text-primary font-weight-bold">User Country</span> = user_country</p>
											<p><span class="text-primary font-weight-bold">User Email</span> = user_email</p>
											<p><span class="text-primary font-weight-bold">User Full name</span> = user_full_name</p>
											<p><span class="text-primary font-weight-bold">User Password</span> = user_password</p>
										</div>
									</div>


								</div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">Email Header</div>
								<div class="card-body">
									<form class="form-valide" method="post">
										<div class="form-group">
											<textarea name="email_header" class="form-control" rows="20" required><?= $email_header; ?></textarea>
										</div>
										<div class="form-group float-right">
											<input name="update_header" type="submit" class="btn btn-primary" value="Update">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">Email Footer</div>
								<div class="card-body">
									<form class="form-valide" method="post">
										<div class="form-group">
											<textarea name="email_footer" class="form-control" rows="20" required><?= $email_footer; ?></textarea>
										</div>
										<div class="form-group float-right">
											<input name="update_footer" type="submit" class="btn btn-primary" value="Update">
										</div>
									</form>
								</div>
							</div>
						</div>


						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<span><i class="fa fa-caret-down"></i> <span class="font-weight-bold"><?= $page; ?></span></span>
								</div>
                            <div class="card-body">
										<?php
										$Query = $conn->query( "SELECT * FROM email_template ORDER BY name ASC" );
										if ( $Query->num_rows > 0 ) {
											?>
										<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
											<thead>
												<tr>
													<th class="text-primary">Name</th>
													<th class="text-primary">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												while ( $row = $Query->fetch_assoc() ) {
													?>
												<tr>
													<td>
														<?= $row[ 'name' ]; ?>
													</td>
													<td>
															<form class="d-xl-flex d-flex flex-row" method="GET" action="EditTemplate.php">
																<input type="hidden" name="email_id" value="<?= $row['id']; ?>">
																<input type="submit" value="Edit" class="btn btn-sm btn-primary" style="margin-top: 3px">
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
	<!-- /.page -->
	<?php include( 'footer.php' ); ?>