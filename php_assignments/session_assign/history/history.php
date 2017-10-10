<?php
session_start(); 


if (!isset($_SESSION['count']))
   $_SESSION['count'] = 0;
else  $_SESSION['count']++; 

$count = $_SESSION['count'];
$cur_add= "http://".$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];

//if (!isset($_SESSION['history']))
//   $_SESSION['history'][$count] = $cur_add ;
//else  
   $_SESSION['history'][$count] = $cur_add ;




$max = count($_SESSION['history']);
for($i =0 ; $i < $max ; $i++ )
{

	echo $_SESSION['history'][$i] ;

}

?>