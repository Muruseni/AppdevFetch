<?php
$rmin = $_POST('min');
$rman = $_POST['max'];
$ruid = $_POST['user'];
$ip = $_SERVER['REMOTE_ADDR'];
echo "you rly rock.\n";


$now = date("Y-m-d H:i:s");
$record = $now .", " . $rmin . ", " . $rmax . ", " . $ruid . ", " . $ip . "\n";
$file = "record.txt";
if(file_exists($file)) $p = fopen($file, "a");
else $p = fopen($file, "w");
fwrite($p, $record);
fclose($p);
?>