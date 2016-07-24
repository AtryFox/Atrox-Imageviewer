<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#202020">

<link href="page/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="page/css/main.min.css" rel="stylesheet" type="text/css">

<?php
if($theme != "") {
	echo '<link href="'. $theme. '" rel="stylesheet" type="text/css">';
}
?>

<link rel="icon" href="page/img/favicon.png" type="image/png" />

<title><?php echo $title." &ndash; ".str_replace("../", "", $file); ?></title>