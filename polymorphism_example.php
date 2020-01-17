<?php
//abstract class
    abstract class MyClass{
        //abstract function
        public abstract function myFunc() : string;
        public abstract function myFunc1() : string;

    }
//Extending the abstract class 
    class Test extends MyClass {
        private $name;
        private $batch;
//Constructor defining
        function __construct($name,$batch){

            $this->name = $name;
            $this->batch = $batch;

        }
//overridden function example of polymorphism
        public function myFunc() : string {
            return $this->name;

        }
//
        public function myFunc1() : string{
            return $this->batch;

        }

    }
//object made and constructor called 
    $test = new Test("Shiv Shankar" , 2020);
    
    //Functions called
    echo "Name is " . $test->myFunc();
    echo "<br>Batch is " . $test->myFunc1();

?>