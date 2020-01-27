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


    // Now overloading of the function in the 

    class NewClass {

        private $data;
        //simple function defined         
        public function setData($data ){
            $this->data = $data;
            echo "<br>This is the setting data function and the data is = $this->data";
        }

    }
    //New Derived CLass for inheritance and overloading
    class NewClass1 extends NewClass{

        private $name;
        private $batch;
        //same function with different number of arguments
        public function setData($name,$batch ){

            $this->name = $name;
            $this->batch = $batch;

            echo "<br>This is childs data setting function ";
            echo "<br>The name is $this->name and Batch is $this->batch";
        }
         
    }

    
    $newclass = new NewClass();
    $newclass1 = new NewClass1();
    
    $newclass->setData("Test Data");
    $newclass1->setData("ShivShankar ",2020);

?>