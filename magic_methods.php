<?php
    // class declaration
    class MyClass{
        // private variable declaration
        private $name;
        private $batch;

        //constructor defining
        public function __construct($name , $batch){
            $this->name = $name;
            $this->batch = $batch;

        }

      /*  public function setName($name1,$batch1){
            $this->name = $name1;
            $this->batch = $batch1;

        } */
        // function to show name 
        public function getName(){
            echo "<br>The name is $this->name and batch is $this->batch";
        }

        //call magic function happens when the function in the argument does not exist
        public function __call($function,$argument){

            echo "<br>Tried to call $function() with $argument and failed";
        }
         //get is called when an undefined variable is being called
        public function __get($arg){
            
            echo "<br>Tried to get $arg variable value and failed";

        }
        // set is called when we try to set value of variable which does not exist
        public function __set($arg1,$arg2){
            echo "<br>Trying to set $arg1 and failed and the value was $arg2";

        }

    }

    // Object created and constructor called
    $mycls = new MyClass("Shiv Shankar ",2020);
    $mycls->setName("Pulok ",2020); // __call function called if setName does not exist
    $mycls->getName();
    echo $mycls->firstName;//__get function called
    $mycls->firstName = "Shiv";//__set function called

?>