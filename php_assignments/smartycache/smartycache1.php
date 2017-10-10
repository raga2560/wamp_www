<?php
require('Smarty_connect.php');

$smarty= new smarty_connect();
//require('Smarty.class.php');

//$smarty = new Smarty;


$smarty->caching = 1;

$smarty->display('smartycache1.tpl');



// ---------------------



?>



