<?php 
    // Declaring class 
    class Test {
        //private variables
        private $name;
        private $batch;
        const STRING = "This is a simple constant String ";
        //COnstructor 
        function __construct($name , $batch) {
            $this->name = $name;
            $this->batch = $batch;
        }
        //to return the data
        function getName(){
            echo "Name is {$this->name} and batch is {$this->batch}";

        }
    }
    $test = new Test("Shiv Shankar",2020);
    echo Test::STRING;
    $test->getName();
//Abstract class 
    abstract class Test1{
        abstract public function myFun() : string ;

    }
//Extending the abstract class
    class Test2 extends Test1{
       
        //overridding the abstract function
        public function myFun() : string{
            return "This is just the overridden function";
        }

    }
    $test1 = new Test2();
    echo $test1->myFun();


?>