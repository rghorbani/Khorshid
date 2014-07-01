<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" style="" class=" js no-touch boxshadow textshadow cssanimations cssgradients csstransforms csstransforms3d csstransitions generatedcontent">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Khorshid - <?=($title)?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="<?=site_url("assets/css/preview.css")?>" rel="stylesheet">
	<link href="<?=site_url("assets/css/font-awesome.min.css")?>" rel="stylesheet">
	<script src="<?=site_url("assets/js/modernizr.js")?>"></script><style type="text/css"></style>
	<link href="<?=site_url("assets/css/css.css")?>" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="<?=site_url("assets/images/sun_ico.ico")?>" type="image/x-icon">
</head>
<body class="eternity-form scroll-animations-activated">
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
				<form>
					<div class="section-title reg-header  animated fadeInDown" data-animation="fadeInDown">
						<h3>Get your Account Here </h3>
					</div>
					<div class="clearfix">
						<div class="col-sm-6 registration-left-section   animated fadeInUp" data-animation="fadeInUp">
							<div class="reg-content">
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="first-name" type="text" class="form-control " placeholder="FirstName" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="last-name" type="text" class="form-control " placeholder="LastName" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input name="student-id" type="text" class="form-control " placeholder="Student ID" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input type="radio" value="PersonalHomePage" name="usage" class="form-control radio radio-inline">Personal Home Page
										<input type="radio" value="Programming" name="usage" class="form-control radio radio-inline">Programming
										<input type="radio" value="FTP" name="usage" class="form-control radio radio-inline">FTP
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
										<input type="radio" value="BS" name="level" class="form-control radio radio-inline">BS
										<input type="radio" value="MS" name="level" class="form-control radio radio-inline">MS
										<input type="radio" value="PHD" name="level" class="form-control radio radio-inline">PHD
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 registration-right-section  animated fadeInUp" data-animation="fadeInUp">
							<div class="reg-content">
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon"><i class="icon-envelope icon-color"></i></span>
										<select name="major" class="form-control form-group" required="required">
											<option value="null" class="">[Select your major]</option>
											<option value="InformationTechnology" class="">Information Technology</option>
											<option value="SoftwareEngineering" class="">Software Engineering</option>
											<option value="HardwareEngineering" class="">Hardware Engineering</option>
											<option value="ElctricalEngineering" class="">Electrical Engineering</option>
										</select>
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
										<input type="email" class="form-control " placeholder="Email Id" value="@ece.ut.ac.ir" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
										<input type="password" class="form-control " placeholder="Password" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
										<input type="password" class="form-control " placeholder="Confirm-Password" required="required">
									</div>
								</div>
								<div class="textbox-wrap">
									<img src="CaptchaSecurityImages.php" />
									<br>
									<br>
									<div class="input-group">
										<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
										<input id="security_code" name="security_code" type="text" class="form-control " placeholder="Security Captcha" required="required">
									</div>
								</div>
							</div>
						</div>
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
					<form>
						<div class="textbox-wrap">
							<div class="input-group focused">
								<span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
								<input name="email" type="email" class="form-control " placeholder="Email Id" value="@ece.ut.ac.ir" required="required">
							</div>
						</div>
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
					<form>
						<div class="section-title">
							<h3>Change Password</h3>
						</div>
						<div class="textbox-wrap">
							<div class="input-group focused">
								<span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
								<input name="email" type="email" class="form-control " placeholder="Email Id" value="@ece.ut.ac.ir" required="required">
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key key-color"></i></span>
								<input name="currpass" type="password" required="required" class="form-control" placeholder="Current Password">
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input name="newpass" type="password" required="required" class="form-control " placeholder="New Password">
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input name="connewpass" type="password" required="required" class="form-control " placeholder="Confirm New Password">
							</div>
						</div>
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
					<a href="index.html#demo3" class="green">Click Here</a>
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

	<script src="<?=site_url("assets/js/jquery-1.9.1.js")?>"></script>
	<script src="<?=site_url("assets/js/bootstrap.js")?>"></script>
	<script src="<?=site_url("assets/js/respond.src.js")?>"></script>
	<script src="<?=site_url("assets/js/jquery.icheck.js")?>"></script>
	<script src="<?=site_url("assets/js/placeholders.min.js")?>"></script>
	<script src="<?=site_url("assets/js/waypoints.min.js")?>"></script>
	<script src="<?=site_url("assets/js/jquery.panelSnap.js")?>"></script>

	<script type="text/javascript">
		$(function () {
			$("input").iCheck({
				checkboxClass: 'icheckbox_square-blue',
				increaseArea: '20%' // optional
			});
			$(".dark input").iCheck({
				checkboxClass: 'icheckbox_polaris',
				increaseArea: '20%' // optional
			});
			$(".form-control").focus(function () {
				$(this).closest(".textbox-wrap").addClass("focused");
			}).blur(function () {
				$(this).closest(".textbox-wrap").removeClass("focused");
			});

			//On Scroll Animations

			if ($(window).width() >= 968 && !Modernizr.touch && Modernizr.cssanimations) {

				$("body").addClass("scroll-animations-activated");
				$('[data-animation-delay]').each(function () {
					var animationDelay = $(this).data("animation-delay");
					$(this).css({
						"-webkit-animation-delay": animationDelay,
						"-moz-animation-delay": animationDelay,
						"-o-animation-delay": animationDelay,
						"-ms-animation-delay": animationDelay,
						"animation-delay": animationDelay
					});

				});
				$('[data-animation]').waypoint(function (direction) {
					if (direction == "down") {
						$(this).addClass("animated " + $(this).data("animation"));

					}
				}, {
					offset: '90%'
				}).waypoint(function (direction) {
					if (direction == "up") {
						$(this).removeClass("animated " + $(this).data("animation"));

					}
				}, {
					offset: $(window).height() + 1
				});
			}

			//End On Scroll Animations

			$(".main-nav a[href]").click(function () {
				var scrollElm = $(this).attr("href");

				$("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

				$(".main-nav a[href]").removeClass("active");
				$(this).addClass("active");
			});

			if ($(window).width() > 1000 && !Modernizr.touch) {
				var options = {
					$menu: ".main-nav",
					menuSelector: 'a',
					panelSelector: 'section',
					namespace: '.panelSnap',
					onSnapStart: function () { },
					onSnapFinish: function ($target) {
						$target.find('input:first').focus();
					},
					directionThreshold: 50,
					slideSpeed: 200
				};
				$('body').panelSnap(options);

			}

			$(".colorBg a[href]").click(function () {
				var scrollElm = $(this).attr("href");

				$("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

				return false;
			});

		});
	</script>

</body>
</html>