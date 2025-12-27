<?php
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents("visitors.txt", $ip . "\n", FILE_APPEND);
?>
