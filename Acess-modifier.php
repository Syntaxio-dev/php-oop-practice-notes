<?php

class Teacher{
    // private use krne se is queaton paper ko is class ke bhar access nhi kar sakte hai sirf teachers wali class hi access kr payegi
    private function questionPaper(){
        return"question-paper";
    }
    // isko access krne ka ek tarika hai ki apan dusre function mei usi class mei us ko call kr le fir us dusre function ko bhar access krne ki kosis karo 

    public function exam(){
        // ye logic lga kr call krne ka tarika hai agar question paper value call ho rhi hai toh mai us ko rokh bhi sakta hu call hone 
        if($this->questionPaper()=="question-paper"){
            echo "Do something";

        }else{
            echo"something else";
        }

    }

    //protected access modifier ye call nhi hoga likha ayega ki tum protected method ko call krne ka try kr rhe ho
    protected function studentMarks(){
        echo"all student marks ";
    }
}
// managenment waki class ki help se protected isliye access ho gya kyuki wo teacher wali class ko inherit kr rha tha isiliye student marks ko sirf management se access kiya ja sakta hai ussse bhar nhi kiya ja sakta hai 
class Management extends Teacher{
    function reviewMarks(){
        $this->studentMarks();
    }

}

$t1= new Teacher();
$m1= new Management();
echo $m1->reviewMarks();
// $t1->questionPaper();  // ye call nhi hoga kyuki private ka use kiya hai class ke andar

$t1->exam();

// $t1->studentMarks();//ye call nhi hoga kyuki ye function protected hai class ke andar




?>