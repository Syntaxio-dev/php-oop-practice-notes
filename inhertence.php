<?php

class UserAuth{
    public $UserType;
    function login($UserType){
    echo "$UserType logged in";
}

}
// apne parent ki values inherit krne ke baad bhi ye child class koi bhi method (function) perform kr sakte hai

class Student extends UserAuth{
    function getName(){
        echo"ayush";
    }


}

class Teacher extends UserAuth{
function getSkill(){
        echo"DSA";
    }
  
}


$s1 = new Student();
$s1->login("student");
echo "<br>";
$s1->getName();

echo "<br>";

$t1= new Teacher();
$t1->login("teacher");
echo "<br>";
$t1->getSkill();


?>