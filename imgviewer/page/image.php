<?php
error_reporting(0);
include 'config.php';
if(isset($_GET["image"])){
	header("Content-Type: image/$file_type");
	$file = $_GET["image"];
	echo file_get_contents($file);
}
?>