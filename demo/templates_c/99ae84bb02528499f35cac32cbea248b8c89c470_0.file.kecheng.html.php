<?php
/* Smarty version 3.1.32, created on 2018-09-20 02:52:13
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\kecheng.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba30b5d026cf8_75987258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ae84bb02528499f35cac32cbea248b8c89c470' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\kecheng.html',
      1 => 1537411924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba30b5d026cf8_75987258 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="container">
<table class="table table-bordered table-hover table-striped">
<tr class="nav-item" >
<a class="nav-link" href=" " style="font-size:40px; color:black; font-weight:normal;">
<i class="fa d-inline fa-lg fa-calendar"></i> 成绩列表</a></tr>
<thead>
<tr style=" font-size:30px; background-color:black; font-family:宋体; color: blanchedalmond;" >
            <th>课程名称</th>

</tr>
</thead>
<tbody>
<?php
$__section_s_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_s_0_total = $__section_s_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_0_total !== 0) {
for ($__section_s_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_0_iteration <= $__section_s_0_total; $__section_s_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] = $__section_s_0_iteration;
?>
<tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>>
            <td ><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] : null);?>
</td>
            <td ><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]["stu_course_name"];?>
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
