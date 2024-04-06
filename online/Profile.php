<?php
$page = 'Profile';
include( 'header.php' );
?>
<!-- App Capsule -->
<div id="appCapsule">

	<div class="section mt-3 text-center">
		<?php if ($allow_upload == 1){ ?>
		<div class="avatar-section">
			<a href="#" data-bs-toggle="modal" data-bs-target="#photo"><img src="<?= $uploadFolder.'/'.$image; ?>" alt="avatar" class="imaged" style="width:100px;height:100px;border-radius:50%">
			<span class="button"><i class="fas fa-camera"></i></span>
			</a>
		</div>
		<?php } else { ?>
		<div class="avatar-section">
			<a href="#" ><img src="<?= $uploadFolder.'/'.$image; ?>" alt="avatar" class="imaged" style="width:100px;height:100px;border-radius:50%">
			</a>
		</div>
		<?php } ?>
	</div>

	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<div class="item">
				<div class="in">
					<div>
						<?= $name; ?>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="item">
				<div class="in">
					<div>
						<?= $email; ?>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Account ID</div>
					<span class="text-primary">
						<?= $acc_id; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Status</div>
					<span class="text-primary">
						<?= $status; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Savings</div>
					<span class="text-primary">
						<?= $savings_acc; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Checking</div>
					<span class="text-primary">
						<?= $check_acc; ?>
					</span>
				</div>
			</a>
		</li>
	</ul>

	<div class="listview-title mt-1">Available Balance</div>
	<ul class="listview image-listview text inset">
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Savings</div>
					<span class="text-primary">
						<?= $currency.number_format($savings_balance,2); ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Checking</div>
					<span class="text-primary">
						<?= $currency.number_format($savings_balance,2); ?>
					</span>
				</div>
			</a>
		</li>
	</ul>
	<?php if ($allow_codes == 1){ ?>
	<div class="listview-title mt-1">Account Codes</div>
	<ul class="listview image-listview text inset">
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>COT Code</div>
					<span class="text-primary">
						<?= $cot; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Tax Code</div>
					<span class="text-primary">
						<?= $tax; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>IMF Code</div>
					<span class="text-primary">
						<?= $imf; ?>
					</span>
				</div>
			</a>
		</li>
	</ul>
	<?php } ?>
	<div class="listview-title mt-1">Security</div>
	<ul class="listview image-listview text inset" id="Password">
		<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#pass">
				<div class="in">
					<div class="text-danger">Change Password</div>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#pin">
				<div class="in">
					<div class="text-danger">Change PIN</div>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#logout_all">
				<div class="in">
					<div class="text-danger">Log Out From All Devices</div>
				</div>
			</a>
		</li>

		<li>
		    <div class="item">
				<div class="in">
					
				</div>
				</div>
		</li>
	</ul>

	<div class="listview-title mt-1">&nbsp;</div>

</div>
<!-- * App Capsule -->
<!-- Logout -->
<div class="modal fade dialogbox" id="logout_all" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="pt-3 text-center">
				<img src="<?= $uploadFolder.'/'.$image; ?>" alt="image" class="imaged" style="width:50px;height:50px;border-radius:50%">
			</div>
			<div class="modal-header pt-2">
				<h5 class="modal-title">You are about to logout from all Active sessions</h5>
			</div>
			<div class="modal-body">
				Are you sure about this?
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
					<form method="post">
					    <input type="submit" name="logout_all" class="btn btn-text-primary" value="LOGOUT">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Logout-->
<!-- Photo -->
<div class="modal fade dialogbox" id="photo" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Photo</h5>
			</div>
			<form method="post" enctype="multipart/form-data">
				<div class="modal-body text-start mb-2">
					<div class="form-group basic">
						<div class="input-wrapper">
							<input type="file" class="form-control" name="photo" accept="image/*" capture required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-inline">
						<button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</button>

						<input type="submit" class="btn btn-text-primary" value="UPLOAD" name="upload_photo">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- * Photo -->


<!-- Change PIN -->
        <div class="modal fade dialogbox" id="pin" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change PIN</h5>
                    </div>
                    <form method="POST">
                        <div class="modal-body text-start mb-2">

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text1">New PIN</label>
                                    <input type="number" class="form-control" name="pin" required>
                                </div>
                            </div>
													<div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text1">Password</label>
                                    <input type="password" class="form-control" name="otp" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button type="button" class="btn btn-text-secondary"
                                    data-bs-dismiss="modal">CANCEL</button>
  
															<input type="submit" class="btn btn-text-primary" value="PROCEED" name="change_pin">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Change PIN -->
<!-- Dialog Form -->
        <div class="modal fade dialogbox" id="pass" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                    </div>
                    <form method="POST">
                        <div class="modal-body text-start mb-2">

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text1">Old Password</label>
                                    <input type="password" class="form-control" name="old_password" required>
                                </div>
                            </div>
													<div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text1">New Password</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>
                            </div>
													<div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text1">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm_password" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button type="button" class="btn btn-text-secondary"
                                    data-bs-dismiss="modal">CANCEL</button>
  
															<input type="submit" class="btn btn-text-primary" value="PROCEED" name="change_password">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Dialog Form -->
<?php
include 'footer.php';
?>