<?php
echo "etho IPv4 IP : ".shell_exec("
ifconfig eth0 | grep 'inet ' | sed 's/addr/ /g' | sed 's/        / /g' | sed 's/  / /g' | sed 's/:/ /g' | sed 's/  / /g' |cut -d' '  -f3
");


echo "etho IPv4 Broadcast : ".shell_exec("
ifconfig eth0 | grep 'broadcast ' | sed 's/addr/ /g' | sed 's/        / /g' | sed 's/  / /g' | sed 's/:/ /g' | sed 's/  / /g' |cut -d' '  -f7
").shell_exec("
ifconfig eth0 | grep 'Bcast' | sed 's/addr/ /g' | sed 's/        / /g' | sed 's/  / /g' | sed 's/:/ /g' | sed 's/  / /g' |cut -d' '  -f5
");


echo "etho IPv4 Subnet: ".shell_exec("
ifconfig eth0 | grep 'netmask ' | sed 's/addr/ /g' | sed 's/        / /g' | sed 's/  / /g' | sed 's/:/ /g' | sed 's/  / /g' |cut -d' '  -f5
").shell_exec("
ifconfig eth0 | grep 'Mask' | sed 's/addr/ /g' | sed 's/        / /g' | sed 's/  / /g' | sed 's/:/ /g' | sed 's/  / /g' |cut -d' '  -f7

"); 
?>
