<?php


require '../libs/Smarty.class.php';

$smarty = new Smarty();


$con=mysqli_connect("localhost","root","","bootstrap");

mysqli_set_charset($con,"utf8");

if (mysqli_connect_error()){
    echo "try again!! check code! ";
}

$sql = "SELECT s.stu_rollno,s.stu_name,s.stu_major,k.mark_desc as stu_mark_desc, c.course_name as stu_course_name,k.mark_score as stu_score
from tbstudent s 
join tbmark k on s.stu_id = k.stu_id 
join tbcourse c on c.course_id = k.course_id
order by k.mark_score desc";

if ($result=mysqli_query($con,$sql)){
    while ($p = mysqli_fetch_array($result))
    {
        $a[]=$p;
    }

    mysqli_free_result($result);
}

 mysqli_close($con);


$smarty->assign("data", $a);

$smarty->display("a.html");
?>