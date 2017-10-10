<?php
require('Smarty_connect.php');
$smarty= new smarty_connect();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$smarty->assign('firstname', $_POST["firstname"]);
$smarty->assign('phone', $_POST["phone"]);
$smarty->display('formoutput.tpl');

}
else {
$smarty->assign('action', "input");

$smarty->display('forminput.tpl');
}


?>
