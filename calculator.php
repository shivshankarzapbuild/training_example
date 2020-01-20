<?php 

//for getting all values from the post method on the same page
extract($_POST);

class Calculator{

    //First number and the second number
    private $firstNumber;
    private $secondNumber;

//constructor for the assignment of values
   public function  __construct($fn,$sn){

    $this->firstNumber = $fn;
    $this->secondNumber = $sn;
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
    return $this->firstNumber/$this->secondNumber;
    }
}

//to find the square root of the numbers
public function squareRoot(){

    
    return sqrt($this->firstNumber);

}
}

//when the submit button is clicked or for the post method 
if(isset($save))
{
    //Constructor called for the assignment of the value
    $calc = new Calculator($fn,$sn);
    
    switch($ch)
	{
        
		case '+':
		    $res=$calc->add();
		break;
		
		case '-':
		    $res=$calc->subtract();
		break;
		
		case '*':
		    $res=$calc->multiply();
        break;
        
        case '/':
            $res = $calc->divide();
        break;
        
        case 'root': 
            $res = $calc->squareRoot();
		
	}
	
}

?>


<!DOCTYP html>
<!-- FOr the GUI part of the page -->
<html>
	<head>
		<title>Calculator</title>
		
	</head>
	<body>
        <!-- form for getting the numbers and showing the result -->
		<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
			
			<tr>
				<th>Enter your First num</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Enter your Second num</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>

                <!-- for the selection of the operator -->
				<select name="ch">
					<option>+</option>
					<option>-</option>
                    <option>*</option>
                    <option>/</option>
                    <option>root</option>
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>