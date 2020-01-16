<?php
 
 class Test2
   {
       private $name;
       private $batch;

        function __construct($name, $batch)
         {
             $this->name=$name;
             $this->batch = $batch;

         }
         function getName()
         {
             return $this->name;

         }
         function getBatch()
         {
             return $this->batch;
         }
   }

   $test = new Test2("SHIVSHANKAR",2020);
   echo " ". $test->getName();
   echo " ". $test->getBatch();
?>