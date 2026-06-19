<?php

class Properties{
    public $name="ayush sharma ";
    function getName(){
        echo $this->name;
    }
    function updateName(){
        $this->name="khushboo";
    }

    //dynami input variable call
    function dynamicname($username){
        $this->name=$username;

    }


}

$p1= new Properties();
$p1->dynamicname("adi");
// $p1->updateName();

$p1->getName();
?>