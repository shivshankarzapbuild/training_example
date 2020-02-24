<?php

// autoload function is called when we try to make the class which does
// not exist in the file and load the file having the class name same as the filename 
function __autoload($className){

    include_once "./classes/$className.php";
}
    // class declaration
    class MyClass{
        // private variable declaration
        private $name;
        private $batch;

        //static variable for counter
        static $counter = 0;

        //constructor defining
        public function __construct($name , $batch){
            $this->name = $name;
            $this->batch = $batch;
            self::$counter++;

        }

      /*  public function setName($name1,$batch1){
            $this->name = $name1;
            $this->batch = $batch1;

        } */

        // function to show name 
        public function getName(){
            echo "<br>The name is $this->name and batch is $this->batch";
        }

        //call magic function happens when the function in the argument does not exist
        public function __call($function,$argument){

            echo "<br>Tried to call $function() with $argument and failed  __call function";
        }
         //get is called when an undefined variable is being called
        public function __get($arg){
            
            echo "<br>Tried to get $arg variable value and failed __get function";

        }
        // set is called when we try to set value of variable which does not exist
        public function __set($arg1,$arg2){
            echo "<br>Trying to set $arg1 and failed and the value was $arg2 __set function ";

        }
        //isset is called when unset property is called
        public function __isset($name) {

            echo "<br>called to unset property $name __isset function";
        }
        //unset is called when an inaccicible property or unavailable property is trying to be unset
        public function __unset($name){

            echo "<br> Trying to unset the unavailable or inaccessible property $name __unset function";
        }

        //sleep method called when serialize the data

     public function __sleep(){

        $this->batch = 2021;
        echo "__sleep function";
            return ['batch'];
        }

        //wake up method 
        public function __wakeup(){
            
            echo "<br>I am waking up  __wakeup function";
            
        }
        //this method is called when we try to print the object of the class 
        public function __toString(){
            return "<br> Name is $this->name and batch is $this->batch __toString Function";
        }
        
        //this method is called when we try to call our object as method
        public function __invoke(){
            
            echo "trying to call object as method __invoke method "; 

        }
        //calling the clone function to see how many object has been cloned
        //using clone method
        public function __clone(){
            self::$counter++;
            

        }

    }

    // Object created and constructor called
    $mycls = new MyClass("Shiv Shankar ",2020);
    
    // __call function called if setName does not exist
    $mycls->setName("Pulok ",2020); 
    
    
    echo "<br>";

    $mycls->getName();

    //__get function called
    echo "<br>";
    echo $mycls->firstName;

    //__set function called

    echo "<br>";
    $mycls->firstName = "Shiv";

    //__isset function called because calling to unset variable
    
    echo "<br>";
    isset($mycls->name);

   // __unset function called because unsetting the unset variable
   
   echo "<br>";
   unset($mycls->name);

    //serialize the data 

    echo "<br>";
    $serial = serialize($mycls);
    echo "<br>";
    echo $serial;

    //unserialize the object 
    
    
    echo "<br><br>";
    $unSerial = unserialize($serial);
    echo "<br>";
    var_dump($unSerial);

    //calling __to string 
    echo "<br>";
    echo $mycls;
    echo "<br>";

    //calling __invoke
    echo "<br>";
    echo $mycls();

    // Calling to the __clone method 

    $myclass = clone $mycls;
    echo "<br>";
    echo "__clone function";
    echo "<br>";

    //showing  the number of copies of function cloned and made new

    echo MyClass::$counter; 

    //calling to autoload function because of making of undefined classes of the 
    // file i.e. classes ABC,DEF,GHI  does not exist in the file 

    $abc = new ABC();
    $abc->show();
    $def = new DEF();
    $ghi = new GHI();


    echo "<br>";

?>
