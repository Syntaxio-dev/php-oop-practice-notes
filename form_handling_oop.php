<?php
if (isset($_POST['user'])){
    class user{
        function getname($name){
            echo "User name is $name";
        }
    }

    $user= new user();
    $user->getname($_POST['user']);
}


?>

<form action="" method="post">
    <input type="text" name="user" placeholder="Enter your name ">
    <br>
    <br>
    <br>
    <button>clinc it </button>

</form>