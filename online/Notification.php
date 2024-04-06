<?php
$page = 'Notifications';
include( 'header.php' );
?>
<div id="appCapsule">
	<!-- Transactions -->
	<br>
	<!-- item -->
	<div class="card bg-transparent">
		<div class="card-header">
			<?=$page;?>
		</div>
		<div class="card-body">
			<?php
			$sqlRefe = "SELECT * FROM notifications WHERE user_id='$id'";
			$result = $conn->query( $sqlRefe );
			if ( $result->num_rows > 0 ) {
				?>
			<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
				<thead>
					<small class="text-center mobile">Click the <span class="text-white" style="padding:2px 7px;border-radius:50%;background-color:#0d6efd">+</span> icon for details</small>
					<hr>
					<tr>
						<th>Date</th>
						<th>Title</th>
						<th>Reference</th>
						<th>Status</th>
						<th>Read</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ( $row = $result->fetch_assoc() ) {
						$endDate = $row[ 'status' ];
						if ( $endDate == '0' ) {
							$expired = '<div class="badge badge-danger" style="width: 100%">NOT SEEN</div>';
						} else if ( $endDate == '1' ) {
							$expired = '<div class="badge badge-success" style="width: 100%">SEEN</div>';
						}

						$dl = $row[ 'id' ];
						?>
					<tr>
						<td>
							<span style="display:none">
								<?= $row['created_at']; ?>
							</span>
							<?= date( "jS F\, Y h:i A", strtotime( $row['created_at'] ) ); ?>
						</td>
						<td>
							<?= $row['subject']; ?>
						</td>
						<td>
							<?= $row['ref']; ?>
						</td>
						<td>
							<?= $expired; ?><br>
						</td>

						<td>
							<form method="post">
								<input type="hidden" name="read" value="<?= $row['id']; ?>">
								<input type="submit" class="btn btn-sm btn-primary" value="Open" name="notification_read">
							</form>

						</td>
						<td>
							<form method="post">
								<input type="hidden" name="delete" value="<?= $row['id']; ?>">
								<input type="submit" class="btn btn-sm btn-danger" value="Delete" name="notification_delete">
							</form>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div align="center" style="position:fixed;bottom:50%;left:0;right:0;">
				<i class="fa fa-exclamation-triangle text-primary fa-2x"></i><br>
				<strong>No Records Found!</strong>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- * item -->
	<!-- * Transac -->
</div>
<!-- Dialog Form -->
<button data-bs-toggle="modal" data-bs-target="#Delete" id="DeleteButton" style="display: none">click</button>
<div class="modal fade dialogbox" id="Delete" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Do you wish to delete message?
				</h5>
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CANCEL</a>
					<form method="post">
						<input type="hidden" name="delete" value="<?= $dl; ?>">
						<input type="submit" class="btn text-danger" value="PROCEED" name="notification_deleted">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Dialog Form -->
<?php
include 'footer.php';
?>