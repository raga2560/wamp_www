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
   $selectedcolor=$_POST["mycolor"];
	   $selectedcountry=$_POST["mycountry"];
	
}
else
{
$nameerror="";
$ageerror="";
$_POST['name'] = "";
$_POST['age'] = "";
$age1 ="";
   $selectedcolor="white";
   $selectedcountry="india";


}

$countrytable = array 
(
	"india"=>"delhi",
	"london"=>"britain",
		"america"=>"washington",
);


?>


</head>



<body bgcolor="<?php echo $selectedcolor; ?> ">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 



Name: <input type="text" name="name" value=<?php print $_POST['name'] ; ?> > <?php echo "$nameerror" ; ?> </BR> 

Age: <input type="text" name="age" value=<?php print $age1 ; ; ?> >  <?php echo "$ageerror" ; ?> </BR> 

colorselect <select name="mycolor">
<option value="red">Red</option> 
<option value="green">Green</option> 
<option value="blue">Blue</option> 
</select>

</BR>

countryselect <select name="mycountry">
<option value="india">India</option> 
<option value="london">London</option> 
<option value="america">America</option> 
</select>



<?php echo "capital:"."$countrytable[$selectedcountry]";
?>
</BR>

<input type="submit" />





</form>




</body>

</html>


