<?php
/* Smarty version 3.1.32, created on 2018-09-20 03:15:32
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\class.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba310d41f2b88_28267521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b3a3193bdb2a194d8baa656aad80a68123f14b' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\class.html',
      1 => 1537413307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba310d41f2b88_28267521 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="theme.css" type="text/css"> </head>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">

                    <h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'sysname');?>
 -班级列表</h1>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>班级</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$__section_s_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['students']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_s_0_total = $__section_s_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_0_total !== 0) {
for ($__section_s_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_0_iteration <= $__section_s_0_total; $__section_s_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] = $__section_s_0_iteration;
?>
                            <tr>
                                <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] : null);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['students']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['class_name'];?>
</td>
                            </tr>
                            <?php }} else {
 ?>
                                <tr>
                                    <td colspan-"4">没有学生数据</td>
                                </tr>   
                            <?php
}
?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
