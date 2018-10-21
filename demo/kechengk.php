<?php


require '../libs/Smarty.class.php';

$smarty = new Smarty();

$conn=mysqli_connect("localhost","root","","emsdb");

//Check connection
if (mysqli_connect_errno())
{
    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset( $conn, 'utf8' );

$sql="SELECT  m.course_name as stu_course_name
FROM tbstudent s
JOIN tbcourse m ON s.stu_id = m.course_id";

if ($result=mysqli_query($conn,$sql))
{
    while ($obj=mysqli_fetch_array($result))
    {
        $students[] = $obj;
    }
    // Free result set
    //var_dump($students);
    mysqli_free_result($result);
}

mysqli_close($conn);


$smarty->assign("students", $students);

$smarty->display("kechengk.html");