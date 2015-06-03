<?php
error_reporting(0);
include("config.php");
$available = true;
if(isset($_GET["image"])) $file = "../".$_GET["image"];
else $available = false;
if (!file_exists($file)) $available = false;
if(!$available) $file = "img/notfound.png";
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<?php include("head.php"); ?>
	</head>
	
	<body>
		<?php include("body.php"); ?>
	</body>
</html>
