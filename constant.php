<?php

class ConstantDemo{
    const collegeName="subodh";

    function getcollegeName(){
        // two ways of getting constant print 
        // echo self::collegeName;   //mehod 1

        echo ConstantDemo::collegeName;  // method 2
    }
}

// echo ConstantDemo::collegeName;  //method 1 same isi se second wala bhi call ho jayega pae call krne ke bhi 2 tarke hote hai , ye direct tarika hai bina function use kre 

$c1= new ConstantDemo(); // is method se apan function ke andar se cosntant ko call kr skate hai 
$c1->getcollegeName();



?>