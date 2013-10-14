<?php
function mountPoint($device){
	$mp = shell_exec("df  | awk '{print $1,$6}  ' |grep $device | cut -d\" \" -f2");
	
	return $mp;
}
$df = shell_exec("df  | awk '{print $1,$2,$3,$4,$5}  ' |grep /");
$array = preg_split('/(\r?\n)+/', $df);
   foreach($array as $line)
   {
   	if ($line != ""){
   		$line1 = preg_split('/[\s,]+/',$line);
		
		echo "Device/Partition: ".$line1['0']."\n";
      	echo "Total Space In Bytes: ".$line1['1']."\n";
		echo "Used Space in Bytes: ".$line1['2']."\n";
		echo "Free Space in Bytes: ".$line1['3']."\n";
		echo "Usage %: ".$line1['4']."\n";
		echo "Mount Point: ".mountPoint($line1['0']);
   }
   }

?> 
