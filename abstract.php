<?PHP

abstract class productFeature{
    abstract function productDetails(); //isme me method ko implement nhi krenge bas jo bna na hai wo method ka naam likh kr chodd denge
    abstract function productimages(); //isme me method ko implement nhi krenge bas jo bna na hai wo method ka naam likh kr chodd denge
    abstract function productOwnerDetails(); //isme me method ko implement nhi krenge bas jo bna na hai wo method ka naam likh kr chodd denge
    // ab jaise hi is class ko kisi mei inherit krenge toh ye teen methods us class mei bna na mandatory hai 
    function common(){
        echo "common code here in all functions ";
    }
}
// ek abstract class ka object nhi banya ja sakta hai 
class UploadProducts extends productFeature{
    function productDetails(){
        echo "product details";
    }
     function productimages(){
        echo "product images";
    }
     function productOwnerDetails(){
        echo "product qwner details";
    }
    function other(){
        echo "other function";
    }

}
$upload=new UploadProducts();
$upload->productDetails();
echo "<br>";
$upload->productimages();
echo "<br>";
$upload->productOwnerDetails();
echo "<br>";
$upload->common();
echo "<br>";
$upload->other();
?>