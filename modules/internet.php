<?php
echo shell_exec('
((ping -w5 -c3 8.8.8.8 || ping -w5 -c3 4.2.2.1) > /dev/null 2>&1) && echo "Connected" || (echo "Disconnected" && exit 1)
');
?>
