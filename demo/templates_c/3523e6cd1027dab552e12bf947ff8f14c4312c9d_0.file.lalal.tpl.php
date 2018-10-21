<?php
/* Smarty version 3.1.32, created on 2018-09-11 06:45:09
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\lalal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b976475e44962_72598547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3523e6cd1027dab552e12bf947ff8f14c4312c9d' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\lalal.tpl',
      1 => 1536638495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b976475e44962_72598547 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
    <hr>
    <h3><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
&nbsp;&nbsp;&nbsp;<small><?php echo $_smarty_tpl->tpl_vars['sroll']->value;?>
</small></h3>
    <table>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['man']->value;?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lxdh']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['zy']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zh']->value;?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['banji']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['banjiyi']->value;?>
</td>
        </tr>
    </table>
</body>
</html><?php }
}
