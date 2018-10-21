<?php 
require '../libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->assign("greet","Hello");
$smarty->assign("message","world");
$smarty->display('hello.tpl');
?>