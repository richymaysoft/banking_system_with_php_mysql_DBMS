<?php
$page = 'Website Settings';
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
									<span><i class="fa fa-caret-down"></i> <span class="font-weight-bold"><?= $page; ?></span></span>
								</div>

								<form method="post">
									<div class="card-body">
										<!-- form row -->
										<div class="form-row">

											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Company Name</label> <input type="text" class="form-control" name="siteName" value="<?= $siteName; ?>" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Company Phone Number</label> <input type="text" class="form-control" name="phone" value="<?= $sitePhone; ?>">
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Company Email</label> <input type="text" class="form-control" name="email" value="<?= $siteEmail; ?>" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Company Abbreviation</label> <input type="text" class="form-control" name="abrv" value="<?= $abrv; ?>" required>
											</div>

										</div>

										<hr>

										<div class="form-row">

											<div class="col-md-6 mb-3">
												<label class="text-primary font-weight-bold">Company Address</label> <textarea class="form-control" rows="4" name="address"><?= $siteAddress; ?></textarea>
											</div>
											<div class="col-md-6 mb-3">
												<label class="text-primary font-weight-bold">Company Description</label> <textarea class="form-control" rows="4" name="desc"><?= $siteDescription; ?></textarea>
											</div>
										</div>

										<hr>


										<div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Timezone</label>
												<select class="form-control" id="val-skill" name="timezone">
													<option value="">Select</option>
													<?php 
																	$timezones = array(
																		'Pacific/Midway' => "(GMT-11:00) Midway Island",
																		'US/Samoa' => "(GMT-11:00) Samoa",
																		'US/Hawaii' => "(GMT-10:00) Hawaii",
																		'US/Alaska' => "(GMT-09:00) Alaska",
																		'US/Pacific' => "(GMT-08:00) Pacific Time (US &amp; Canada)",
																		'America/Tijuana' => "(GMT-08:00) Tijuana",
																		'US/Arizona' => "(GMT-07:00) Arizona",
																		'US/Mountain' => "(GMT-07:00) Mountain Time (US &amp; Canada)",
																		'America/Chihuahua' => "(GMT-07:00) Chihuahua",
																		'America/Mazatlan' => "(GMT-07:00) Mazatlan",
																		'America/Mexico_City' => "(GMT-06:00) Mexico City",
																		'America/Monterrey' => "(GMT-06:00) Monterrey",
																		'Canada/Saskatchewan' => "(GMT-06:00) Saskatchewan",
																		'US/Central' => "(GMT-06:00) Central Time (US &amp; Canada)",
																		'US/Eastern' => "(GMT-05:00) Eastern Time (US &amp; Canada)",
																		'US/East-Indiana' => "(GMT-05:00) Indiana (East)",
																		'America/Bogota' => "(GMT-05:00) Bogota",
																		'America/Lima' => "(GMT-05:00) Lima",
																		'America/Caracas' => "(GMT-04:30) Caracas",
																		'Canada/Atlantic' => "(GMT-04:00) Atlantic Time (Canada)",
																		'America/La_Paz' => "(GMT-04:00) La Paz",
																		'America/Santiago' => "(GMT-04:00) Santiago",
																		'Canada/Newfoundland' => "(GMT-03:30) Newfoundland",
																		'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
																		'Greenland' => "(GMT-03:00) Greenland",
																		'Atlantic/Stanley' => "(GMT-02:00) Stanley",
																		'Atlantic/Azores' => "(GMT-01:00) Azores",
																		'Atlantic/Cape_Verde' => "(GMT-01:00) Cape Verde Is.",
																		'Africa/Casablanca' => "(GMT) Casablanca",
																		'Europe/Dublin' => "(GMT) Dublin",
																		'Europe/Lisbon' => "(GMT) Lisbon",
																		'Europe/London' => "(GMT) London",
																		'Africa/Monrovia' => "(GMT) Monrovia",
																		'Europe/Amsterdam' => "(GMT+01:00) Amsterdam",
																		'Europe/Belgrade' => "(GMT+01:00) Belgrade",
																		'Europe/Berlin' => "(GMT+01:00) Berlin",
																		'Europe/Bratislava' => "(GMT+01:00) Bratislava",
																		'Europe/Brussels' => "(GMT+01:00) Brussels",
																		'Europe/Budapest' => "(GMT+01:00) Budapest",
																		'Europe/Copenhagen' => "(GMT+01:00) Copenhagen",
																		'Europe/Ljubljana' => "(GMT+01:00) Ljubljana",
																		'Europe/Madrid' => "(GMT+01:00) Madrid",
																		'Europe/Paris' => "(GMT+01:00) Paris",
																		'Europe/Prague' => "(GMT+01:00) Prague",
																		'Europe/Rome' => "(GMT+01:00) Rome",
																		'Africa/Lagos' => "(GMT+01:00) Lagos",
																		'Europe/Sarajevo' => "(GMT+01:00) Sarajevo",
																		'Europe/Skopje' => "(GMT+01:00) Skopje",
																		'Europe/Stockholm' => "(GMT+01:00) Stockholm",
																		'Europe/Vienna' => "(GMT+01:00) Vienna",
																		'Europe/Warsaw' => "(GMT+01:00) Warsaw",
																		'Europe/Zagreb' => "(GMT+01:00) Zagreb",
																		'Europe/Athens' => "(GMT+02:00) Athens",
																		'Europe/Bucharest' => "(GMT+02:00) Bucharest",
																		'Africa/Cairo' => "(GMT+02:00) Cairo",
																		'Africa/Harare' => "(GMT+02:00) Harare",
																		'Europe/Helsinki' => "(GMT+02:00) Helsinki",
																		'Europe/Istanbul' => "(GMT+02:00) Istanbul",
																		'Asia/Jerusalem' => "(GMT+02:00) Jerusalem",
																		'Europe/Kiev' => "(GMT+02:00) Kyiv",
																		'Europe/Minsk' => "(GMT+02:00) Minsk",
																		'Europe/Riga' => "(GMT+02:00) Riga",
																		'Europe/Sofia' => "(GMT+02:00) Sofia",
																		'Europe/Tallinn' => "(GMT+02:00) Tallinn",
																		'Europe/Vilnius' => "(GMT+02:00) Vilnius",
																		'Asia/Baghdad' => "(GMT+03:00) Baghdad",
																		'Asia/Kuwait' => "(GMT+03:00) Kuwait",
																		'Africa/Nairobi' => "(GMT+03:00) Nairobi",
																		'Asia/Riyadh' => "(GMT+03:00) Riyadh",
																		'Europe/Moscow' => "(GMT+03:00) Moscow",
																		'Asia/Tehran' => "(GMT+03:30) Tehran",
																		'Asia/Baku' => "(GMT+04:00) Baku",
																		'Europe/Volgograd' => "(GMT+04:00) Volgograd",
																		'Asia/Muscat' => "(GMT+04:00) Muscat",
																		'Asia/Tbilisi' => "(GMT+04:00) Tbilisi",
																		'Asia/Yerevan' => "(GMT+04:00) Yerevan",
																		'Asia/Kabul' => "(GMT+04:30) Kabul",
																		'Asia/Karachi' => "(GMT+05:00) Karachi",
																		'Asia/Tashkent' => "(GMT+05:00) Tashkent",
																		'Asia/Kolkata' => "(GMT+05:30) Kolkata",
																		'Asia/Kathmandu' => "(GMT+05:45) Kathmandu",
																		'Asia/Yekaterinburg' => "(GMT+06:00) Ekaterinburg",
																		'Asia/Almaty' => "(GMT+06:00) Almaty",
																		'Asia/Dhaka' => "(GMT+06:00) Dhaka",
																		'Asia/Novosibirsk' => "(GMT+07:00) Novosibirsk",
																		'Asia/Bangkok' => "(GMT+07:00) Bangkok",
																		'Asia/Jakarta' => "(GMT+07:00) Jakarta",
																		'Asia/Krasnoyarsk' => "(GMT+08:00) Krasnoyarsk",
																		'Asia/Chongqing' => "(GMT+08:00) Chongqing",
																		'Asia/Hong_Kong' => "(GMT+08:00) Hong Kong",
																		'Asia/Kuala_Lumpur' => "(GMT+08:00) Kuala Lumpur",
																		'Australia/Perth' => "(GMT+08:00) Perth",
																		'Asia/Singapore' => "(GMT+08:00) Singapore",
																		'Asia/Taipei' => "(GMT+08:00) Taipei",
																		'Asia/Ulaanbaatar' => "(GMT+08:00) Ulaan Bataar",
																		'Asia/Urumqi' => "(GMT+08:00) Urumqi",
																		'Asia/Irkutsk' => "(GMT+09:00) Irkutsk",
																		'Asia/Seoul' => "(GMT+09:00) Seoul",
																		'Asia/Tokyo' => "(GMT+09:00) Tokyo",
																		'Australia/Adelaide' => "(GMT+09:30) Adelaide",
																		'Australia/Darwin' => "(GMT+09:30) Darwin",
																		'Asia/Yakutsk' => "(GMT+10:00) Yakutsk",
																		'Australia/Brisbane' => "(GMT+10:00) Brisbane",
																		'Australia/Canberra' => "(GMT+10:00) Canberra",
																		'Pacific/Guam' => "(GMT+10:00) Guam",
																		'Australia/Hobart' => "(GMT+10:00) Hobart",
																		'Australia/Melbourne' => "(GMT+10:00) Melbourne",
																		'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
																		'Australia/Sydney' => "(GMT+10:00) Sydney",
																		'Asia/Vladivostok' => "(GMT+11:00) Vladivostok",
																		'Asia/Magadan' => "(GMT+12:00) Magadan",
																		'Pacific/Auckland' => "(GMT+12:00) Auckland",
																		'Pacific/Fiji' => "(GMT+12:00) Fiji",
																	);

																		foreach ( $timezones as $key => $value ) {

																		echo "<option value='" . $key . "'>" . $value . "</option>" . "<br />";
																						}
																	
																					?>
												</select>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Recaptcha</label>
												<select class="form-control" name="recaptcha" required>
													<option value="">Select</option>
													<option value="1" <?= $recap_yes; ?>>ON</option>
													<option value="0" <?= $recap_no; ?>>OFF</option>
												</select>
											</div>

											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">RecaptchaV2 Public Key</label>
												<input type="text" class="form-control" name="public" value="<?= $publickey; ?>" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">RecaptchaV2 Private Key</label>
												<input type="text" class="form-control" name="private" value="<?= $privatekey; ?>" required>
											</div>
										</div>

										<hr>

										<div class="form-row">

											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Theme Color</label>
												<input type="color" class="form-control" name="theme" value="<?= $themeColor; ?>" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Theme Assets Folder</label>
												<input type="text" class="form-control" name="assetFolder" value="<?= $themeFolder; ?>" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Upload Folder</label>
												<input type="text" class="form-control" name="uploadFolder" value="<?= $uploadFolder; ?>" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="text-primary font-weight-bold">Livechat Support</label>
												<select class="form-control" name="chat_code">
													<option value="">Select</option>
													<option value="1" <?= $chat_yes; ?>>Yes</option>
													<option value="0" <?= $chat_no; ?>>No</option>
												</select>
											</div>
										</div>

										<hr>

										<div class="form-row">

											<div class="col-lg-5">
												<div class="col-md-12 mb-3">
													<label class="text-primary font-weight-bold">Livechat Code</label>
													<textarea class="form-control" name="crisp" rows="3"><?= $chatCode; ?></textarea>
													<small>Supported Chat Plugins: Tawkto, Jivo, Crisp, Tidio, Zendesk, Livechat</small>
												</div>
											</div>
											<div class="col-lg-7">
												<div class="form-group row">
													<div class="col-lg-4 mb-3">
														<label class="text-primary font-weight-bold">Wire Transfer Fee (%)</label>
														<input type="text" class="form-control" name="wire_fees" value="<?= $wire_fees; ?>" required>
													</div>
													<div class="col-lg-4 mb-3">
														<label class="text-primary font-weight-bold">Login Notification</label>
														<select class="form-control" name="login_notification">
													<option value="">Select</option>
													<option value="1" <?= $login_yes; ?>>Yes</option>
													<option value="0" <?= $login_no; ?>>No</option>
												</select>
													</div>
													<div class="col-lg-4 mb-3">
														<label class="text-primary font-weight-bold">Enable Wire Transfer OTP</label>
														<select class="form-control" name="transfer_otp">
													<option value="">Select</option>
													<option value="1" <?= $otp_yes; ?>>Yes</option>
													<option value="0" <?= $otp_no; ?>>No</option>
												</select>
													</div>
												</div>
											</div>
										</div>

									</div>

									<div class="card-footer">
										<div class="card-footer-content text-muted">
											<div class="form-actions float-right">
												<input name="update_settings" type="submit" class="btn btn-primary" value="Update Settings">
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>

						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">Logo</div>
								<div class="card-body">
									<img src="<?= $uploadFolder.'/'.$logo; ?>" height="80px"/>
									<hr>
									<form class="form-valide" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<input type="file" class="form-control" name="logo" required>
										</div>
										<div class="form-group float-right">
											<input name="update_logo" type="submit" class="btn btn-primary" value="Update">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">Site Icon</div>
								<div class="card-body">
									<img src="<?= $uploadFolder.'/'.$favicon; ?>" height="80px"/>
									<hr>
									<form class="form-valide" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<input type="file" class="form-control" name="logo" required>
										</div>
										<div class="form-group float-right">
											<input name="update_favicon" type="submit" class="btn btn-primary" value="Update">
										</div>
									</form>
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