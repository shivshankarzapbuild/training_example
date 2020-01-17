<?php
//creating a namespace 
    namespace myNameSpace{
//simple function inside the namespace
        function myFunc(){
            echo "Name space 0 function";
        } 
        myFunc();
//class inside the namespace
        class Myclass {
            private $name;
            //Constructor 
            public function __construct($name){
                $this->name = $name;
            }
            //data showing function
            public function setName(){
                echo " name is $this->name";
            }
        
        }
        $mycls = new Myclass("shivshankar");
        echo $mycls->setName();

    }
    //Second Namespace having same function and class as of the first
    namespace myNameSpace1{

         function myFunc(){
          echo "<br> Name space 1 function";  
        } 
        myFunc();

        class Myclass {
            private $name;

            public function __construct($name){
                $this->name = $name;
            }
            public function setName(){
                echo " name is $this->name";
            }
        
        }
        $mycls = new Myclass("Ankit");
        echo $mycls->setName();

    }

   
?>