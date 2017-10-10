<?php
require('Smarty_connect.php');
$smarty= new smarty_connect();
$items_list = array(23 => array('no' => 2456, 'label' => 'Salad'),

                    96 => array('no' => 4889, 'label' => 'Cream')

                    );

$smarty->assign('items', $items_list);

$smarty->display('foreachtest.tpl');



?>
