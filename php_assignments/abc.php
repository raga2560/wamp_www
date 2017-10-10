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
echo "<H2>First name:</H2>"."<H1>".$firstname."</H1>"."<BR>";
echo "<H3>Last name:</H3>"."<H4>".$lastname."</H4>"."<BR>";
echo "Something is better than nothing ". Date('d-m-y')."<BR>";;
echo "Enter data <INPUT id=mytext size=30 >"."<BR>";

?>




<?php
echo "<font size='3' color=red  style='font-weight:bold;font-family:arial;' >India is my country</font>";
?>

<?php
/* assignment */
echo "Iam learning php from siliconindia.com"."</BR>";
$booldata = "2";
$mybool=(bool) $booldata;
 settype($booldata, "integer");
echo "booldata=".$mybool;
echo "booldata=".$booldata;
 ?>


</BODY>
</HTML>

