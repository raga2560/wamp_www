<?php 


//$browserAgent1 = get_browser();
//print_r($browserAgent1);


class phpClass {

var $browserAgent ;


function __construct()
 {
	 $this->browserAgent = $_SERVER['HTTP_USER_AGENT'];
	echo $this->browserAgent;
 }

}


$p1 = new phpClass();


 $self =  $_SERVER['PHP_SELF']; 
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 


"http://www.w3.org/TR/html4/strict.dtd"> 


<html> 


<head> 


    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 


    <title>siliconindia</title>        


</head> 






<body> 



</body> 


</html> 


</html>