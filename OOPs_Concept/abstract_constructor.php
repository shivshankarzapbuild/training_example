<?php
//abstract class 
    abstract class Myclass{
        //this variable cannot be private to be accessed by other class 
        public $name;
        //Abstract class constructor
        public function __construct($name){
            $this->name = $name; 
        }
        //abstract class constructor
        public abstract function Name() : string ;

    }
    //Derived class 1 for person 1 

    class Person1 extends Myclass{

        public function Name() : string{
            return "The name of first person is $this->name";
        } 
    }
    //derived class 2 for person 2
    class Person2 extends Myclass{

        public function Name() : string{
            return "The name of second person is $this->name";

        }
    }

    //objects to call the super constructor or abstract class constructor 
    $person1 = new Person1("Shiv Shankar");
    $person2 = new Person2("Ankit");

    //showing data on console or webpage
    echo $person1->Name();
    echo "<br>".$person2->Name();
    ?>