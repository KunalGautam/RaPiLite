<?php
$temp = exec('cat /sys/class/thermal/thermal_zone0/temp');
$temp = $temp/1000;
echo $temp;
?>
