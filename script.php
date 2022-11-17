<?php 
$filename = 'myfile.txt';
$out = file_get_contents($filename,true);
echo ($out);
exit();
?>