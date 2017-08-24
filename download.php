<?php
	$directory = "./updir/";
	$filename = $_GET['filename'];
	$real_file = $directory.$filename;
	header('Content-Type:application/x-octetstream');
	header('Content-Length:'.filesize($filename));
	header('Content-Disposition: attachment; filename='.$real_file);
	header('Content-Transfer-Encoding: binary');
	$fp = fopen($real_file, "r");
	fpassthru($fp);
	fclose($fp);
?>
