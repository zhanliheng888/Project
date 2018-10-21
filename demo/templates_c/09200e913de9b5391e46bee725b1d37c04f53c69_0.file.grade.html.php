<?php
/* Smarty version 3.1.32, created on 2018-09-25 03:30:58
  from 'C:\wamp64\www\smarty-3.1.32\demo\templates\grade.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba9abf2ccb4a3_91391886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09200e913de9b5391e46bee725b1d37c04f53c69' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-3.1.32\\demo\\templates\\grade.html',
      1 => 1537845122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9abf2ccb4a3_91391886 (Smarty_Internal_Template $_smarty_tpl) {
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
            var currentorderby = "<?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
";
            var currentorderdir = "<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;?>
";
            $("th").click(function() {
                if ($(this).attr("id")) {
                    var colid = $(this).attr("id");
                    if (colid==currentorderby) {
                        if (currentorderdir=="asc") //如果是升序，转为降序
                            self.location.href = "?orderby="+colid+"&orderdir=desc";
                        else //如果是降序，取消当前排序
                            self.location.href = "?"

                    }
                    else 
                        self.location.href = "?orderby="+colid;
                }
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">

                    <h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'sysname');?>
 - 成绩汇总</h1>
                        按课程过滤：<?php echo smarty_function_html_options(array('id'=>'course','name'=>'course','options'=>$_smarty_tpl->tpl_vars['courses']->value,'selected'=>$_smarty_tpl->tpl_vars['courseid']->value),$_smarty_tpl);?>

                    
                    
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>序号</th>
                                <th id="stu_rollno">学号 <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'stu_rollno') {?>fa-sort-amount-<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;
}?>"></i></th>
                                <th>姓名</th>
                                <th>所学专业</th>
                                <th id="course_name">课程<i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'course_name') {?>fa-sort-amount-<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;
}?>"></i></th>
                                <th id="mark_score">成绩<i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'mark_score') {?>fa-sort-amount-<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;
}?>"></i></th>
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
                                </ a></td>
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
&<?php }
if ($_smarty_tpl->tpl_vars['orderby']->value != '') {?>orderby=<?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
&<?php }
if ($_smarty_tpl->tpl_vars['orderdir']->value != '') {?>orderdir=<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;?>
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
&<?php }
if ($_smarty_tpl->tpl_vars['orderby']->value != '') {?>orderby=<?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
&<?php }
if ($_smarty_tpl->tpl_vars['orderdir']->value != '') {?>orderdir=<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;?>
&<?php }?>page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                              </li>
                              <?php }
}
?>
                              <li class="page-item">
                                <a class="page-link" href="<?php if ($_smarty_tpl->tpl_vars['currentpage']->value != $_smarty_tpl->tpl_vars['pagecount']->value) {?>?<?php if ($_smarty_tpl->tpl_vars['courseid']->value != 0) {?>courseid=<?php echo $_smarty_tpl->tpl_vars['courseid']->value;?>
&<?php }
if ($_smarty_tpl->tpl_vars['orderby']->value != '') {?>orderby=<?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
&<?php }
if ($_smarty_tpl->tpl_vars['orderdir']->value != '') {?>orderdir=<?php echo $_smarty_tpl->tpl_vars['orderdir']->value;?>
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
