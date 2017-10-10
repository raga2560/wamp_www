<?php

$file=fopen("data1.txt","r") ;
if($file > 0)
{

	while(!feof($file)){
  echo fgets($file);
	}



fclose($file);
}

?>
