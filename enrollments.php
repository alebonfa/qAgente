<?php
	ob_start();
	while (ob_get_status()) {
		ob_end_clean();
	}
	header('Location: index.php');
	exit();
	ob_end_flush();
?>
