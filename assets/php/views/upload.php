<?php include("head.php"); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo $site["info"]["name"]; ?> <small>A best in class Patching server for COC emulator</small></h1>
	</section>
	
	<section class="content">
		<h2>Upload Patches</h2>
		<h3>Your Patching server: <?php echo $site["server"]["host"]."patch/".$_SESSION["username"]."/"; ?></h3> 
		<ul>
			<li><h4>Steps to upload patches</h4></li>
			<li><i class="fa fa-chevron-right"></i>Generate the patch</li>
			<li><i class="fa fa-chevron-right"></i>Zip up the patch (folder with unique numbers)</li>
			<li><i class="fa fa-chevron-right"></i>Upload it!</li>
			<li><i class="fa fa-chevron-right"></i>That's it, it get's uploaded. Happy hacking</li>
		</ul>
		
		<form action="assets/php/scripts/upload.php" method="post" enctype="multipart/form-data">
				<label for="file"></label><input type="file" name="fileToUpload" id="fileToUpload" /><br /><br />
				<input type="submit" value="Upload Patch" class="button">
		</form>
	</section>
</div>
<?php include("foot.php"); ?>
