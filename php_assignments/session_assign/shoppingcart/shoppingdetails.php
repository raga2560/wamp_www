<?php 


session_start(); 


//echo $_SESSION['views'];
//echo $_SESSION['shoppinglist0'];



	
//$myshoppinglist = $_SESSION['shoppinglist'];

if($_POST ) 
{

// print_r($_POST['name']);



   if(isset($_SESSION['cart']))
   {

	echo "not overwritten";
    } else 
    {
	$_SESSION['cart']=array();

    
    }

   //   $max=count($_POST['name']);

	for($i=0;$i<2;$i++){

	
	$name = $_POST['name'."$i"];

	echo $_POST["$name".'order'];
	
        $_SESSION['cart'][$name][$name.'order'] = $_POST[$name.'order'];

	}
}
else
{
    if(is_array($_SESSION['cart']))
    {

      
    }
    else 
    {
//	$_SESSION['cart']=array();

    
    }

}




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


        <h3>PHPSESSID = <?php echo session_id(); ?></h3> 


    <hr> 

<?php 




echo '
<table border=1> ';









foreach($_SESSION['cart'] as $y=>$y_value) {
  $eachproduct = $y_value;
  $handle1 = $y;

echo "	<tr bgcolor=gray>  ";
   
  foreach($eachproduct as $x=>$x_value) {


//echo "<td> $y </td>";

//echo "<td> $x </td>";

//echo $_SESSION['cart'][$y][$x];

	echo "<td> $y </td>" ; echo "<td> "; echo $_SESSION['cart'][$y][$x]; echo " </td>" ;
	}

    



echo " </tr> ";

}


echo '
</table>
';



?>


    <a href="shoppinglist.php?<?php echo session_id() ; ?>">Previous page</a> 


</body> 


</html> 


</html>