<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<?php 
			if ($available) {
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Navigation umschalten</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
			}
			?>
			<a class="navbar-brand hidden-xs" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"><?php echo $title; ?></a> <a class="navbar-brand visible-xs" style="font-size: 15px;" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"><?php echo $title; ?></a> </div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php
					if ($available) {
						echo '<li><a href="'.$file.'">Image</a></li>';
						echo '<li><a href="page/download.php?image=<?php echo $file; ?>" type="application/octet-stream">Download</a></li>';
					}
				?>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<?php 
		if(!$available) {
			echo '<img src="page/image.php?image='.$file.'" class="center-block" style="max-width: 100%">';
			include("footer.php");
			exit;	
		}
	?>
	<img src="page/image.php?image=<?php echo $file; ?>" class="img-thumbnail center-block">
	<p style="text-align: center; padding-top: 5px; font-size:11px;">Last modified: <?php echo date("F d Y H:i:s.", filemtime($file)); ?></p>
	<?php include("footer.php"); ?>
</div>