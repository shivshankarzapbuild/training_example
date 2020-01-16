<?php

    class Test {
        private $name;
        private $batch;

        public function setData($name , $batch)
         {
            $this->name = $name;
            $this->batch = $batch;
         }
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

     $test = new Test();
    echo $test->setData("shivshankar",2020);
    echo $test->getName();
    echo " ". $test->getBatch();

?>