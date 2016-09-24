<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<?php
			if ($available) {
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Navigation umschalten</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
			}
			?>
			<a class="navbar-brand hidden-xs" href="<?php echo $headerlink ?>"><?php echo $title; ?></a>
			<a class="navbar-brand visible-xs" style="font-size: 15px;" href="<?php echo $headerlink ?>"><?php echo $title; ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php
				if ($available) {
					echo '<li><a href="' . $current_url . '">Image</a></li>';
					echo '<li><a href="#" data-toggle="modal" data-target="#embedImage">Embed</a></li>';
					echo '<li><a href="page/download.php?image=' . $file . '" type="application/octet-stream">Download</a></li>';
				}
				?>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<?php
	if (!$available) {
		if ($_GET["image"] == "welcome" && file_exists("welcome.php")) {
			include("welcome.php");
		} else {
			echo '<h3>404. Requested file not found.</h3><br>';
		}

		include("footer.php");
		exit;
	}
	?>
	<img src="<?php echo $current_url ?>" class="img-thumbnail img-responsive center-block" id="img">
	<p class="filetime">Last modified: <?php echo date($dateformat, filemtime($file)); ?></p>
	<?php include("footer.php"); ?>
</div>

<!-- EMBED IMAGE MODAL -->
<div class="modal fade" id="embedImage" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Embed image</h4>
			</div>
			<div class="modal-body">

				<h4>Options</h4>
				<div class="checkbox">
					<label>
						<input type="checkbox" id="includeLink" class="options"> include link to this
						page
					</label>
				</div>
				<br>
				<h4>HTML
					<small><a role="button" data-clipboard-target="#htmlCode" id="copyHtml">copy to clipboard</a></small>
				</h4>
				<pre id="htmlCode">&lt;img src="<?php echo $current_img ?>"&gt;</pre>
				<br>
				<h4>BBCode
					<small><a role="button" data-clipboard-target="#bbCode" id="copyBbcode">copy to clipboard</a></small>
				</h4>
				<pre id="bbCode">[img]<?php echo $current_img ?>[/img]</pre>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<!-- ALL THE JAVA SCRIPT FILES -->
<script src="page/js/jquery.min.js"></script>
<script src="page/js/bootstrap.min.js"></script>
<script src="page/js/clipboard.min.js"></script>
<script src="page/js/main.min.js"></script>
