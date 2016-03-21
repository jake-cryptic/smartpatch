<?php include("head.php"); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Patch Control Panel</h1>
	</section>
		
	<?php
		if (!empty($_GET["msg"])) {
			if (is_numeric($_GET["msg"])) {
				$msg = trim($_GET["msg"]);
				switch ($msg){
					case 1:
						echo "<p class=\"lead\">Patch deletion successful";
						break;
					case 2:
						echo "<p class=\"lead\">Patch couldn't be deleted";
						break;
					default:
						echo "<p class=\"lead\">Something happened";
						break;
				}
				echo "</p><br /><br />";
			}
		}
	?>
	
		
	<?php
		if (makeServer($_SESSION["username"])) {
			echo '<br /><br /><p class="lead">Patch Server Now Active!</p>';
		} else {
			readPatchFolder("patch/".$_SESSION["username"]."/");
		}
	?>
	<br>
	<br>
	<button class="button" onclick="window.location.href='?p=upl';">Upload a Patch</button>
</div>
<?php include("foot.php"); ?>
