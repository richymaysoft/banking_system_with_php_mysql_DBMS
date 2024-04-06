<?php
$page = 'Account';
include 'header.php';
?>
<!-- App Capsule -->
<div id="appCapsule">
	<div class="section full bg-primary">
		<br>
		<!-- carousel single -->
		<div class="carousel-single splide">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<!-- card block -->
						<div class="card-block bg-transparent border border-info">
							<div class="card-main">
								<div class="card-button dropdown">
									<button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
																		<i class="fas fa-ellipsis-h"></i>
																		</button>
								




									<div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#wireTransfer">
																				<i class="fas fa-share text-primary"></i>&nbsp;
																				Wire Transfer </a>
									



										<a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#localTransfer">
																				<i class="fas fa-share text-primary"></i>&nbsp;
																				Local Transfer </a>
									



										<a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#savingsStatement">
																				<i class="fas fa-list text-primary"></i>&nbsp;
																				Account Statement </a>
									



									</div>
								</div>
								<div class="balance"> <span class="label">SAVINGS</span>
									<h1 class="title">
										<?= $currency.number_format(($savings_balance), 2); ?>
									</h1>
								</div>
								<div class="in">
									<div class="card-number"> <span class="label">Account Number</span> ••••
										<?= substr($savings_acc,-4); ?>
									</div>
									<div class="bottom">
										<div class="card-expiry"> <span class="label">Credits - <?= date("F Y"); ?></span>
											<?= $currency.number_format(($MonthlyCredit),2); ?>
										</div>
										<div class="card-ccv"> <span class="label">Debits - <?= date("F Y"); ?></span>
											<?= $currency.number_format(($MonthlyDebit),2); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- * card block -->
					</li>
					<li class="splide__slide">
						<!-- card block -->
						<div class="card-block bg-transparent border border-light">
							<div class="card-main">
								<div class="card-button dropdown">
									<button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
																		<i class="fas fa-ellipsis-h"></i>
																		</button>
								




									<div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#wireTransfer">
																				<i class="fas fa-share text-primary"></i>&nbsp;
																				Wire Transfer </a>
									



										<a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#localTransfer">
																				<i class="fas fa-share text-primary"></i>&nbsp;
																				Local Transfer </a>
									



										<a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#checkingStatement">
																				<i class="fas fa-list text-primary"></i>&nbsp;
																				Account Statement </a>
									



									</div>
								</div>
								<div class="balance"> <span class="label">CHECKINGS</span>
									<h1 class="title">
										<?= $currency.number_format(($check_balance), 2); ?>
									</h1>
								</div>
								<div class="in">
									<div class="card-number"> <span class="label">Account Number</span> ••••
										<?= substr($check_acc,-4); ?>
									</div>
									<div class="bottom">
										<div class="card-expiry"> <span class="label">Credits - <?= date("F Y"); ?></span>
											<?= $currency.number_format(($cMonthlyCredit),2); ?>
										</div>
										<div class="card-ccv"> <span class="label">Debits - <?= date("F Y"); ?></span>
											<?= $currency.number_format(($cMonthlyDebit),2); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- * card block -->
					</li>
				</ul>
			</div>
		</div>
		<!-- * carousel single -->
	</div>

	<!-- Wallet Card -->
	<div class="section wallet-card-section pt-1 mb-1">
		<div class="wallet-card">
            <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modals">OPEN MODAL</button>-->
            
			<!-- Wallet Footer -->
			<div class="wallet-footer mb-2">
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#wireTransfer">
						<div class="icon-wrapper">
							<i class="fas fa-share-square"></i>
						</div>
						<strong>Wire <br>Transfer</strong> </a>

				</div>
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#localTransfer">
						<div class="icon-wrapper">
							<i class="fa fa-share-alt"></i>
						</div>
						<strong>Local <br>Transfer</strong> </a>
				</div>
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#check">
						<div class="icon-wrapper">
							<i class="fas fa-money-check"></i>
						</div>
						<strong>Check <br>Deposit</strong>
					</a>
				</div>
				
			</div>
			<!-- * Wallet Footer -->
			<!-- Wallet Footer -->
			<div class="wallet-footer mb-2">
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#savingsStatement">
						<div class="icon-wrapper">
							<i class="fas fa-list-alt"></i>
						</div>
						<strong>Savings <br>Statement</strong> </a>
				</div>
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#checkingStatement">
						<div class="icon-wrapper">
							<i class="fas fa-list"></i>
						</div>
						<strong>Checking <br>Statement</strong> </a>
				</div>
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#cards">
						<div class="icon-wrapper">
							<i class="far fa-credit-card"></i>
						</div>
						<strong>
							Credit <br>Card</strong>
					</a>
				</div>
			</div>
			<!-- * Wallet Footer -->
			<!-- Wallet Footer -->
			<div class="wallet-footer mb-2">
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#loan">
						<div class="icon-wrapper">
							<i class="fas fa-money-bill-alt"></i>
						</div>
						<strong><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?><br>Loans</strong> </a>

				</div>
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#investment">
						<div class="icon-wrapper">
							<i class="fas fa-chart-bar"></i>
						</div>
						<strong><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?><br>Investment</strong> </a>
				</div>
				<div class="item">
					<a href="#" data-bs-toggle="modal" data-bs-target="#tips">
						<div class="icon-wrapper">
							<i class="fas fa-lightbulb"></i>
						</div>
						<strong>
							<?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?><br>Tips</strong>
					</a>
				</div>
				
				
			</div>
			<!-- * Wallet Footer -->
			<hr>
			<!-- news -->
			<?= $news; ?>
			<!-- news -->
			<hr>
			<!-- Send Money -->
			<div class="section full mt-2">
				<div class="section-heading padding">
					<h3 class="label text-primary">Beneficiaries</h3>
					<a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addBeneficiary">Add New&nbsp;<i class="fas fa-user-plus"></i></a> </div>
				<hr>
				<!-- carousel small -->
				<?php
				$donor = $conn->query( "SELECT * FROM beneficiary WHERE donor='$acc_id'" );
				if ( $donor->num_rows > 0 ) {
					?>
				<div class="carousel-small splide">
					<div class="splide__track">
						<ul class="splide__list">
							<?php while ( $donorRow = $donor->fetch_assoc() ) { ?>
							<li class="splide__slide">
								<a href="Beneficiary.php?id=<?=$donorRow['id'];?>">
									<div class="user-card"> <img src="<?= $uploadFolder.'/'.$donorRow['image']; ?>" alt="img" class="imaged w-100">
										<strong>
											<?= implode(' ', array_slice(explode(' ', $donorRow['name']), 0, 1)); ?>
										</strong>
									</div>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<?php } else { ?>
				<div class="text-center">No Beneficiary. <a href="#" data-bs-toggle="modal" data-bs-target="#addBeneficiary">Add New</i></a>
				</div>
				<?php } ?>
				<!-- * carousel small -->
			</div>
			<!-- * Send Money -->
		</div>
	</div>
	<!-- Wallet Card -->
</div>
<!-- * App Capsule --> 
<div class="modal fade dialogbox" id="modals" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-body">

			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="https://ravenousdrawers.com/xgkdzkeq2h?key=6518561b40c6524b4c30231714ecb73a" class="btn" onclick="window.open(URL); self.focus();">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>