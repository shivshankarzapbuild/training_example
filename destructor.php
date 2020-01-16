<?php

//class declaration
class Test3 {

    private $name;
    private $batch;

     function __construct($name , $batch){
         $this->name = $name;
         $this->batch = $batch;
    }
    //Destructor
    function __destruct(){
        echo "Name is {$this->name} and batch is {$this->batch}";
    }

}
//object declaration
$test = new Test3("Shivshankar",2020);
?>