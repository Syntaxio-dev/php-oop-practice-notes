<?php
// video 1 notes
// trait parentCompany{
//     function gettotalemp(){
//         echo 500;
//     }

// }
// trait parentCompany2{
//     function gettotaloffice(){
//         echo 5;
//     }

// }
// // ek class mei inheritace sirf ek hi ho sakti hai par tarits ek class mei kitne bhi laga sakte hai 
// class company{
//     use parentCompany;
//     use parentCompany2;
// }

// $cmp= new company();
// $cmp->gettotalemp();
// echo "<br>";
// $cmp->gettotaloffice();

?>

<?php

//overriding methods and properties in traits 

trait ParentCompany1{
    function getemp(){
        echo 200;
    }
    
}
trait ParentCompany2{
    function getemp(){
        echo 300;
    }

}
class Company{
    use ParentCompany1;
    use ParentCompany2{

        // khudh hi bta do konsa trait lena hai 
        ParentCompany1::getemp insteadOf ParentCompany2;
        //method ko call krne wala naam cahnge kr do 
        ParentCompany2::getemp as getempCompany2;
    }

}


$cmp = new Company();
$cmp->getemp(); //isko call krne se phli wali company ke employes call honge kyuki apan ne define kiya hai 
echo "<br>";
$cmp->getempCompany2();







?>