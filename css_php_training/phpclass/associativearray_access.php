<HTML>
<HEAD>

</HEAD>
<BODY>
<?php

echo 'Consider the below $employees array'."<BR>";
echo '$employees = array
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
)';

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

echo "<BR>";echo "<BR>";
echo '1. Example of using print_r($employees) to display all elements in multi dimension associative array $employees:'."<BR>";

print_r($employees);
echo "<BR>";
echo "<BR>";echo "<BR>";

echo '2. Example of using print_r($employees["employee-1"]) to display content of element in a multi dimension associative array $employees["employee-1"]:'."<BR>";
print_r($employees["employee-1"]); echo "<BR>";



$coloredtable = array 
(
	"row1"=>"red",
	"row2"=>"green",
);

$var=0;
echo "<BR>";echo "<BR>";
echo "3. Example to display content of associative array using foreach:<BR>";
echo '$coloredtable = array 
(
	"row1"=>"red",
	"row2"=>"green",
)'."<BR>";


foreach ($coloredtable as $x=>$x_value)
{

	echo "$x  $x_value"."<BR>";
$var ++;
};

echo "<BR>";echo "<BR>";
echo "4. Example of putting content of associative array in table:<BR>";

echo '
<table border="1"> ';

$coloredtable = array 
(
	"row1"=>"red",
	"row2"=>"green",
);

echo "<BR>";echo "<BR>";

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
echo '5. Example to access content in multidimensional associative array $employees using echo:'."<BR>";
foreach ($employees as $x=>$x_value)
{

	echo "$x ". $x_value["Name"]."<BR>";

};



echo "<BR>";echo "<BR>";
echo "Assignment-1:  ".'Display content of below $indiatable array in table format:'."<BR>";
echo '$indiatable = array 
(
	"karnataka"=>"bangalore",
	"tamilnadu"=>"madras",
) ';




echo '
</table>
';

echo "<BR>";echo "<BR>";

echo "Assignment-2:  ".'Display salary of rajesh from $employees variable :'."<BR>";
echo '$employees = array
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
)';
echo "<BR>";echo "<BR>";


echo json_encode($employees);
?>





</BODY>
</HTML>

