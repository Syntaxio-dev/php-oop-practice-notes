<?php

include ('./teacher.php');
include ('./student.php');

$teacher= new teacher\JoiningDetails();
                //    namespace\classname
$teacher->joiningdate();
echo"<br>";

$student= new student\JoiningDetails();
                //    namespace\classname
$student->addmisiondate();
?>