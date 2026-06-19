<?php

interface productFeature{
    function images();
    function ownerDetails();
    // function common(){  // interface mei normal fuction aur properties nhi bna sakte verna error dega 

    // }
}

class products implements productFeature {
    function images(){
        echo "product image";

    }
    function ownerDetails(){
        echo "owner details ";
    }


}

$product= new products();
$product->images();
echo "<br>";
$product->ownerDetails();

?>