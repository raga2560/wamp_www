<?php 

session_start(); 
$shoppinglist = array 
(
	"product1" => array 
	(
	"name"=>"tatatea",
	"price-per-unit"=> 100,
	"order" => 1,
	),
	"product2" => array 
	(
	"name"=>"brookbond",
	"price-per-unit"=> 150,
	"order" => 1,
	),

);






if(isset($_SESSION['cart']))
{

	echo "not overwritten";
}
else
{


	$_SESSION['cart'] = array();
foreach($shoppinglist as $y=>$y_value) {
  $eachproduct = $y_value;
  $handle1 = $y;

   
	$name = $eachproduct["name"];


	$_SESSION['cart'][$name]["$name".'order'] = $eachproduct["order"]  ;
/*	echo $eachproduct["order"]; */

	echo "overwritten";
   

}

}

?> 


<html> 

<head> 
    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1"> 
    <title>SiliconIndia</title>        

</head> 

<body> 
    <h1>Siliconindia  (page 1)</h1> 
    <hr> 

       <h3>PHPSESSID = <?php echo session_id(); ?></h3> 
    <hr> 


<form method="post", action=shoppingdetails.php?<?php echo session_id() ; ?> >

<?php 




echo '
<table border=1> ';


$count=0;

foreach($shoppinglist as $y=>$y_value) {
  $eachproduct = $y_value;
  $handle1 = $y;
echo "	<tr bgcolor=gray>  ";
foreach ($eachproduct as $x=>$x_value)
{

	


 if($x == 'name') { $tmpname=$x_value; 

			echo "<td> <input type='text' name=name$count value=$tmpname /> </td>";  } 
 if($x=='price-per-unit') echo "<td> $x_value  </td>"; 

if($x=='order') {

	//echo "$tmpname";

		$myvalue=$_SESSION['cart'][$tmpname]["$tmpname".'order'];

	
	
	echo "<td > <input type='text' name={$tmpname}order value='$myvalue'  /> </td>";  
		}


}


echo " </tr> ";
$count++;
}



echo '
</table>
';



?>

<input type=button value="logoff" onclick=<?php session_destroy()  ?> >

<input type="submit" name="submit" value="Submit"> 

</form> 







 <a href="shoppingdetails.php?<?php echo session_id() ; ?>">Next page</a> 

</body> 


</html>