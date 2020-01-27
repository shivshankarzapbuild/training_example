<?php 

class MyClass1{
    public function myFunc2(){
        echo "<br> This is function 3 ";
    }
}


//Interface declared 
    interface MyInterface{
        public function myFunc();
        public function myFunc1();
    }
    //Class Implementing interface
    class MyClass extends MyClass1 implements MyInterface{
       //overriding of interface function
        public function myFunc(){
            echo " This is function1"; 
        }
        public function myFunc1(){
            echo " <br>This is function 2";

        }
    }

    $cls = new MyClass();
    echo $cls->myFunc();
    echo $cls->myFunc1(); 
    echo $cls->myFunc2();

?>