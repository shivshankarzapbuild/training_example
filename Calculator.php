<?php 

class Calculator{

    //First number and the  second number
    private $firstNumber;
    private $secondNumber;

	//constructor for the assignment of values
  	 public function  __construct($firstNumber,$secondNumber){

   		 $this->firstNumber = $firstNumber;
   		 $this->secondNumber = $secondNumber;
   		}
	//to add the numbers
   	public function add(){
       return $this->firstNumber+$this->secondNumber;
   		}
	// to subtract the numbers
    public function subtract(){
    return $this->firstNumber-$this->secondNumber;
		}	

	//to multiply the numbers
	public function multiply(){
    	return $this->firstNumber*$this->secondNumber;
	}

	// to divide the numbers
	public function divide(){
    	if($this->secondNumber == 0){
       		 return "Divide by zero Error";
    	}
    	else{
    		return ($this->firstNumber/$this->secondNumber);
    		}
    }

    //to find the square root of the numbers
    public function squareRoot(){
        return sqrt($this->firstNumber);

    }
}



?>


