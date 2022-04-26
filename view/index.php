<?php
include ("header/header.php");

if(isset($_GET['p'])){
    $p=$_GET['p'];
    if($p=="studentTraining")
    {
        include "student_training.php";
    }
    if($p=="teacherTraining")
    {
        include "teacher_training.php";
    }
    if($p=="staffTraining")
    {
        include "staff_training.php";
    }
    if($p=="publicTraining")
    {
        include "public_training.php";
    }
    if($p=="lesson")
    {
        include "lesson.php";
    }
}
else include_once("main.php");

include ("footer/footer.php");

?>

