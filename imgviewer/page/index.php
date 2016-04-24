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


include("config.php");
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

$current_img = explode("?", $pageURL)[0];
$current_url = explode("?", $pageURL)[0] . "." . $file_type;

?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include("head.php"); ?>
	</head>

	<body>
	<?php include("body.php"); ?>
	</body>
	</html>

<?php
if (file_exists("../.htaccess") && file_exists("welcome.php")) {
	unlink("welcome.php");
}
?>