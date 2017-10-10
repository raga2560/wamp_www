<html>

<body>

<?php

$myname = $_POST["name"];
if(strlen($myname) <5)
{	
	echo "Name should be > 5 <BR>";
}
else
{

echo " Hello $myname .<br />";
}

$myage = $_POST["age"];

$int_options = array("options"=>
 array("min_range"=>18, "max_range"=>60));

 if(filter_var($myage, FILTER_VALIDATE_INT, $int_options)){
	echo "You are $myname years old.";
 }
 else {
	echo "Invalid age";
	}


?>


<form action="index1.php" method="POST">

Box1: <input type="text" name="box1" /> </BR>
Box2: <input type="text" name="box2" /> </BR>
Box3: <input type="text" name="box3" /> </BR>
Box4: <input type="text" name="box4" /> </BR>


<input type="submit" />


</form>




<?php

echo "You ";
echo 'You entered in box1 $_POST["box1"] '."<BR>";

?>


</body>

</html>

