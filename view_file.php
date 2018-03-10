<?php
$filename=$_GET['filename'];
$filename="server/php/files/" . $filename;
echo "<pre>";
$myfile = fopen($filename, "r") or die("Unable to open file!");
echo fread($myfile,filesize($filename));
echo "</pre>";
fclose($myfile);
?>
