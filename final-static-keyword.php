

=====================================final keyword==============================================
<?PHP
// final lagane se car class honda class ko inherit nhi kr payegi aur error dega ki car class honda class ko inherit krne ki koshish kr rhi hai lekin honda class final hai isiliye inherit nhi kr payegi
// final class Honda{

// }

// class car extends Honda{

// }

// $car= new car();

// class Honda{
//     final function companyName(){ // yha final lagane se koi bhi class jis ne is class ki properties ko inherit kiya hai hai wo us ko override nhi kr payegi 
//         echo "honda";
//     }

// }

// class car extends Honda{
//     // function companyName(){
//     //     echo"honda city";
//     // }
// }

// $car= new car();

// $car->companyName();


?>

============================static keyword===============================================

<?php
class Honda{
    static public $countryName="ayush"; // same keyword se property ko bhi call kr sakte hai bina object bnaye echo class::$proerty-name;

    static function companyName(){ //yha static likhne se mai is method ko bina object banye call kr sakt hoon class-name::method-name();
        echo "honda";

    }
}

// $honda=new Honda();
// $honda->companyName(); // normal method
Honda::companyName();

echo Honda::$countryName;




?>