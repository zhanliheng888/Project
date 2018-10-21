<?php

ini_set("display_errors", "on");

require '../libs/Smarty.class.php';


$smarty = new Smarty();

$conn=mysqli_connect("localhost","root","","emsdb");

//Check connection
if (mysqli_connect_errno())
{
    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset( $conn, 'utf8' );

if (isset($_POST["course_name"])) {
    //保存课程数据
    if (isset($_GET["course_id"])) {
        //编辑课程

        $sql = "UPDATE tbcourse SET ... WHERE course_id = ".$_GET["course_id"])
    }
    else {
        //新增课程
        $sql = "INSERT INTO tbcourse (course_name, course_desc, course_required, course_public, academy_id, major_id)
                VALUES(...)"
    }

    //显示课程添加/更新成功页面
    $smart->display("kecheng.html");

}
else {
    if (isset($_GET["course_id"])) {
        //读取数据库中指定课程的数据
        $sql = "SELECT * FROM tbcourse WHERE course_id = " . $_GET["course_id"];
    }

    //获取院系列表

    //获取专业列表

    $smart->display("courseadd.html");
}