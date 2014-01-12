<?php
error_reporting(0);
if(isset($_GET["image"])){
	$file = $_GET["image"];
	if (file_exists($file)){
		$Datei = $file;
		$Dateiname = basename($Datei);
		$Größe = filesize($Datei);
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".$Dateiname);
		header("Content-Length: $Größe");
		readfile($Datei);
	}
}
?>