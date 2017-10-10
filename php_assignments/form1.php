<html>
<head>
<?php
$nameerror="";
$ageerror="";
$_POST['name'] = "";
$_POST['age'] = "";
?>

<?php

function checkvalues()
{

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

   $age = $_POST["age"];

  $int_options = array("options"=>
 array("min_range"=>18, "max_range"=>60));

 if(filter_var($age, FILTER_VALIDATE_INT, $int_options)){
	echo "You are $age years old.";
    }
    else {
	$ageerror= "Invalid age";

	}
}
}

?>


</head>

<?php checkvalues(); ?>

<body>

<form method="post" action="form1.php" > 



Name: <input type="text" name="name" value=<?php $name ; ?> > <?php echo "$nameerror" ; ?> </BR> 

Age: <input type="text" name="age" value=<?php $age; ?> >  <?php echo "$ageerror" ; ?> </BR> 

<input type="submit" />





</form>



<?php echo $nameerror ; ?>


</body>

</html>

