<?php
$page = 'Send Email';
include 'header.php';
?>
<main class="app-main">
	<!-- .wrapper -->
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
										<span><i class="fa fa-caret-down text-primary"></i> <span class="font-weight-bold text-primary"><?= $page; ?></span></span>
										<p class="text-danger">DO NOT use this feature for Email bombing! Send mails minimally and not more than 10 recepients in 1 hour</p>
									</div>
									<div class="card-body">
										<form method="post" enctype="multipart/form-data">
												<div class="form-group">
												    <label>Receiver (For multiple emails, separate with comma. e.g abc@gmail.com,xyz@gmail.com,123@gmail.con)</label>
													<input type="text" name="all" class="form-control">
												</div>
												<div class="form-group">
												    <label>Subject</label>
													<input type="text" name="subject" class="form-control" placeholder="Subject" required>
												</div>
												<div class="form-group">
													<textarea name="message" id="summernote" required></textarea>
												</div>
												<div class="form-group">
													<input type="file" name="file" class="form-control">
													<small>You can attach file (jpg, jpeg, png, gif, mp4, mp3, pdf, doc, docx, bmp, webp, webm)</small>
												</div>
												<div class="form-group row">
													<div class="col-sm-10">
														<button type="reset" class="btn btn-danger">Reset</button>
														<input type="submit" name="send_email" value="Send" class="btn btn-success">
													</div>
												</div>
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