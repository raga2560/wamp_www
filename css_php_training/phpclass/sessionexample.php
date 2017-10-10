<?php 

session_start(); 

if(isset($_SESSION['itemno']))

  $_SESSION['itemno']=$_SESSION['itemno']+1;

Else 
  $_SESSION['itemno']=1;


if(isset($_SESSION['itemno'])) {

echo "Itemno=". $_SESSION['itemno']; 
}




?>

<html>

<body>

</body>

</html>

