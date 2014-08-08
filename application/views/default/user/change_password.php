
	<section class="colorBg4 colorBg dark" id="changepass" data-panel="fourth">
		<div class=" container">

			<div class="login-form-section">
				<div class="login-content  animated bounceIn" data-animation="bounceIn">
					<form id="change_password_form" action="<?=site_url("users/change_password")?>" method="post">
						<div class="section-title">
							<h3>Change Password</h3>
						</div>
						<div class="textbox-wrap">
							<div class="input-group focused">
								<span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
								<input name="email" type="email" class="form-control " placeholder="Email Id" value="@ece.ut.ac.ir" required="required">
							</div>
							<?=form_error('email','<li class="error">','</li>')?>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key key-color"></i></span>
								<input name="currpass" type="password" required="required" class="form-control" placeholder="Current Password">
							</div>
							<?=form_error('current_password','<li class="error">','</li>')?>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input name="new_password" type="password" required="required" class="form-control " placeholder="New Password">
							</div>
							<?=form_error('new_password','<li class="error">','</li>')?>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input name="confirm_new_password" type="password" required="required" class="form-control " placeholder="Confirm New Password">
							</div>
							<?=form_error('confirm_new_password','<li class="error">','</li>')?>
						</div>
						<div class="textbox-wrap">
							<img id="captcha_img" src="<?=site_url("captcha/" . $captcha_image)?>"/>
							<br>
							<br>
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input id="security_code" name="captcha" type="text" class="form-control " placeholder="Security Captcha" required="required">
							</div>
							<?=form_error('captcha','<li class="error">','</li>')?>
						</div>
						<input name="hash" id="captcha_hash" type="hidden" value="<?=$captcha_hash?>">
						<div class="login-form-action clearfix">
							<button type="submit" class="btn btn-success pull-right green-btn">Submit &nbsp; <i class="icon-chevron-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
