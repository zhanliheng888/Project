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

$sql="SELECT s.stu_id, s.stu_rollno, s.stu_name, m.major_name as stu_major_name, c.class_name as stu_class_name
        FROM tbstudent s
        JOIN tbmajor m ON s.stu_major = m.major_id
        JOIN tbclass c ON s.stu_class = c.class_id 
    ORDER BY stu_rollno";

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

$smarty->display("student.html");