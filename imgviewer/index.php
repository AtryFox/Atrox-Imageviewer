<?php
// CREATE .htaccess IF NOT EXISTING

if (!file_exists(".htaccess")) {
	$url = $_SERVER['REQUEST_URI']; 
	$parts = explode('/', $url);
	$dir = "";
	for ($i = 0; $i < count($parts) - 1; $i++) {
		$dir .= $parts[$i] . "/";
	}


	$htaccess = "RewriteEngine On
RewriteBase                         " . $dir . "page
RewriteCond %{REQUEST_FILENAME}     !-f
RewriteCond %{REQUEST_FILENAME}     !-d
RewriteRule (.*)                    index.php?image=$1 [QSA,L]";

	$fp = fopen('.htaccess', 'w');
	fputs($fp, $htaccess);
	fclose($fp);

	header("Location: welcome");
} else {
	header("Location: home");
}

