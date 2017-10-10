<?php

$file=fopen("data2.txt","w+") ;
if($file > 0)
{

  fputs($file, "Hello world", 10);



fclose($file);
}

echo "check file data2.txt, for data";

?>
