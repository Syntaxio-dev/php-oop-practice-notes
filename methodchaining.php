<?php

class Company{
    function getName(){
        echo "This is honda. ";
        return $this;
    }
    function getemp(){
        echo "honda has 50 emp. ";
        return $this;
    }
    function gettotalofc(){
        echo "total honda ofc is 66 ";
    }
}

$company= new Compnay();
// agar methods ki chaining krni hai toh unme $this laga na jaruri hai nhi toh multiple chaining call nhi ho pata error ata hai 
$company->getName()->getemp()->gettotalofc();

?>