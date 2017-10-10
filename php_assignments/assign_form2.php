<html>
<head>

<?php

if($_POST ) {



  
$fieldnames = array("field1","field2","field3","field4");
$fieldvalues = array("","","","");
$fielderrors = array("","","","");

  for($i=0; $i< 4; $i++)
  {
    $fieldvalues[$i] = $_POST["$fieldnames[$i]"];
  }

  for($i=0; $i< 4; $i++)
  {
    if(strlen($fieldvalues[$i]) <5)
   {	
     $fielderrors[$i]="field value should be > 5 <BR>";

   }
  }
}
else
{

$field1="";
$field2="";
$field3="";
$field4="";
$fieldnames = array("field1","field2","field3","field4");
$fieldvalues = array("","","","");
$fielderrors = array("","","","");

}

?>


</head>



<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 





<?php 
for($j=0;$j <4 ; $j++) {
echo "$fieldnames[$j]".": <input type='text' name=$fieldnames[$j] value=$fieldvalues[$j] >"."$fielderrors[$j] </BR> ";
}

?>

<input type="submit" />





</form>




</body>

</html>


