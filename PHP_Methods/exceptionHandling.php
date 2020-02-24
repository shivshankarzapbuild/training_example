<?php

    class MyClass extends Exception{

        private $number1,$number2;
        public function __construct($value1,$value2){
            $this->number1 = $value1;
            $this->number2 = $value2;
        }
        public function divide(){
            try{
                $value = $this->number1/$this->number2;
            }catch(Exception $e){

                echo "<br>Divide by zero error" . $e->getMessage();
            }
        }   
    }

    $myclss = new MyClass(5,0);
    $myclss->divide();
?>