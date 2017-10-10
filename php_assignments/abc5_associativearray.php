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
	"desig"=> "manager",
        ),

  "employee-2" => array 
	(
	"Name" => "rajesh",
	"salary" => 20000,
	"desig"=> "employee",
        )
);

print_r($employees["employee-1"]);
print_r($employees);
echo "<BR>";

$coloredtable = array 
(
	"row1"=>"red",
	"row2"=>"green",
);

$var=0;
foreach ($coloredtable as $x=>$x_value)
{

	echo "$x  $x_value"."<BR>";
$var ++;
};

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





$var1=array('red','green','yellow');
$var2=array('maroon','orange','violet');


print_r($var1);echo "<Br>";
print_r($var2);echo "<Br>";

echo "After merging:";
$var3=array_merge($var1,$var2);

print_r($var3);

echo "<Br>";

$var1=array('red','green','yellow');
print_r($var1);echo "<Br>";
echo "after reverse<Br>";
$var1 = array_reverse($var1);
print_r($var1);echo "<Br>";


$var1=array('red','green','yellow','yellow', 'pink');
print_r($var1);echo "<Br>";

echo "after duplicate removal<Br>";

print_r(array_unique($var1));echo "<Br>";
?>

</BODY>
</HTML>

