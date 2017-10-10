<HTML>
<HEAD>

</HEAD>
<BODY>
<?php

echo 'Consider the below $employees array'."<BR>";
echo '$employees = array
(
   array 
	(
	"Name" => "ramesh",
	"salary" => 10000,
	"designation"=> "manager",
        ),

   array 
	(
	"Name" => "rajesh",
	"salary" => 20000,
	"designation"=> "employee",
        )
)';

$employees = array
(
   array 
	(
	"Name" => "ramesh",
	"salary" => 10000,
	"designation"=> "manager",
        ),

   array 
	(
	"Name" => "rajesh",
	"salary" => 20000,
	"designation"=> "employee",
        )
);

echo "<BR>";echo "<BR>";
echo '1. Example of using print_r($employees) to display all elements in multi dimension indexed array $employees:'."<BR>";

print_r($employees);
echo "<BR>";
echo "<BR>";echo "<BR>";

echo '2. Example of using print_r($employees[1]) to display content of element in a multi dimension indexed array $employees[1]:'."<BR>";
print_r($employees[1]); echo "<BR>";

echo json_encode($employees);
?>

</BODY>
</HTML>

