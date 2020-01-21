<?php

function __autoload($className){
    include_once "$className.php";
}

//$var = "<span>&#8730</span>"

//when the submit button is clicked or for the post method 
if(isset($_POST['submit']))   

{
   // echo "inside isset" . $_POST['submit'];
    //Constructor called for the assignment of the value
    $calc = new Calculator($_POST['firstNumber'],$_POST['secondNumber']);
   // echo $_POST['firstNumber'];
    
    switch($_POST['choice'])
	{
        
		case 'ADD':
            $_POST['result']=$calc->add();
           // echo $var;
            break;
           // echo $_POST['result'];
            //header('location:calculator.html',15);
	
		
		case 'SUBTRACT':
            $_POST['result']=$calc->subtract();
           // echo $_POST['result'];
		    break;
		
		case 'MULTIPLY':
            $_POST['result']=$calc->multiply();
           // echo $_POST['result'];
            break;
        
        case 'DIVIDE':
            $_POST['result'] = $calc->divide();
            //echo $_POST['result'];
            break;
        
        case 'SQUARE_ROOT': 
            $_POST['result'] = $calc->squareRoot();
           // echo $_POST['result'];
            break;
        
        default: 
          //  echo "inside switch";
            //echo $_POST['choice'];          
		
	}
	
}
?>
<!DOCTYP html>
<!-- FOr the GUI part of the page -->
<html>
	<head>
        <title>Result</title>
        <script type="text/javascript">
        var count = 6;
var redirect = "calculator.html";

var idnumber = <?php echo(mt_rand(100000,999999)); ?> ;
//console.log(idnumber);
var count = 6;
 
function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
        count--;
        timer.innerHTML = "This page will redirect to Calculator in "+count+" seconds.";
        setTimeout("countDown()", 1000);
    }else{
        window.location.href = redirect;
    }
}

</script>
 
	</head>
	<body>
        <!-- form for getting the numbers and showing the result -->
		<form>
		<table border="1" align="center">
                <tr>
                    <th>Result</th>
                    <th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo $_POST['result']?>"/></th>
                    <span id='timer'><script type='text/javascript'>countDown();</script>
                </tr> 
				
			</tr>
		</table>
		</form>
	</body>
</html>