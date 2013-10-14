<?php

echo shell_exec("cat /etc/resolv.conf  | grep 'nameserver' | sed 's/nameserver/''/g'");
?>
