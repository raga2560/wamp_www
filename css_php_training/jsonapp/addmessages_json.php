<?php

if( $_POST["name"] || $_POST["age"] )
  {
  
  
$filename = "messages.json";
   $data = file_get_contents($filename);
   
   $empldata = json_decode($data, true);
   $n1 = $_POST['name'];
   
   
   $empldata[$n1]['name'] = $n1;
   $empldata[$n1]['age'] =  $_POST['age'];
   $empldata[$n1]['message'] =  $_POST['message'];
	
   $outputjson = json_encode($empldata);
      file_put_contents('messages.json', $outputjson);
	  
     echo 0;
  }
  

  
?>