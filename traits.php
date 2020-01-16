<?php 
// declaring traits
    trait test1{
        public function myFun(){
            echo "Trait 1";

        }
    }
    
    trait test2{
        public function myFun1(){
            echo " Trait 2";
        }
    }
//declaring class
    class Test{
        use test1,test2;
    }

    $test = new Test();
    $test->myFun();
    $test->myFun1();

?>