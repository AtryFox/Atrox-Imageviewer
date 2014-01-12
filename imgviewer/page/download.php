<?php
error_reporting(0);
if(isset($_GET["image"])){
	$file = $_GET["image"];
	if (file_exists($file)){
		$filename = basename($file);
		$size = filesize($file);
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-Length: ".$size);
		readfile($file);
	}
}
?>