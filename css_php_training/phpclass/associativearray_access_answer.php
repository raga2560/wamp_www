<HTML>
<HEAD>
<?php
$firstname = "hanuman";
$lastname="singh";
?>
</HEAD>
<BODY>
<?php
/* assignment of
first name, last name with tags
*/
$employees = array
(
  "employee-1" => array 
	(
	"Name" => "ramesh",
	"salary" => 10000,
	"designation"=> "manager",
        ),

  "employee-2" => array 
	(
	"Name" => "rajesh",
	"salary" => 20000,
	"designation"=> "employee",
        )
);
echo "Example of using print_r to display content of element in associative array:<BR>";
print_r($employees["employee-1"]); echo "<BR>";

echo "<BR>";echo "<BR>";
echo "Example of using print_r to display all elements in associative array:<BR>";
print_r($employees);
echo "<BR>";
echo "<BR>";echo "<BR>";
$coloredtable = array 
(
	"row1"=>"red",
	"row2"=>"green",
);

$var=0;
echo "<BR>";echo "<BR>";
echo "Example of display content in associative array:<BR>";

foreach ($coloredtable as $x=>$x_value)
{

	echo "$x  $x_value"."<BR>";
$var ++;
};

echo "<BR>";echo "<BR>";
echo "Example of putting content of associative array in table:<BR>";
echo '
<table border="1"> ';

$coloredtable = array 
(
	"row1"=>"red",
	"row2"=>"green",
);

foreach ($coloredtable as $x=>$x_value)
{

echo "	<tr bgcolor=$x_value> 
	<td> $x </td><td> $x_value </td>
	
	</tr>";

};


echo '
</table>
';

echo "<BR>";echo "<BR>";
echo "Example of display content in associative array:<BR>";
$indiatable = array 
(
	"karnataka"=>"bangalore",
	"tamilnadu"=>"madras",
);

echo '
<table border="1"> ';


foreach ($indiatable as $x=>$x_value)
{

echo "	<tr bgcolor=gray> 
	<td> $x </td><td> $x_value </td>
	
	</tr>";

};


echo '
</table>
';
echo "<BR>";echo "<BR>";
echo "Example to access content in multidimensional associative array:<BR>";
foreach ($employees as $x=>$x_value)
{

	echo "$x ". $x_value["Name"]."<BR>";
	
	if($x_value["Name"] == "rajesh") {
		echo "salary of rajesh = ".$x_value["salary"]."<BR>";
	}

};


?>




</BODY>
</HTML>

