<link rel="stylesheet" type="text/css" href="<?php echo $site["custom"]["theme_location"]; ?>/home.css" media="screen" />
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<script type="text/javascript">window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};</script>
		<script type="text/javascript" src="assets/js/stopCookieAccess.js"></script>
		<script type="text/javascript">
			// Fallback to local copies if vital Libraries are unreachable
			if (!window.jQuery) { 
				console.log("{Error}: Loading jQuery failed, using local copy"); 
				document.write('<script src="assets/libs/jquery-2.1.4.min.js" type="text/javascript"><\/script>'); 
			} else {
				console.log("{Info}: jQuery loaded successfully :)");
				$(document).ready(function(){
					console.log("<?php echo("Smart Patch, working amazing. Hacking made impossible!!!!"); ?>");
				});
			}
		</script>
<link rel="stylesheet" type="text/css" href="<?php echo $site["custom"]["theme_location"]; ?>global.css" media="screen" />
		<style type="text/css">  body { background:url('<?php echo $site["custom"]["theme_location"]; ?>background.jpg') no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover; } </style>
		<link rel="apple-touch-icon" sizes="250x250" href="<?php echo $site["custom"]["appleicon_location"]; ?>">

<div id="main">

	<div id="titleBar">
		<h1 class="mainTitle"><?php echo $site["info"]["name"]; ?></h1>
		<h2 class="mainShortDesc"><?php echo $site["info"]["shortDesc"]; ?></h2>
	</div>
	
	<div id="loginMessage" class="hidden overlay-page">Logging You In...</div>
	<div id="createMessage" class="hidden overlay-page">Creating Your Account...</div>
	
	<div id="notificationArea">&nbsp;</div>
	
	<div id="createAccountSide">
		<span class="createTitle">Create an account</span>
		<form action="#" method="post" name="createForm" id="createForm">
			<input type="text" class="formElement" placeholder="Email" name="createEmail" id="createEmail" required /><br />
			<input type="text" class="formElement" placeholder="Username" name="createUsername" id="createUsername" required /><br />
			<input type="password" class="formElement" placeholder="Password" name="createPassword" id="createPassword" required /><br />
			<input type="submit" id="createButton" value="Create Account" class="button" />
		</form>
	</div>
	
	<div id="loginAccountSide">
		<span class="loginTitle">Already have an account?</span>
		<form action="#" method="post" name="loginForm" id="loginForm">
			<input type="text" class="formElement" placeholder="Username or Email" name="loginIdentity" id="loginIdentity" /><br />
			<input type="password" class="formElement" placeholder="Password" name="loginPassword" id="loginPassword" /><br />
			<input type="submit" id="loginButton" value="Login" class="button" />
		</form><br /><br />
		<button class="button-alt" onclick="alert('Password resets will be coming soon')">Password Reset</button>
	</div>
	
	<script type="text/javascript" src="assets/libs/hashes.min.js"></script>
	<script type="text/javascript" src="assets/js/homePageAjax.js"></script>
	
</div>