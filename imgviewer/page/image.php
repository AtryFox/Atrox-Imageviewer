<?php
error_reporting(0);
if(isset($_GET["image"])){
	header("Content-Type: image/png");
	$file = $_GET["image"];
	echo file_get_contents($file);
}
?>