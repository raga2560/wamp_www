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

$var1 = "Hello ";

$var2 = "World";
echo "<BR>assignment Q-1 <Br>";
$var3 = $var1.$var2;

echo "Concat string=".$var3."<BR>";

echo "<BR>assignment Q-2 <Br>";
if(strpos($var3, "World") > 0)
{
	echo "world found";
}
else
{
		echo "world not found";
}

echo "<BR>assignment Q-4 <Br>";
$var1 = "This is a test";
$var3=str_replace("test","assignment", $var1);
echo $var3."<BR>";
echo strtoupper($var3)."<BR>";

echo "<BR>assignment Q-5 <Br>";
$var2="new delhoi is vcapital of India";
echo ucfirst($var2)."<BR>";
echo "length=",strlen($var2),"<BR>";

echo "<BR>regular expression assignment Q-1 <Br>";

$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{2,5}$/";
 $email   = "jim@demo.com";
 if (preg_match($pattern,$email)) echo "valid email=".$email;
   else echo "invalid email=".$email;

echo "<BR>regular expression assignment Q-2 <Br>";
$var1 = "This is a test";
 if (preg_grep("/test/", str_split($var1,strlen($var1)))) echo "test is matched<BR>";
   else echo "test is not matched";

echo "<BR>regular expression assignment Q-3 <Br>";
$var1 = "2013-09-25";
 if ($var3= preg_replace("/([0-9]+)-([0-9]+)-([0-9]+)/","$2/$3/$1", $var1)) echo "$var3<BR>";

echo "<BR>regular expression assignment Q-4 <Br>";
$var1 = "This is a test";
 if ($var3= preg_replace("/test/","assignment", $var1)) echo "$var3<BR>";

echo "<BR>regular expression assignment Q-5 <Br>";
$var11 = array('Andrew','John','Peter','Nastin','Bill');
$var1=join($var11);
 if ($var3= preg_match("/^A-J/", $var1,$match)) echo "$match<BR>";


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

<a href=http://localhost:5000/ibm/basic_day4/button.html > test </a>



</BODY>
</HTML>

