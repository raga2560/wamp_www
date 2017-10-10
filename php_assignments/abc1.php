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

$first ="Hanuman";
$last ='singh';
echo "First name:".$first."<BR>";
echo "Last name:".$last."<BR>";

$var1 = "I am learning";

$var2 = "PHP from siliconindia";

$var3 = $var1.$var2;

echo "Concat string=".$var3."<BR>";

define("MYNAME","Ramesh");
define("MYSALARY",1000);
define("MYHEIGHT",5.6);
echo "Printing constants=",MYNAME," ",MYSALARY," ",MYHEIGHT, "<BR>" ;

//valid
$_number_no=1005.005;

//invalid
// $city name = "Chennai";


//valid
$cOmBiNaTION = True;


// Invalid
//$myname# = "Dr.Ram kumar";

define("MYTEACHER","Naveen");
define("YOURTEACHER",MYTEACHER);
echo "Your teacher=",YOURTEACHER, "<BR>";


$schoolteacher = YOURTEACHER;
echo "school teacher=".$schoolteacher."<BR>";

if (defined("MYTEACHER")) {
	echo "MYTEACHER defined"."<BR>";
}


if (!defined("MYTEACHER1")) {
	echo "MYTEACHER1 not defined"."<BR>";
}

echo "You can use bool, integer, string as constants";


?>





</BODY>
</HTML>

