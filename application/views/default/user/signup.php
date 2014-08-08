
	<section class="colorBg2 colorBg dark" id="register" data-panel="second">
		<div class=" container">
			<br>
			<br>
			<div class="registration-form-section">
				<form id="signup_form" action="<?=site_url("users/signup")?>" method="post">
					<div class="section-title reg-header  animated fadeInDown" data-animation="fadeInDown">
						<h3>Get your Account Here </h3>
					</div>
					<div class="clearfix">
						<div class="col-sm-6 registration-left-section   animated fadeInUp" data-animation="fadeInUp">
							<div class="reg-content">
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="first_name" type="text" class="form-control " placeholder="FirstName" required="required" value="<?=set_value('first_name'); ?>">
									</div>
									<?=form_error('first_name','<li class="error">','</li>')?>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="last_name" type="text" class="form-control " placeholder="LastName" required="required" value="<?=set_value('last_name'); ?>">
									</div>
									<?=form_error('last_name','<li class="error">','</li>')?>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="student_id" type="text" class="form-control " placeholder="Student ID" required="required" value="<?=set_value('student_id'); ?>">
									</div>
									<?=form_error('student_id','<li class="error">','</li>')?>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<select name="usage" class="form-control" required="required">
											<option value="null">[Select your usage]</option>
											<?php foreach($usages as $usage) { ?>
											<option value="<?=$usage->id ?>">&nbsp;<?=$usage->title ?>&nbsp;</option>
											<?php } ?>
										</select>
									</div>
									<?=form_error('usage','<li class="error">','</li>')?>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<select name="level" class="form-control" required="required">
											<option value="null">[Select your level]</option>
											<?php foreach($levels as $level) { ?>
											<option value="<?=$level->id ?>">&nbsp;<?=$level->title ?>&nbsp;</option>
											<?php } ?>
										</select>
									</div>
									<?=form_error('level','<li class="error">','</li>')?>
								</div>
								<br>
								<br>
							</div>
						</div>
						<div class="col-sm-6 registration-right-section  animated fadeInUp" data-animation="fadeInUp">
							<div class="reg-content">
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon"><i class="icon-envelope icon-color"></i></span>
										<select name="major" class="form-control" required="required">
											<option value="null">[Select your major]</option>
											<?php foreach($majors as $major) { ?>
											<option value="<?=$major->id ?>">&nbsp;<?=$major->title ?>&nbsp;</option>
											<?php } ?>
										</select>
										<?=form_error('major','<li class="error">','</li>')?>
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
										<input name="email" type="email" class="form-control " placeholder="Email Id" value="<?=set_value('email', '@ece.ut.ac.ir')?>" required="required">
									</div>
									<?=form_error('email','<li class="error">','</li>')?>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
										<input name="password" type="password" class="form-control " placeholder="Password" required="required">
									</div>
									<?=form_error('password','<li class="error">','</li>')?>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
										<input name="confirm_password" type="password" class="form-control " placeholder="Confirm-Password" required="required">
									</div>
									<?=form_error('confirm_password','<li class="error">','</li>')?>
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
							</div>
						</div>
						<input name="hash" id="captcha_hash" type="hidden" value="<?=$captcha_hash?>">
					</div>
					<div class="registration-form-action clearfix animated fadeInUp" data-animation="fadeInUp" data-animation-delay=".15s">
						<a href="#about" class="btn btn-success pull-left blue-btn"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back </a>
						<button type="submit" class="btn btn-success pull-right green-btn ">Register Now &nbsp; <i class="icon-chevron-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</section>
