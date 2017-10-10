<?php
if(($file=fopen("data1.txt","r") ) > 0) {
while (!feof($file))
  {
  echo fgetc($file);
  }


fclose($file);
}

?>
