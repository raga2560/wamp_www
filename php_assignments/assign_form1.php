<html>
<head>

<?php

if($_POST ) {

$name = $_POST["name"];
   if(strlen($name) <5)
   {	
     $nameerror="Name should be > 5 <BR>";

   }
   else
   {

    echo " Hello $name .<br />";
	$nameerror="Name is $name";
   }

   $age1 = $_POST["age"];
   $age = $age1;

  $int_options = array("options"=>
 array("min_range"=>18, "max_range"=>60));

 if(filter_var($age, FILTER_VALIDATE_INT, $int_options)){
	
    $ageerror= "You are $age years old.";
    }
    else {
	$ageerror= "Invalid age";

	}

}
else
{
$nameerror="";
$ageerror="";
$_POST['name'] = "";
$_POST['age'] = "";
$age1 ="";

}

?>


</head>



<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 



Name: <input type="text" name="name" value=<?php print $_POST['name'] ; ?> > <?php echo "$nameerror" ; ?> </BR> 

Age: <input type="text" name="age" value=<?php print $age1 ; ; ?> >  <?php echo "$ageerror" ; ?> </BR> 

<input type="submit" />





</form>




</body>

</html>


