<?php
require_once 'b.php';
require '../libs/Smarty.class.php';
$smarty = new Smarty;
$conn = new Connect();
$set_utf = $conn->set_utf;
$link = $conn->getLink();

$sql = "SELECT s.stu_rollno,s.stu_name,s.stu_major,k.mark_desc as stu_mark_desc, c.course_name as stu_name_course,k.mark_score as stu_score
from tbstudent s 
join tbmark k on s.stu_id = k.stu_id 
join tbcourse c on c.course_id = k.course_id
order by k.mark_score desc";
mysqli_query($link,$set_utf);
$res = mysqli_query($link,$sql);
$result = [];
while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
    $result[] = array("stu_rollno" => $row["stu_rollno"],
                    "stu_name" => $row["stu_name"],
                    "stu_major" => $row["stu_major"],
                    "stu_name_course" => $row["stu_name_course"],
                    "stu_score" => $row["stu_score"],
                    "stu_mark_desc" => $row["stu_mark_desc"]);
}
mysqli_free_result($res);
mysqli_close($link);
$smarty->assign("data",$result);
$smarty->display('a.html');

?>