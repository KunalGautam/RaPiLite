<?php
echo "Total Memory: ".shell_exec("
cat /proc/meminfo | grep MemTotal | sed 's/ //g' |sed 's/MemTotal://g'
");

echo "<br>";

echo "Free Memory: ".shell_exec("
cat /proc/meminfo | grep MemFree | sed 's/ //g' |sed 's/MemFree://g'
");


?>
