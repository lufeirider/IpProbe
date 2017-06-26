<?php

$ip = $_GET['ip'];

$fh = fopen('code.txt', 'a+');

fwrite($fh, $ip."\n");

fclose($fh);

?>
