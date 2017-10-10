<?php
require('Smarty_connect.php');
$smarty= new smarty_connect();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_POST["country"]))
{
//	$smarty->assign('country', $_POST["country"]);

	//$smarty->display('formoutput.tpl');

//	header('Location:india.php');
	$country = ($_POST["country"]);
$linkname = "Location:".$country.".php";

		header($linkname);

}


}
else {

$smarty->display('countryforminput.tpl');
}


?>
