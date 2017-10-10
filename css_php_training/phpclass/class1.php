<?php 


class phpClass {

var $a1, $a2;

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


if($_POST) {



$p1 = new phpClass();

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




</head> 






<body> 


 <form action ="<?php echo( $self ); ?>" method = "post"> 

<input type='text' name="a1" value=1 />
<input type='text' name="a2" value=1 />

  <input type = "submit" value = "submit"> 


 </form>     

  
<?php 



?>


  

       



</body> 


</html> 


</html>