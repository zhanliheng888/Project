<?php

require '../libs/Smarty.class.php';

$smarty = new Smarty;


$smarty->assign("message", "荣耀皇冠");
$smarty->assign("name", "冰皇");
$smarty->assign("sroll", "201540704768");
$smarty->assign("man", "男");
$smarty->assign("gender", "性别");
$smarty->assign("phone", "17079797777");
$smarty->assign("lxdh", "联系电话");
$smarty->assign("zy", "软件外包");
$smarty->assign("zh", "数据库");
$smarty->assign("banji", "OS-1");
$smarty->assign("banjiyi", "2班");



$smarty->display('lalal.tpl');











?>