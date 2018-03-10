<?php
$filename=$_GET['filename'];
$filename="server/php/files/" . $filename;
$system_command = "cat \"" . $filename . "\" > /dev/usb/lp0";

system($system_command, $retval);
?>
