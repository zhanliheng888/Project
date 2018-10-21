<?php
/* Smarty version 3.1.32, created on 2018-10-16 03:07:47
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\chengjihuizong.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc55603caedf9_19957105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f17a78a769280e34bec99216a5c312a2ba4a908' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\chengjihuizong.html',
      1 => 1537844455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc55603caedf9_19957105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\smarty-3.1.32\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'sysname');?>
</title>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"><?php echo '</script'; ?>
>

    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="theme.css" type="text/css"> </head>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            $("#course").change(function() {
                self.location.href="?courseid="+$(this).val();
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                    <!-- <h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'sysname');?>
 - 成绩汇总</h1> -->
                            <a class="nav-link" href=" " style="font-size:40px; color:black; font-weight:normal;">
                            <i class="fa d-inline fa-lg fa-calendar"></i> 成绩汇总</a>
                        按课程过滤：<?php echo smarty_function_html_options(array('id'=>'course','name'=>'course','options'=>$_smarty_tpl->tpl_vars['courses']->value,'selected'=>$_smarty_tpl->tpl_vars['courseid']->value),$_smarty_tpl);?>

                    
                    
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr style=" font-size:18px; background-color:black; font-family:宋体; color: blanchedalmond;">
                                <th>序号</th>
                                <th>学号</th>
                                <th>姓名</th>
                                <th>所学专业</th>
                                <th>课程</th>
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
                            <tr <?php if ($_smarty_tpl->tpl_vars['currentpage']->value == 1 && (isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>>
                                <td class="text-center"><?php echo ($_smarty_tpl->tpl_vars['currentpage']->value-1)*$_smarty_tpl->tpl_vars['pagesize']->value+(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null);?>
</td>
                                <td><a href=" " <?php if ($_smarty_tpl->tpl_vars['currentpage']->value == 1 && (isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_rollno'];?>
</a></td>
                                <td><a href="student.php?stu_id=<?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentpage']->value == 1 && (isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) <= 3) {?> class="text-danger"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['stu_name'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value == 1) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) == 1) {?>
                                    <i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) == 2) {?>
                                    <i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-star"></i>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['rownum'] : null) == 3) {?>
                                    <i class="fa fa-fw fa-star"></i>
                                    <?php }?>
                                    <?php }?>
                                </a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['major_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['course_name'];?>
</td>
                                <td class="text-right <?php if ($_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['mark_score'] >= 80) {?>
                                    table-success
                                    <?php } elseif ($_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['mark_score'] >= 60) {?>
                                    table-warning
                                    <?php } else { ?>
                                    table-danger
                                    <?php }?>"
                                    ><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['mark_score'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['grades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grade']->value['index'] : null)]['mark_deec'];?>
</td>
                            </tr>
                            <?php }} else {
 ?>
                                <tr>
                                    <td colspan-"7">没有成绩数据</td>
                                </tr>   
                            <?php
}
?>
                        </tbody>
                    </table>

                    <div class="col-md-12">
                            <ul class="pagination justify-content-center pagination-sm text-secondary">
                              <li class="page-item">
                                <a class="page-link" href="<?php if ($_smarty_tpl->tpl_vars['currentpage']->value != 1) {?>?<?php if ($_smarty_tpl->tpl_vars['courseid']->value != 0) {?>courseid=<?php echo $_smarty_tpl->tpl_vars['courseid']->value;?>
&<?php }?>page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
}?>">
                                  <span>«</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pagecount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagecount']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                              <li class="page-item <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['currentpage']->value) {?>active<?php }?>">
                                <a class="page-link" href="?<?php if ($_smarty_tpl->tpl_vars['courseid']->value != 0) {?>courseid=<?php echo $_smarty_tpl->tpl_vars['courseid']->value;?>
&<?php }?>page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                              </li>
                              <?php }
}
?>
                              <li class="page-item">
                                <a class="page-link" href="<?php if ($_smarty_tpl->tpl_vars['currentpage']->value != $_smarty_tpl->tpl_vars['pagecount']->value) {?>?<?php if ($_smarty_tpl->tpl_vars['courseid']->value != 0) {?>courseid=<?php echo $_smarty_tpl->tpl_vars['courseid']->value;?>
&<?php }?>page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
}?>">
                                  <span>»</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
