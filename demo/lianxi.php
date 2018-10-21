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


$pagesize = 5;
$recordcount = 0;
$pagecount = 0;

if (isset($_GET["courseid"])) {
    $courseid = $_GET["courseid"];
    if ($courseid==0) unset($courseid);
}

if (isset($_GET["page"])) {
    $currentpage = $_GET["page"];
    if ($currentpage<1) $currentpage = 1;
}
else
    $currentpage = 1;

//获得记录条数
if(!isset($_SESSION["courseid"]) || $_SESSION["courseid"]!=$courseid || (!isset($courseid) && isset($_SESSION["courseid"]))) {
    if (isset($courseid))
        $sql = "SELECT count(*) as recordcount FROM tbmark WHERE course_id = $courseid";
    else
        $sql = "SELECT count(*) as recordcount  FROM tbmark";

        if ($result=mysqli_query($conn,$sql))
        {
        if ($obj = mysqli_fetch_array($result)) {
            $recordcount = $obj["recordcount"];
            if (isset($courseid)) $_SESSION["courseid"] = $courseid;
            $_SESSION["recordcount"] = $recordcount;
            //获得页数
            $pagecount = ceil($recordcount / $pagesize);

            if ($currentpage>$pagecount) $currentpage = $pagecount;
        }
    }
    mysqli_free_result($result);
}

//开始获取数据
if (isset($courseid)) {
    $sql="SELECT s.stu_id, s.stu_rollno, s.stu_name, j.major_name, c.course_name, m.mark_score, m.mark_deec
        FROM tbstudent s
        JOIN tbmark m ON s.stu_id = m.stu_id
        JOIN tbcourse c ON m.course_id = c.course_id
        JOIN tbmajor j ON s.stu_major = j.major_id
    WHERE m.course_id = $courseid
    ORDER BY m.mark_score DESC
    LIMIT ".($currentpage-1)*$pagesize.", $pagesize
    ";
}
else{
    $sql="SELECT s.stu_id, s.stu_rollno, s.stu_name, j.major_name, c.course_name, m.mark_score, m.mark_deec
    FROM tbstudent s
    JOIN tbmark m ON s.stu_id = m.stu_id
    JOIN tbcourse c ON m.course_id = c.course_id
    JOIN tbmajor j ON s.stu_major = j.major_id
    ORDER BY m.mark_score DESC
    LIMIT ".($currentpage-1)*$pagesize.", $pagesize
    ";
}

if ($result=mysqli_query($conn,$sql))
{
    while ($obj=mysqli_fetch_array($result))
    {
        $grades[] = $obj;
    }
    // Free result set
    //var_dump($students);
    mysqli_free_result($result);
}

$sql = "SELECT course_id, course_name FROM tbcourse";

if ($result = mysqli_query($conn, $sql)) {
    $courses[0]="请选择课程";
    while ($obj = mysqli_fetch_array($result)) {
        $courses[$obj["course_id"]]=$obj["course_name"];
    }
    mysqli_free_result($result);
}


mysqli_close($conn);

$smarty->assign("pagesize", $pagesize);
$smarty->assign("recordcount", $recordcount);
$smarty->assign("pagecount", $pagecount);
$smarty->assign("currentpage", $currentpage);


$smarty->assign("grades", $grades);

$smarty->assign("courses", $courses);

if (isset($courseid)) 
    $smarty->assign("courseid", $courseid);
else
    $smarty->assign("courseid", 0);

$smarty->display("lianxi.html");