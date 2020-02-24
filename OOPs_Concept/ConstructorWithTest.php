<?php

    class ConstructorExample{
        private $name;
        
        public function getName($name){

           $this->name = $name;
        }

        public function setName(){
            
            echo "<br>Name is ".$this->name;
        }


    }

    $const = new ConstructorExample();
    $const->getName("Shiv Shankar");
     $const->setName();
   

?>