<?php
$page = 'Beneficiaries';
include( 'header.php' );
if ( isset( $_GET[ 'id' ] ) ) {
	$b_id = $_GET[ 'id' ];
	$stmt = $conn->query( "SELECT * FROM beneficiary WHERE id = '$b_id'" );
	$b_row = $stmt->fetch_assoc();
	$Name = $b_row[ 'name' ];
	$Acc_no = $b_row[ 'acc_no' ];
	$Swift = $b_row[ 'swift' ];
	$rtn = $b_row[ 'rtn' ];
	$Email = $b_row[ 'email' ];
	$Bank = $b_row[ 'bank' ];
	$Address = $b_row[ 'address' ];
	$Img = $b_row[ 'image' ];
	$Date = $b_row[ 'created_at' ];
}
?>
<!-- App Capsule -->
<div id="appCapsule" style="display: <?=$show_ben;?>">

	<div class="section mt-3 text-center">
		<div class="avatar-section">
			<a href="#" data-bs-toggle="modal" data-bs-target="#photo"><img src="<?= $uploadFolder.'/'.$Img; ?>" alt="<?=$Name;?>" class="imaged" style="width:100px;height:100px;border-radius:50%">
			<span class="button"><i class="fas fa-camera"></i></span>
			</a>
		</div>
	</div>
	<div class="section mt-2 text-center">
		<div class="row">
			<div class="col-4 col-sm-4">
				<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transferBen">Transfer&nbsp;<i class="fas fa-share"></i></a>
			</div>
			<div class="col-4 col-sm-4">
			    <form method="post"><input type="hidden" name="edit_ben" value="<?=$b_id;?>"><button type="submit" class="btn btn-outline-primary">Edit&nbsp;<i class="fas fa-edit"></i></button> </form>
			</div>
			<div class="col-4 col-sm-4">
				<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBen">Delete&nbsp;<i class="fas fa-trash"></i></a>
			</div>
		</div>
	</div>


	<div class="listview-title mt-1">&nbsp;</div>
	<ul class="listview image-listview text inset">
		<li>
			<div class="item">
				<div class="in">
					<div>
						<?= $Name; ?>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="item">
				<div class="in">
					<div>
						<?= $Email; ?>
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
					<div>Bank</div>
					<span class="text-primary">
						<?= $Bank; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>IBAN</div>
					<span class="text-primary">
						<?= $Acc_no; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Swift Code</div>
					<span class="text-primary">
						<?= $Swift; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Routing</div>
					<span class="text-primary">
						<?= $rtn; ?>
					</span>
				</div>
			</a>
		</li>
		<li>
			<a href="#" class="item">
				<div class="in">
					<div>Added</div>
					<span class="text-primary">
						<?= date( "jS F\, Y h:i A", strtotime( $Date ) ); ?>
					</span>
				</div>
			</a>
		</li>
	</ul>
</div>
<!-- * App Capsule -->
<!-- Transfer -->
<div class="modal fade action-sheet" id="transferBen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary">Transfer to <?= implode(' ', array_slice(explode(' ', $Name), 0, 1)); ?></h5>
			</div>
			<div class="modal-body">
				<div class="action-sheet-content">
					<form method="POST">
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
								<input type="hidden" name="name" value="<?=$Name;?>">
								<input type="hidden" name="acct" value="<?=$Acc_no;?>">
								<input type="hidden" name="bank" value="<?=$Bank;?>">
								<input type="hidden" name="swift" value="<?=$Swift;?>">
								<input type="hidden" name="routing" value="<?=$rtn;?>">
								<input type="hidden" name="address" value="<?=$Address;?>">
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
								<input type="number" name="pin" class="form-control" required>
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
<!-- * Transfer  -->
<!-- Photo -->
<div class="modal fade dialogbox" id="photo" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Change Photo</h5>
			</div>
			<form method="post" enctype="multipart/form-data">
				<div class="modal-body text-start mb-2">
					<div class="form-group basic">
						<div class="input-wrapper">
							<input type="file" class="form-control" name="photo" required>
							<input type="hidden" name="id" value="<?=$b_id;?>">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-inline">
						<button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</button>

						<input type="submit" class="btn btn-text-primary" value="UPLOAD" name="upload_ben_photo">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- * Photo -->
<!-- Delete -->
<div class="modal fade dialogbox" id="deleteBen" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header pt-2">
				<h5 class="modal-title">You are about to Delete <?=$Name;?> from your Beneficiary List</h5>
			</div>
			<div class="modal-body">
				Are you sure about this?
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
					<form method="post">
					<input type="hidden" name="id" value="<?=$b_id;?>">
						<input type="submit" class="btn btn-text-primary" value="PROCEED" name="delete_ben">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Delete-->
<!-- Success -->
<div class="modal fade dialogbox" id="BenSuccess" data-bs-backdrop="static" tabindex="-1" role="dialog">
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
					<a href="index.php" class="btn">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Success -->
<?php
include 'footer.php';
?>