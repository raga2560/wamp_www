<?php
require('Smarty_connect.php');
$smarty= new smarty_connect();


$data = array(101,102,103,104,105);

$smarty->assign('rows',$data);

$smarty->display('sectionloop.tpl');



// ---------------------



?>