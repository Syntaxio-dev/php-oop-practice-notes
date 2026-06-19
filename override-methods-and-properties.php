<?php

class Teacher{
    public $city="jaipur";
    function nextExam(){
        echo"next exam is maths";
    }
    function age(){
        echo"my age is 3000";
    }
}

// method overrideing ka matlab ye hi hai ki agar same naam ka method ya propertie uski inherit kari hui dusri class mei use hota hai toh inherit wali class usko override kr deti hai 

class Student extends Teacher{
        public $city="delhi";

 function age(){
        echo"my age is 30";
    }
    
}

$st1= new Student();

$st1->nextExam();
echo"<br>";
echo $st1->city;

?>