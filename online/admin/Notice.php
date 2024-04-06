<?php
$page = 'General Notice';
include 'header.php';
?>
<main class="app-main">
	<!-- .wrapper -->
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">
				<!-- .container -->
			
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
										<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold text-primary"><?= $page; ?></span></span>
										<?= $theStatus; ?>
									</div>
									<div class="card-body">
										<form method="post">
												<div class="form-group">
													<select name="status" class="form-control" required>
													<option value="">Status</option>
													<option value="1">Activate</option>
													<option value="0">Deactivate</option>
													</select>
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" value="<?= $title; ?>" required>
												</div>
												<div class="form-group">
													<textarea name="message" id="summernote" required><?= $body; ?></textarea>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<button type="reset" class="btn btn-danger">Reset</button>
														<input type="submit" name="post_notice" value="Update" class="btn btn-success">
													</div>
												</div>
												<p class="text-primary">This will post the notification on the dashboard of every user</p>
											</form>
									</div>
								</div>
							</div>
						</div>
					</div>
		


			</div>
			<!-- /.page -->
		</div>
	</div>
	<!-- .app-footer -->

	<?php include 'footer.php'; ?>