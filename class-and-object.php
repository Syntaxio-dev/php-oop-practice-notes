<?php

class mathOperations{
    public $val=400;
    function sum($a,$b){
        echo $a+$b+$this->val;
    }
function multi($a,$b){
    echo $a*$b;
}

function sub($a,$b){
    echo $a-$b;
}
}

// object 
$math= new mathOperations();
$math->sum(10,40);
echo "<br>";
$math->multi(100000,40);
echo "<br>";
$math->sub(100000,40);


// $math2= new mathOperations();
// echo "<br>";

// $math2->sum(20,2000);

?>