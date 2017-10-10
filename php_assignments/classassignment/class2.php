<?php 


class phpClass {

var $a1, $a2;

function __construct($d1, $d2)
{
	$this->a1 = $d1;
	$this->a2 = $d2;
}

function getinput() {

	
	$this->a1 = $_POST['a1'];
	$this->a2 = $_POST['a2'];

	
	}

	function sum() {
	$mydata = $this->a1 + $this->a2;
	echo "SUM <input type='text' name='total' value=$mydata />";

	}

	function difference() {
	$mydata = $this->a1 - $this->a2;
	echo "DIFFERENCE <input type='text' name='total' value=$mydata />";

	}

}


$p1 = new phpClass(5,6);

if($_POST) {





$p1->getinput();
$p1->sum();
$p1->difference();

}


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


    <h1>siliconindia  (page 2)</h1> 


    <hr> 

 <form action ="<?php echo( $self ); ?>" method = "post"> 

<input type='text' name="a1" value=<?php echo "$p1->a1" ?> />
<input type='text' name="a2" value=<?php echo "$p1->a2" ?> />

  <input type = "submit" value = "submit"> 


 </form>     

  
    







<?php 



?>


  

       


    <hr> 




</body> 


</html> 


</html>