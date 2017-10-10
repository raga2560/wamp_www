<?php



require_once('smarty_connect.php');

$smarty = new smarty_connect();

$smarty->assign('articleTitle', 'pankaj is a student');

$datetest = date('YYYY-MM-DD');


$smarty->assign('mydate', $datetest);

$line1 = "test\ntest2";

$smarty->assign('line1', $line1);


$smarty->display('captest.tpl');



?>
