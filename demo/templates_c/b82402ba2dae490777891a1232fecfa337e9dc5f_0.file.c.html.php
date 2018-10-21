<?php
/* Smarty version 3.1.32, created on 2018-09-14 06:40:57
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\c.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b57f9cfb800_96191243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82402ba2dae490777891a1232fecfa337e9dc5f' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\c.html',
      1 => 1536907210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b57f9cfb800_96191243 (Smarty_Internal_Template $_smarty_tpl) {
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

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>姓名</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$__section_s_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['b']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_s_0_total = $__section_s_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_0_total !== 0) {
for ($__section_s_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_0_iteration <= $__section_s_0_total; $__section_s_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['b']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['stu_name'];?>
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
</body>
</html><?php }
}
