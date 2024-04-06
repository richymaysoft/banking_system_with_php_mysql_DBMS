<?php
$page = 'TAX Code Authentication';
include 'header.php';
if ( isset( $_GET[ 'ref' ] ) ) {
	$Ref = $_GET[ 'ref' ];
	$find = $conn->query( "SELECT * FROM temp_transfer WHERE ref='$Ref' || status='Pending'" );
	if ( $find->num_rows > 0 ) {
		echo '<script> 
		window.onload = function(){
  document.getElementById("cotButton").click();
	}</script>';
	} else {
		$msg = $invalid_tx;
		echo '<script> 
		window.onload = function(){
  document.getElementById("transferButton").click();
	}</script>';
	}
} else {
	$msg = $tax_error;
	echo '<script> 
		window.onload = function(){
  document.getElementById("transferButton").click();
	}</script>';
}

?>
<div id="appCapsule">

</div>
<button data-bs-toggle="modal" data-bs-target="#DialogForm" id="cotButton" style="display: none">click</button>
<!-- Dialog Form -->
<div class="modal fade dialogbox" id="DialogForm" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					<?= $page; ?>
				</h5>
			</div>

			<form method="POST">
				<div class="modal-body text-start mb-2">

					<div class="form-group basic">
						<div class="input-wrapper">
							<span class="text-primary font-weight-bold"><?=$msg;?></span>
							<hr>
							<p>Insert your Tax Code to continue with the transfer. If you haven't obtained your Tax code, kindly contact Support.</p>
						</div>
					</div>

					<div class="form-group basic">
						<div class="input-wrapper">
							<style>
									.progress-value1 {
										animation: load 5s normal forwards;
										box-shadow: 0 10px 40px -10px #fff;
										border-radius: 10px;
										background: rgb(255, 214, 12);
										background: linear-gradient(261deg, rgba(255, 214, 12, 1) 3%, rgba(233, 185, 15, 1) 13%, rgba(200, 181, 40, 1) 20%, rgba(203, 164, 42, 1) 49%, rgba(204, 189, 74, 1) 63%, rgba(244, 125, 93, 1) 82%, rgba(238, 69, 69, 1) 95%);
										height: 30px;
										width: 0;
									}
									
									.progress-value1 {
										color: #fff;
										font-size: 14px;
										text-align: center;
										margin-top:
									}
									
									@keyframes load {
										0% {
											width: 25%;
										}
									}
								</style>
							<div class="progress-value1" style="width: 50%"><span>50%</span>
							</div>
						</div>
					</div>


					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="label" for="text1">Enter Tax Code</label>
							<input type="text" class="form-control" name="tax" required>
							<input type="hidden" name="Ref" value="<?= $Ref; ?>">
							<i class="clear-input">
								<i class="fa fa-user-edit"></i>
							</i>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-inline">
						<a href="index.php" class="btn btn-text-secondary">CANCEL</a>
						<input name="tax_transfer" type="submit" class="btn btn-text-primary" value="CONTINUE">
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