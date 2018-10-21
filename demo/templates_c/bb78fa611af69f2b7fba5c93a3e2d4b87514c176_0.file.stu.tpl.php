<?php
/* Smarty version 3.1.32, created on 2018-09-14 01:56:03
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\stu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b153314c5c9_29847923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb78fa611af69f2b7fba5c93a3e2d4b87514c176' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\stu.tpl',
      1 => 1536889915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b153314c5c9_29847923 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>
</head>

<body>
    <strip>
    <div class="container">
    <h1>学生信息表</h1>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>专业</td>
                <td>班级</td>
            </tr>
        </thead>
        <tbody>
        
             <?php
$__section_outter_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outter_0_total = $__section_outter_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outter'] = new Smarty_Variable(array());
if ($__section_outter_0_total !== 0) {
for ($__section_outter_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index'] = 0; $__section_outter_0_iteration <= $__section_outter_0_total; $__section_outter_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index']++){
?>
            <tr>
                <td class="text-primary"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index'] : null)]["stu_rollno"];?>
</td>
                <td class="text-dark"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index'] : null)]["stu_name"];?>
</td>
                <td class="text-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index'] : null)]["stu_major"];?>
</td>
                <td class="text-muted"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outter']->value['index'] : null)]["stu_class"];?>
</td>
           
            <?php }} else {
 ?> 
            
            没有信息
             </tr>
         <?php
}
?> 
        </tbody>
    </table>
</div> 
</strip>
     <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
