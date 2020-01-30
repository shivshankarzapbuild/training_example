<?php 

    //operators and the conditional statement

    class Student{

        //declare the first name and last name variable
        private $First;
        private $Last;

        //Constructor for the assignment of the first name and the last name
        public function __construct($first, $last){
            $this->First = $first;
            $this->Last = $last;
        }

        // function for the concatanation of the first name and last name

        public function setName(){

            echo "The Name of the Client is : ".$this->First." ".$this->Last;
        } 

    }

    // Object made and constructor called
    $stu = new Student("Shiv Shankar","Prasad");
    $stu->setName();

    // Second class for the control statement and the loop statement
    class Numbers{
        private $Number1,$Number2;

        //constructor defined and the value is assigned to the private variables
        public function __construct($number1,$number2){

            $this->Number1 = $number1;
            $this->Number2 = $number2;

        }
        //Function for the comparision of the two numbers using if control statement

        public function comparision(){
            if($this->Number1>$this->Number2){
                echo "<br>Number 1 is greater ".$this->Number1;

            }else {

                echo "<br>Number2 is greater" . $this->Number2;
            }

        }

        //function for the listing of numbers how much it is greater than other using
        //loop statement
        public function greater(){
            echo "<br>Numbers starting from $this->Number1 is";
            
            for($i=$this->Number1;$i<=$this->Number2;$i++){

                echo " $i";
            }
        }
        //Function for using the do while function just for example
        public function dowhile(){
            $first = $this->Number1;
            
            do{
                echo "<br> $this->Number1";
                $this->Number1++;
            }while($this->Number1<$this->Number2);
        }
        
        //
        public function whileFunction(){

            while($first<=$this->Number2){
                echo "<br>".$this->Number2/$first;
                $first++;
            }
        }
    }

    //Numbers passed into the constructor 
    $num = new Numbers(15,24);

    //Methods called
    $num->comparision();
    $num->greater();
    $num->dowhile();
    $num->whileFunction();

?>