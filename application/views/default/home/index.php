
	<nav class="main-nav">
		<ul>
			<li><a href="#about" data-title="About" data-panel="first" class="active"></a></li>
			<li><a href="#register" data-title="Registration Form" data-panel="second" class=""></a></li>
			<li><a href="#forgetpass" data-title="Forgot Password" data-panel="third" class=""></a></li>
			<li><a href="#changepass" data-title="Change Password" data-panel="fourth" class=""></a></li>
			<li><a href="#guidelines" data-title="Guidelines &amp; Contact Us" data-panel="fifth" class=""></a></li>
			<li><a href="#supporters" data-title="Supporters" data-panel="sixth" class=""></a></li>
		</ul>
	</nav>

	<!-- style="background-color: black;" -->
	<section class="colorBg1 colorBg dark form-seprator" id="about" data-panel="first" >

		<i class="icon-sun animated bounceInUp" data-animation="bounceInUp" style="color:yellow"></i>
		<h1 data-animation="bounceInUp" data-animation-delay=".2s" class="animated bounceInUp">Khorshid</h1>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<hgroup class="col-md-6">
				<h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp">The objective of the Khorshid(Sun) Server project at University Of Tehran is creating an archive of students homepages and providing internal linux accounts for them.You can access all the pages on this server through links listed on this page.</h4>
				<h3 data-animation="fadeInUp" data-animation-delay=".4s" class="animated fadeInUp"><a href="#register">Registraion</a></h3>
				<h3 data-animation="fadeInUp" data-animation-delay=".5s" class="animated fadeInUp"><a href="#forgotpass">Forgot Password</a></h3>
				<h3 data-animation="fadeInUp" data-animation-delay=".6s" class="animated fadeInUp"><a href="#changepass">Change Password</a></h3>
				<h3 data-animation="fadeInUp" data-animation-delay=".7s" class="animated fadeInUp"><a href="#guidelines">Guidelines</a></h3>
				<h3 data-animation="fadeInUp" data-animation-delay=".8s" class="animated fadeInUp"><a href="#supporters">Supporters</a></h3>
			</hgroup>
		</div>

	</section>

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
										<input name="first_name" type="text" class="form-control " placeholder="FirstName" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="last_name" type="text" class="form-control " placeholder="LastName" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="student_id" type="text" class="form-control " placeholder="Student ID" required="required">
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
										<input name="email" type="email" class="form-control " placeholder="Email Id" value="<?=set_value('username', '@ece.ut.ac.ir')?>" required="required">
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
						<a href="index.html#demo1" class="btn btn-success pull-left blue-btn"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back </a>
						<button type="submit" class="btn btn-success pull-right green-btn ">Register Now &nbsp; <i class="icon-chevron-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</section>

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
							<a href="index.html#demo2" class="btn btn-success pull-left blue-btn"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back  </a>
							<button type="submit" class="btn btn-success pull-right green-btn">Submit &nbsp;&nbsp; <i class="icon-chevron-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

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
							<?=form_error('password','<li class="error">','</li>')?>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input name="confirm_password" type="password" required="required" class="form-control " placeholder="Confirm New Password">
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
							<a href="index.html#demo3" class="btn btn-success pull-left blue-btn"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back  </a>
							<button type="submit" class="btn btn-success pull-right green-btn">Submit &nbsp; <i class="icon-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<!--
				<div class="login-form-links link1  animated fadeInRightBig" data-animation="fadeInRightBig" data-animation-delay=".2s" style="-webkit-animation: 0.2s;">
					<h4 class="blue">Don't have an Account?</h4>
					<span>No worry</span>
					<a href="index.html#demo2" class="blue">Click Here</a>
					<span>to Register</span>
				</div>
				-->
				<div class="login-form-links link2  animated fadeInLeftBig" data-animation="fadeInLeftBig" data-animation-delay=".4s" >
					<h4 class="green">Forget your Password?</h4>
					<span>Dont worry</span>
					<a href="#changepass" class="green">Click Here</a>
					<span>to Get New One</span>
				</div>
			</div>
		</div>
	</section>

	<section class="colorBg form-seprator" id="guidelines" data-panel="fifth">

        <br>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<h1 data-animation="bounceInUp" data-animation-delay=".2s" class="animated bounceInUp">Guidelines</h1>
        		<br>
        		<div data-animation="bounceInUp" data-animation-delay=".3s" class="animated bounceInUp">
        		<h3>
				How to manage your personal homepage :
				</h3>
				<blockquote>
				Your personal webdocuments are stored on the server on your account in a
				directory called <b>public_html</b>. The first page called <b>index.html (default)</b>.
				<p><font size="3">
				To edit pages, you can use a text editor to write &quot;raw&quot; HTML code, or make use of an HTML editor such as
						Macromedia Dreamweaver (commercial), though other free HTML editors are available (Google is your friend).
				</font></p>
				<p><font size="3">
				If you have created your webdocuments on a PC or Mac, you will have to
				<i>publish</i> (<i>upload</i>) them to the server to make them available
				online. You can do so with an <a target="_blank" href="http://en.wikipedia.org/wiki/Comparison_of_FTP_client_software">FTP program</a>,
				or use the build-in options that are available in your HTML editor.
				</font></p>
				<p><font size="3">
				** Note: FTP is only accessible inside the university via its addresses.
				</font></p>
				</blockquote>
				<h3>
				What kind of documents can I store on the server ?
				</h3>
				<blockquote>
				All basic web-documents can be stored on the server, such as HTML and PHP
				documents, image files (GIF, JPEG) and downloadable documents such as PDF
				files, Word or Excel documents and the like. You can also include Javascript
				in your documents if you like.
				<p><font size="3">
				However, CGI-scripts in whatever form (perl, shell, programs, ...) and ASP
				aren't available on the server.
				</font></p>
				</blockquote>
				<h3>
				About your personal homepage :
				</h3>
				<blockquote>
				You are of course free to change your personal home-page to suit your individual
				taste and needs. However, we remind you that you are using a central facility,
					restricted to academic education and research. Your home-page should therefore
				pertain to yourself and your activities only as a member (student or staff)
					of the Electrical and Computer Engineering at University of Tehran.
				</blockquote>
				<br>
				<h4>If you have any problem with your account you can contact us by this e-mail: <a href="mailto:khorshid@ece.ut.ac.ir">Khorshid@ece.ut.ac.ir</a></h4>
        		</div>
        	</div>
        </div>

    </section>

    <section class="colorBg form-seprator" id="supporters" data-panel="sixth">

        <i class="icon-user animated bounceInUp" data-animation="bounceInUp"></i>
        <h1 data-animation="bounceInUp" data-animation-delay=".2s" class="animated bounceInUp">Supporters</h1>
        <hgroup>
        	<h3 data-animation="bounceInUp" data-animation-delay=".2s" class="animated bounceInUp">Administrators:</h3>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://www.rghorbani.ir">Reza Ghorbani Farid: Spring 2013 - Now</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://khorshid.ut.ac.ir/~a.khatibi">Ali Khatibi: Fall 2009 - Spring 2013</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://khorshid.ut.ac.ir/~k.alizadeh">Kyoomars Alizadeh: Fall 2009 - Spring 2011</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://ali.ghaffaari.net">Ali Ghaffaari: Winter 2007 - Fall 2009</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://ebrahim.ir">Ebrahim Mohammadi</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp">Ali Shirvani</h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://www.cs.mcgill.ca/~mmilan1/">Mahdi Milani Fard: Fall 2004 - Fall 2006</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://ce.sharif.edu/~keramati/">Hossein Keramati: Fall 2002 - Fall 2004</a></h4>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://mason.gmu.edu/~nesfaha2/">Naeem Esfahani: Fall 2002 - Fall 2004</a></h4>
            <h3 data-animation="bounceInUp" data-animation-delay=".2s" class="animated bounceInUp">Designers:</h3>
            <h4 data-animation="fadeInUp" data-animation-delay=".3s" class="animated fadeInUp"><a target="_blank" href="http://www.rghorbani.ir">Reza Ghorbani Farid: New Design</a></h4>
        </hgroup>

    </section>
