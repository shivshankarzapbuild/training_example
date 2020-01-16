<?php
 
 class Test2
   {
       //private variable
       private $name;
       private $batch;
    // Consttructor
        function __construct($name, $batch)
         {
             $this->name=$name;
             $this->batch = $batch;

         }
         //returning the name value
         function getName()
         {
             return $this->name;

         }
         function getBatch()
         {
             return $this->batch;
         }
   }
//object
   $test = new Test2("SHIVSHANKAR",2020);
   echo " ". $test->getName();
   echo " ". $test->getBatch();

?>