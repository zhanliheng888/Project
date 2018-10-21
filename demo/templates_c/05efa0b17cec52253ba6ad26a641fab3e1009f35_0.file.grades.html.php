<?php
/* Smarty version 3.1.32, created on 2018-09-15 02:35:41
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\grades.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9c6ffd4126d1_40074192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05efa0b17cec52253ba6ad26a641fab3e1009f35' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\grades.html',
      1 => 1536978610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9c6ffd4126d1_40074192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\smarty-3.1.32\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
        $("#course").change(function() {
            self.location.href="?course_id="+$(this).val();
        })
    })
<?php echo '</script'; ?>
>

</head>

<body>
<div class="container">
        <div class="row">
                <div class="offset-md-1 col-md-10">
<table class="table table-bordered table-hover table-striped">
<tr class="nav-item" >
<a class="nav-link" href=" " style="font-size:40px; color:black; font-weight:normal;">
<i class="fa d-inline fa-lg fa-calendar"></i> 成绩列表</a></tr>
<?php echo smarty_function_html_options(array('id'=>'course','name'=>'course','options'=>$_smarty_tpl->tpl_vars['courses']->value,'selected'=>$_smarty_tpl->tpl_vars['courseid']->value),$_smarty_tpl);?>

<thead>
<tr style=" font-size:30px; background-color:black; font-family:宋体; color: blanchedalmond;" >
            <th>序号</th>
            <th>学号</th>
            <th>所学专业</th>
            <th>姓名</th>
            <th>课程名称</th>
            <th>成绩</th>
            <th>说明</th>
</tr>
</thead>
<tbody>
        <?php
$__section_grade_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['grades']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_grade_0_total = $__section_grade_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_grade'] = new Smarty_Variable(array());
if ($__section_grade_0_total !== 0) {
for ($__section_grade_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] = 0; $__section_grade_0_iteration <= $__section_grade_0_total; $__section_grade_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] = $__section_grade_0_iteration;
?>
        <tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>>
            <td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null);?>
</td>
            <td><a href=" " <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_rollno'];?>
</a></td>
            <td><a href="student.php?stu_id=<?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_name'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) == 1) {?>
                <i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) == 2) {?>
                <i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) == 3) {?>
                <i class="fa fa-fw fa-star"></i>
                <?php }?>
            </a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_major'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_name_course'];?>
</td>
            <td class="text-right <?php if ($_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['mark_score'] >= 80) {?>
                table-success
                <?php } elseif ($_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['mark_score'] >= 60) {?>
                table-warning
                <?php } else { ?>
                table-danger
                <?php }?>"
                ><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_score'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_mark_desc'];?>
</td>
        </tr>
        <?php }} else {
 ?>
没有成绩数据
            </tr>   
        <?php
}
?>
    </tbody>
</table>

<div class="col-md-12">
        <ul class="pagination justify-content-center pagination-sm text-secondary">
          <li class="page-item">
            <a class="page-link" href="#">
              <span>«</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              <span>»</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </div>
</div>
</div>
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
