<?php
$output = shell_exec('cat /proc/loadavg');
$loadavg = substr($output,0,strpos($output," "));

echo $loadavg;
?>
