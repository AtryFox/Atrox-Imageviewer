<?php
error_reporting(0);

// DEFAULT SETTINGS
// PAGE TITLE //
$title = "Atrox Imageviewer";
// DATE FORMAT //
$dateformat = "d-m-Y H:i:s.";
// FORMAT WHITELIST
$format = array('png', 'bmp', 'jpg', 'jpeg', 'ico', 'gif');
// HEADER LINK //
$headerlink = "#";
// THEME LINK //
$theme = "";


include("config.php");

// MUSTACHE ENGINE

require 'assets/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$m = new Mustache_Engine(array(
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views/', array('extension' => '.html')),
	'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views/', array('extension' => '.html')),
));

$data = new stdClass();
$data->title = $title;
$data->headerlink = $headerlink;
$data->theme = $theme;

$available = true;
if (isset($_GET["image"])) $file = "../" . $_GET["image"];
else $available = false;

$file_type = "";

foreach ($format as &$value) {
	if (file_exists($file . "." . $value)) {
		$file .= "." . $value;
		$file_type = $value;
		break;
	}
}

if (!file_exists($file)) $available = false;

$data->available = $available;

$pageURL = 'http';
if ($_SERVER["HTTPS"] == "on") {
	$pageURL .= "s";
}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443") {
	$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
} else {
	$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
}

if ($_GET["image"] == "welcome" && file_exists("views/welcome.html")) {
	$data->show_welcome = true;
	$data->directory = dirname( __DIR__);
}

$data->pageURL = $pageURL;
$data->current_img = explode("?", $pageURL)[0];
$data->current_url = explode("?", $pageURL)[0] . "." . $file_type;
$data->file = $file;
$data->title_filename = str_replace("../", "", $file);
$data->last_modified = date($dateformat, filemtime($file));

echo $m->render("main", $data);

if (file_exists("../.htaccess") && file_exists("views/welcome.html")) {
	unlink("views/welcome.html");
}









