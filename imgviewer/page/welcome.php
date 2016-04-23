<h3>Setup successful!</h3>
<p>You can now start uploading images to <code><?php echo dirname( __DIR__) ?></code>.</p>
<p>If you want to configure AIv, just copy <code><i>...</i>/page/config_default.php</code> to <code><i>...</i>/page/config.php</code> and edit the variables.</p>
<br>
<p>Hint: This "welcome"-file will be deleted automatically.</p>
<br>

<?php unlink(__FILE__); ?>