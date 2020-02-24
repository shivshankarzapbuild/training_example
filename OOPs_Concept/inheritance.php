<?php
 //Base Class declaration
 class Base{

    //Private members
    private $name;
    private $batch;
    //constructor
    function __construct($name , $batch){
        $this->name = $name;
        $this->batch = $batch;  
    }
    //Destructor
    public function getData(){
        echo "name is {$this->name} and batch is {$this->batch}";
    }
 } 
 //Derived class extending base 
class Derived extends Base{

    // Derived class function
    public function newFunction(){
        echo "This is Derived class";
    }
}
//object created 
$derived = new Derived("SHIVSHANKAR",2020);

// Message showed
echo " ". $derived->getData();
echo " ". $derived->newFunction();

?>