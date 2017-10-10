<?php
$filename = "data1.txt";
$fp = fopen($filename, "r") or die("Couldn't open $filename");
while(!feof($fp))
{ $line = fgets($fp);
echo "$line<br>";
}
fclose($fp);
?>