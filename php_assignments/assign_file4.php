<?php

$file=fopen("data2.txt","a") ;
if($file > 0)
{

  fputs($file, "Hello world", 15);



fclose($file);
}

echo "check file data2.txt, for data";
?>
