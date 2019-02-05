<?php
$ip = $_SERVER["REMOTE_ADDR"];
$user = $_SERVER["REMOTE_USER"];
$time = date("H:i - j.n.Y");
$txt = "user: {$user} | ip: {$ip} | date: {$time} \n";

$myfile = fopen("visitor.log", "a+") or die("Could not open file");

fwrite($myfile, $txt);
fclose($myfile);
