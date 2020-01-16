<?php
    //class declaration
    class Test {
        //private variables
        private $name;
        private $batch;
        //setting values
        public function setData($name , $batch)
         {
            $this->name = $name;
            $this->batch = $batch;
         }
         //returning value
         public function getName()
          {
            return $this->name;
            //return $this->batch;    
          }
          public function getBatch()
           {
               return $this->batch;
           }
    }
//object creation
     $test = new Test();
    echo $test->setData("shivshankar",2020);
    echo $test->getName();
    echo " ". $test->getBatch();

?>