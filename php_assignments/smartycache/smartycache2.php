<?php
require('Smarty_connect.php');

$smarty= new smarty_connect();

$smarty->caching = 1;



//db configuration
include "config.php";

if(!($db = @mysql_connect($server, $db_user, $db_pass))) //connect to database
die("Couldn't connect to the database.");
if(!@mysql_select_db($db_name, $db)) //select database
die("Database doesn't exist!");

$sql = "SELECT * FROM users";

if(($result = @mysql_query($sql, $db)) == 0)
{
echo "\n Database error: ".mysql_error()."\n";
die("MySQL Said: " . mysql_error());
}

//$user = array();

$smarty->cache
while($tmp = mysql_fetch_assoc($result))
{
$smarty->assign('rows',$tmp);

$smarty->display('smartycache2.tpl');

}

// ---------------------



?>



