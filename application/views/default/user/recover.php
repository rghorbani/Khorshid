
	<section class="colorBg3 colorBg dark active" id="forgotpass" data-panel="third">
		<div class=" container">
			<br>
			<br>
			<br>

			<div class="forgot-password-section animated bounceInLeft" data-animation="bounceInLeft">
				<div class="section-title">
					<h3>Forget Password</h3>
				</div>
				<div class="forgot-content">
					<form id="forgot_password_form" action="<?=site_url("users/recover")?>" method="post">
						<div class="textbox-wrap">
							<div class="input-group focused">
								<span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
								<input name="email" type="email" class="form-control " placeholder="Email Id" value="@ece.ut.ac.ir" required="required">
							</div>
							<?=form_error('email','<li class="error">','</li>')?>
						</div>
						<div class="textbox-wrap">
							<img id="captcha_img" src="<?=site_url("captcha/" . $captcha_image)?>"/>
							<br>
							<br>
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input id="security_code" name="captcha" type="text" class="form-control " placeholder="Security Captcha" required="required">
							</div>
							<?=form_error('captcha','<div class="error">','</div>')?>
						</div>
						<input name="hash" id="captcha_hash" type="hidden" value="<?=$captcha_hash?>">
						<div class="forget-form-action clearfix">
							<button type="submit" class="btn btn-success pull-right green-btn">Submit &nbsp;&nbsp; <i class="icon-chevron-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
