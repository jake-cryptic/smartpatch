<!--Smart Patch is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Smart Patch is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Smart Patch.  If not, see <http://www.gnu.org/licenses/>.-->

<?php require("assets/init.php");  ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Smart Patch | V1.0</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Shits -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Finished -->
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Animate.css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
		<!-- SCRIPTS AND GRAPHICS -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
	
		<?php
			// Show different page depending on if user is logged in
			if(accountLoggedIn()) {
				if (!empty($_GET["p"])) {
					if ($_GET["p"] == "acc"){
						include("assets/php/views/account.php");
					} elseif ($_GET["p"] == "svr"){
						include("assets/php/views/servers.php");
					} elseif($_GET["p"] == "upl") {
						include("assets/php/views/upload.php");
					} elseif($_GET["p"] == "hlp") {
						include("assets/php/views/help.php");
					} elseif($_GET["p"] == "lgo") {
						 include("assets/php/scripts/logout.php");
					} elseif($_GET["p"] == "nfo") {
						include("assets/php/views/patchy.php");
					} else {
						include("assets/php/views/loggedIn.php");
					}
				} else {
					include("assets/php/views/loggedIn.php");
				}
			} else {
				include("assets/php/views/default.php");
			}
		?>

</body>
</html>
