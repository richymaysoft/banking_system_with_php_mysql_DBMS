<?php
$page = 'Edit Email Template';
include 'header.php';

if (isset($_GET['email_id'])){
    $email_id = $_GET['email_id'];
    $eQuery = $conn->query( "SELECT * FROM email_template WHERE id='$email_id'" );
    $erow = $eQuery->fetch_assoc();
    $eSubject = $erow['subject'];
    $eBody = $erow['body'];
    $eName = $erow['name'];
}
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
								<div class="card-header"><?= $eName; ?><a href="EmailTemplates.php" class="float-right btn btn-outline-primary">Back</a></div>
								<div class="card-body">
									<form class="form-valide" method="post">
									    <div class="form-group">
													<input type="text" name="email_subject" class="form-control" value="<?= $eSubject; ?>" required>
													<input type="hidden" name="id" value="<?= $email_id; ?>">
												</div>
										<div class="form-group">
											<textarea name="email_body" id="summernote" required><?= $eBody; ?></textarea>
										</div>
										<div class="form-group float-right">
											<input name="update_template" type="submit" class="btn btn-primary" value="Update">
										</div>
									</form>
								</div>
							</div>
						</div>
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
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /.page -->
	<?php include( 'footer.php' ); ?>