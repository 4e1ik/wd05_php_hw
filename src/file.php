<?php
$fp = fopen(__DIR__.'/text.txt', 'r+');
fwrite($fp, '1531sdcvsdv23');
fwrite($fp, '1531sdcvsdv23');
fwrite($fp, '1531sdcvsdv23');
fwrite($fp, '1531sdcvsdv23');
$content = fread($fp, 1000000);
print_r($content);
fclose($fp);

echo "<br>";

$fp = fopen(__DIR__.'/text.txt', 'r+');
$content = fread($fp, 1000000);
print_r($content);
fclose($fp);


?>