<?php
require '../../init.php';
require '../main/db.php';

// Check if the user is logged in
if (accountLoggedIn()) {
	if (empty($_GET["patch"])) {
		// If nothing was sent return an error
		die("Error: Nothing was set");
	} else {
		// Get the current dir and find the patch
		$currentdir = getcwd();
		if ($usingLinux == false) {
			$delTarget = $currentdir . '\..\..\..\patch\\' . $_SESSION["username"] . '\\';
		} else {
			$delTarget = $currentdir . '/../../../patch/' . $_SESSION["username"] . '/';
		}
		
		// Wow I put a lot of trust in the $_SESSION global
		$_SESSION["delTarget"] = $delTarget;
		
		$safePatch = htmlspecialchars($_GET["patch"]);
		
		if (checkIfCanDel()) {
			if (deletePatch($safePatch)) {
				$_SESSION["usedPatchInt"] = $_SESSION["usedPatchInt"] - 1;
			
				$updatePatchCount = "UPDATE users SET usedPatches = usedPatches - 1 WHERE username='" . $_SESSION["username"] . "'";
				if ($conn->query($updatePatchCount)) {
					$conn->close();
					header("Location: $fullPathToRoot?p=svr&msg=1");
					die("Success!");
				} else {
					header("Location: $fullPathToRoot?p=svr&msg=2");
					die("Fail!");
				}
			} else {
				header("Location: $fullPathToRoot?p=svr&msg=2");
				die("Well.. That failed");
			}
		} else {
			die("You can't delete what isn't there" . $_SESSION["usedPatchInt"]);
		}
	}
} else {
	die("Error: You aren't logged in.");
}
?>