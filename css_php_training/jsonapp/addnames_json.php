<?php

if( $_POST["name"] || $_POST["age"] )
  {
  
  
$filename = "employees.json";
   $data = file_get_contents($filename);
   
   $empldata = json_decode($data, true);
   $n1 = $_POST['name'];
   
   
   $empldata[$n1]['name'] = $n1;
   $empldata[$n1]['age'] =  $_POST['age'];
	
   $outputjson = json_encode($empldata);
      file_put_contents('employees.json', $outputjson);
	  
     
  }
  

  
?>