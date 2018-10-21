<?php
/* Smarty version 3.1.32, created on 2018-09-11 03:17:56
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9733e46a97f3_45122226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55843a93e120e2424a5e36781b30e9f92ed2ee8' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\hello.tpl',
      1 => 1536635799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9733e46a97f3_45122226 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['greet']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
!</h1>
</body>
</html><?php }
}
