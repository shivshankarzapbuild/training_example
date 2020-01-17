<?php

// creating class 
    class Myclass{

        public function myFunc(){
            echo "Myclass function";
            //self::myFunc();
        }
    } 

    //creating myclass1 for overriding parent definition
    class Myclass1 extends Myclass {
        //overriding the parent definition
        public function myFunc(){
            //calling parent myfunction
            parent::myFunc();

            echo "<br>Myclass1 function";

        }
    }

    $myclass =new Myclass1();
    $myclass->myFunc();
?>