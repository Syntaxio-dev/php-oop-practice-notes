<?php

class constructorDemo{
    // function __construct(){
    //     echo "ayush sharma will fuck your mom ";

    // }
    public $name;
    function __construct($nae)
    {
        $this->name=$nae;
    }
    
}

$cd= new constructorDemo();
$cd->__construct("ayush sharmaaaaa");
?>