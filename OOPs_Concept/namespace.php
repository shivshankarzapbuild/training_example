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
        //same function name as of first namespace
         function myFunc(){
          echo "<br> Name space 1 function";  
        } 
        myFunc();
        //same class as of first namespace 
        class Myclass {
            private $name;
            //constructor
            public function __construct($name){
                $this->name = $name;
            }
            //showing the data
            public function setName(){
                echo " name is $this->name";
            }
        
        }   
        //object made and constructor called
        $mycls = new Myclass("Ankit");
        echo $mycls->setName();

    }

   
?>