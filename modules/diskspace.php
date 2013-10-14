<?php
echo shell_exec("
df -h | awk '{if ($5==\"\"){flag =1;} else if (flag==1){flag=0;print $4,$5} else { print $5,$6 }}'| sed \"1d\"  
");

?>
