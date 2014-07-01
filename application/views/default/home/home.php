<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>University of Tehran: Personal Home Page Web Server</title>
	<meta name="keywords" content="Khorshid,UT,university,university of tehran,computer,engineering" />
	<meta name="description" content="Khorshid's Homepage" />
	<link rel="stylesheet" href="<?=site_url("assets/style/style.css")?>" type="text/css" />
	<link rel="stylesheet" href="<?=site_url("assets/scripts/slimbox/slimbox.css")?>" type="text/css" />
	<script type="text/javascript" src="<?=site_url("assets/scripts/mootools.js")?>"></script>
	<script type="text/javascript" src="<?=site_url("assets/scripts/accordion.js")?>"></script>
	<script type="text/javascript" src="<?=site_url("assets/scripts/thumblight.js")?>"></script>
	<script type="text/javascript" src="<?=site_url("assets/scripts/slimbox/slimbox.js")?>"></script>
<link rel="shortcut icon" href="/images/sun_ico.ico" type="image/x-icon" />
</head>
<script type="text/javascript">

document.getElementById('security_code').innerHTML == "";

function Validate2()
{
	if ( document.Forgot.email.value == "" )
	{
		alert ("Please fill email feild by your @ece.ut.ac.ir email");
		return false;
	}
	else
	{
		var regexp = new RegExp("(.*)@(.*)");
		var regexpRes = regexp.exec(document.Forgot.email.value);
		if (regexpRes[1] == "")
		{
			alert ("Please fill email feild");
			return false;
		}
		if (regexpRes[2] != 'ece.ut.ac.ir')
		{
			alert("You must enter your @ece.ut.ac.ir email address!\nFor example: k.alizadeh@ece.ut.ac.ir");
			return false;
		}
	}
}
function Validate3()
{
	if ( document.Change.email.value == "" )
	{
		alert ("Please fill email feild by your @ece.ut.ac.ir email");
		return false;
	}
	else
	{
		var regexp = new RegExp("(.*)@(.*)");
		var regexpRes = regexp.exec(document.Change.email.value);
		if (regexpRes[1] == "")
		{
			alert ("Please fill email feild");
			return false;
		}
		if (regexpRes[2] != 'ece.ut.ac.ir')
		{
			alert("You must enter your @ece.ut.ac.ir email address!\nFor example: k.alizadeh@ece.ut.ac.ir");
			return false;
		}
		
		if ( document.Change.pswdold.value == "")
		{
			alert ("Please fill Current Password feild");
			return false;
		}
	
		if ( document.Change.pswdold.value.length < 4)
		{
			alert ("Wrong Password!");
			return false;
		}
		
		if ( (document.Change.pswd.value) != (document.Change.pswd1.value))
		{
			alert("Password does not match the password verification field");
			return false;
		}
		
		if ( document.Change.pswd.value == "" || document.Change.pswd1.value == "" )
		{
			alert ("Please fill Password and Confirm Password feilds");
			//pswd.focus();
			return false;
		}
		
		if ( document.Change.pswd.value.length < 4 || document.Change.pswd1.value.length < 4 )
		{
			alert("Your password is not secure");
			return false;
		}
	}
}
function Validate()
{
	if ( String.substr(document.SignupData.id.value, 0, 4) != "8101" || document.SignupData.id.value.length != 9)
	{
		alert("Please fill ID feild correctly");
		//	id.focus();
		return false;
	}
	if ( document.SignupData.firstName.value == "" || document.SignupData.lastName.value == "" )
	{
		alert ("Please fill firstName and lastName feilds");
		//	firstName.focus();
		return false;
	}

	if ( document.SignupData.firstName.value.lenght < 3 || document.SignupData.lastName.value.length < 3 )
	{
		alert ("Please fill firstName and lastName feilds correctly");
		return false;
	}

	if ( document.SignupData.pswd.value == "" || document.SignupData.pswd1.value == "" )
	{
		alert ("Please fill Password and Confirm Password feilds");
		//pswd.focus();
		return false;
	}

	if ( (document.SignupData.pswd.value) != (document.SignupData.pswd1.value))
	{
		alert("Password does not match the password verification field");
		return false;
	}

	if ( document.SignupData.pswd.value.length < 4 || document.SignupData.pswd1.value.length < 4 )
	{
		alert("Your password is not secure");
		return false;
	}

	if ( document.SignupData.email.value == "" )
	{
		alert ("Please fill email feild by your @ece.ut.ac.ir email");
		//	email.focus();
		return false;
	}
	else
	{
		var regexp = new RegExp("(.*)@(.*)");
		var regexpRes = regexp.exec(document.SignupData.email.value);
		if (regexpRes[1] == "")
		{
			alert ("Please fill email feild");
			return false;
		}
		if (regexpRes[2] != 'ece.ut.ac.ir')
		{
			alert("You must enter your @ece.ut.ac.ir email address!\nFor example: m.mohammadi@ece.ut.ac.ir");
			//	email.focus();
			return false;
		}
	}

	if ( document.SignupData.major.selectedIndex == 0 )
	{
		alert("Please select your major");
		return false;
	}

	var err = true;
	for ( i = 0; i < document.SignupData.level.length; i++)
	{
		if ( document.SignupData.level[i].checked )
		{
			err = false;
			break;
		}
	}

	if (err) {
		alert ('Please identify your level');
		return false;
	}


	err = true;
	for ( i = 0; i < document.SignupData.usage.length; i++)
	{
		if ( document.SignupData.usage[i].checked )
		{
			err = false;
			break;
		}
	}

	if (err) {
		alert('Please identify your usage');
		return false;
	}

}
function ValidateForgot()
{
	if ( document.SignupData.email.value == "" )
	{
		alert ("Please fill email feild by your @ece.ut.ac.ir email");
		email.focus();
		return false;
	}
	else
	{
		var regexp = new RegExp("(.*)@(.*)");
		var regexpRes = regexp.exec(document.SignupData.email.value);
		if (regexpRes[1] == "")
		{
			alert ("Please fill email feild");
			return false;
		}
		if (regexpRes[2] != 'ece.ut.ac.ir')
		{
			alert("You must enter your @ece.ut.ac.ir email address!\nFor example: k.alizadeh@ece.ut.ac.ir");
			email.focus();
			return false;
		}
	}
}
function change()
{
	document.image1.src = "<?=site_url("assets/images/About2.png")?>";
}
function change2()
{
	document.image1.src = "<?=site_url("assets/images/About.png")?>";
}
</script>
<body>
	<div id="fullpage" align="center">
	<div id="fullheight">
	<div id="accordion">

	<h3 class="toggler" style="height:55px;float:left;padding:0;margin:0;border:none;"><img src="<?=site_url("assets/images/img_logo4.png")?>" style="margin:0;padding:0;text-indent:0;" /></h3>


	<div class="element" style="clear:both;"><img src="<?=site_url("assets/images/img.gif")?>" width="770" height="233" /></div>

	<h3 class="toggler" style="margin-top:20px;">About</h3>
	<div class="element">
	<div class="content" style="width:770px;float:left;padding-right:20px;">
	<p><font size="2">The objective of the <font color=#ffea00 >Khorshid(Sun)</font> Server  project at University Of Tehran is creating an archive of students homepages and providing internal linux accounts for them.You can access all the pages on this server through links listed on this page.</font> </p>
	<img id="image1" name = "image1" src="<?=site_url("assets/images/About.png")?>" style="margin:0;padding:0;text-indent:0;" onMouseOver="change()" onMouseout="change2()" />			
	</div>
	<p>&nbsp;</p> <!-- spacer -->
	</div>

	<h3 class="toggler">Sign Up</h3>
	<div class="element">
	<div class="content" style="width:800px;float:left;padding-right:20px;">
	<form name="SignupData" id="SignupData" method="POST" action="Signup.php" onSubmit="return Validate()">
	<input type="hidden" name="username" id="username">
	<br>
	<table align ="right" style="border: 0px; cellpadding: 0px; cellspacing: 5px; border-collapse: collapse; bordercolor:#111111; width: 770px;">
	<tr>
	<td class="LeftCol"><font size="2">First Name &nbsp;</font></td>
	<td><input type="text" name="firstName" id="firstName" size="23" value=""></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">Last Name &nbsp;</font></td>
	<td><input type="text" name="lastName" id="lastName" size="23"></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">Student ID &nbsp;</font></td>
	<td><input type="text" name="id" id="id" size="23" value="8101"></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">Password &nbsp;</font></td>
	<td><input type="password" name="pswd" id="pswd" size="23"><font color=#099 size="2">	*At least 4 charachters</font></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">confirm Password &nbsp;</font></td>
	<td><input type="password" name="pswd1" id="pswd1" size="23"></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">Email Address &nbsp;</font></td>
	<td><input type="text" name="email" id="email" size="23" value="@ece.ut.ac.ir"><font color=#099 size="2">   * This must be your Shahab (ECE) mail address</font></td>
	</tr>

	<tr>
	<td class="LeftCol"><font size="2">Major</font></td>
	<td>
	<select name="major" id="major" size="1">
	<option value="null">[Select your major]
	<option value="SoftwareEngineering">Software Engineering
	<option value="HardwareEngineering">Hardware Engineering
	<option value="ElctricalEngineering">Electrical Engineering	
	<option value="InformationTechnology">Information Technology	
	</td>
	</tr>

	<tr>
	<td class="LeftCol"><font size="2">Level</font></td>
	<td width="78%" height="21">
	<input type="radio" value="BS" name="level" id="level"><font size="2">BS&nbsp;</font>
	<input type="radio" value="MS" name="level" id="level"><font size="2">MSc&nbsp;</font>
	<input type="radio" value="PHD" name="level" id="level"><font size="2">PHD</font>
	</td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">Your usage?</font></td>
	<td>
	<input type="radio" value="Programming" name="usage" id="usage"><font size="2">Programming&nbsp;</font>
	<input type="radio" value="FTP" name="usage" id="usage"><font size="2">FTP&nbsp;</font>
	<input type="radio" value="PersonalHomePage" name="usage" id="usage"><font size="2">Personal Home Page&nbsp;</font>
	</td>
	</tr>
	<tr>
	<td>
	</td>
	<td>
	<br></br>
	Security Code:
	<br></br>
	<img src="<?=site_url("home/captcha")?>" /><br></br>
	<label for='message'>Enter the code above here :</label><br>
	<input id="security_code" name="security_code" type="text" size="23">
	</td>
	</tr>
	<tr>
	<td>
	</td>
	<td>
	<p><input type="submit" value="Submit"><input type="reset" value="Reset"></p>
	</td>
	</tr>
	</table>
	</div>
	</br>
	</form>
	</div>
	</div>   

	<h3 class="toggler">Renew Password</h3>

	<div class="element">

	<ul>
	<form name="Forgot" id="Forgot" method="POST" action="Forgot.php" onsubmit="return Validate2()">
	<p><font size="2">Your E-Mail: 
	<input type="text" name="email" id="email" size="30" value="@ece.ut.ac.ir">	
	<font color=#099>* This must be your Shahab (ECE) mail address&nbsp;</font>  <input type="submit" id="submit" value="Renew"></font></p>
	</form>
	</ul>
	</div>

	<h3 class="toggler">Change Password</h3>
	<div class="element">
	<ul>
	<form name="Change" id="Change" method="POST" action="Change.php" onSubmit="return Validate3()">
	<br>
	<table align ="right" style="border: 0px; cellpadding: 0px; cellspacing: 5px; border-collapse: collapse; bordercolor:#111111; width: 770px;">
	<td class="LeftCol"><font size="2">Your E-Mail: </font></td>
	<td><input type="text" name="email" id="email" size="30" value="@ece.ut.ac.ir">
	<font color=#099 size="2">* This must be your Shahab (ECE) mail address&nbsp;</font><td>
	<tr>
	<td class="LeftCol"><font size="2">Current Password &nbsp;</font></td>
	<td><input type="password" name="pswdold" id="pswdold" size="30"><font color=#099 size="2"></font></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">New Password &nbsp;</font></td>
	<td><input type="password" name="pswd" id="pswd" size="30"><font color=#099 size="2"> *At least 4 charachters</font></td>
	</tr>
	<tr>
	<td class="LeftCol"><font size="2">Confirm New Password &nbsp;</font></td>
	<td><input type="password" name="pswd1" id="pswd1" size="30"><font color=#099 size="2"></font></td>
	</tr>
	<tr>
	<td>
	</td>
	<td>
	<p><input type="submit" id="submit" value="Change"></p>
	</td>
	</tr>
	</table>
	</form>
	</ul>
	</div>

	<h3 class="toggler">Links</h3>
	<div class="element">
	<ul>
	<font size="3">
	<p><a target="_blank" href="http://ut.ac.ir">University Of Tehran </a></p>
	</ul>
	<ul>
	<p> <a target="_blank" href="http://ece.ut.ac.ir/">School of Electrical and Computer Engineering | University of Tehran </a></p>
	</ul>
	<ul>
	<p> <a target="_blank" href="http://ece.ut.ac.ir:8888/">University of Tehran Computer Engineering Course Management (CECM)</a></p>
	</ul>
	<ul>
	<p> <a target="_blank" href="http://ece.ut.ac.ir/ececc/">University of Tehran Computer Center</a></p>
	</ul>
	<ul>
	<p> <a target="_blank" href="http://acm.ut.ac.ir/">University of Tehran ACM Chapter.</a></p>
	</ul>
	<ul>
	<p> <a target="_blank" href="http://khorshid.ut.ac.ir/">University of Tehran Personal Home Page Web Server</a></p>
	</ul>
	</font>
	</div>

	<h3 class="toggler">Guidelines</h3>
	<div class="element">
	<ul>
	<h3>
	How to manage your personal homepage :
	</h3>
	<blockquote>
	Your personal webdocuments are stored on the server on your account in a
	directory called <b>public_html</b>. The first page called <b>index.html (default)</b>.
	<p><font size="3">
	To edit pages, you can use a text editor to write &quot;raw&quot; HTML code, or make use of an HTML editor (such as
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
	</ul>
	</div>

	<h3 class="toggler">Homepages</h3>
	<div class="element">
	<table width="300" align="left">
	<?php
		$cnt=0;
		for($i=0;$i<count($users);$i++) {
			if($cnt%5==0) {
				echo "</tr>";
				echo "<tr>";
				$cnt=0;
			}
			echo "<td width=\"60\">";
			echo "<ul>";
			echo "<font size=\"5\"><p><a target=\"_blank\" href=\"http://khorshid.ut.ac.ir/~";
			echo $users[$i]->username;
			echo "\">";
			echo $users[$i]->username;
			echo "</a></p></font>";
			echo "</ul>";
			echo "</td>";
			$cnt++;
		}
	?>
	</table>
	</div>

	<h3 class="toggler">Supporters</h3>
	<div class="element">
	<ul>
	<H4>
	<b>Administrators:</b>
	</H4>
	<ul>
	<font size="4">
	<p> <a target="_blank" href="http://www.rghorbani.ir">Reza Ghorbani Farid: Spring 2013 - Now</a></p>
	<p> <a target="_blank" href="http://khorshid.ut.ac.ir/~k.alizadeh">Kyoomars Alizadeh: Fall 2009 - Now</a></p>
	<p> <a target="_blank" href="http://khorshid.ut.ac.ir/~a.khatibi">Ali Khatibi: Fall 2009 - Now</a></p>
	<p> <a target="_blank" href="http://ali.ghaffaari.net/">Ali Ghaffaari: Winter 2007 - Fall 2009</a></p>
	<p> <a target="_blank" href="http://ebrahim.ir/">Ebrahim Mohammadi</a></p>
	<p> Ali Shirvaani</p>
	<p> HamidReza As'asdi</p>
	<p> <a target="_blank" href="http://www.cs.mcgill.ca/~mmilan1/">Mahdi Milani Fard: Fall 2004 - Fall 2006</a></p>
	<p> <a target="_blank" href="http://ce.sharif.edu/~keramati/">Hossein Keramati: Fall 2002 - Fall 2004</a></p>
	<p> <a target="_blank" href="http://mason.gmu.edu/~nesfaha2/">Naeem Esfahani: Fall 2002 - Fall 2004</a></p>
	</font>
	</ul>
	<H4>
	<b>Website Design:</b>
	</H4>
	<ul>
	<font size="4">
	<p>	<a target="_blank" href="http://aria.barfar.com"> Aria Barfar</a></p>
	</font>
	</ul>
	</ul>
	</div>

	<h3 class="toggler">Contact Us</h3>
	<div class="element">
	<ul>
	<p><font size="2">If you have any problem with your account you can contact us by this e-mail:  <a href="mailto:khorshid@ece.ut.ac.ir">Khorshid[at]ece[dot]ut[dot]ac[dot]ir</a></font></p>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div> 
</body>
</html>