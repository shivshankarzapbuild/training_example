<center>
<?php
extract($_POST);

    class ChessBoard{

        //private variable number for the number of rows in the board
        private $number;
        //html unicode for black and white boxes
        STATIC $BLACK = "&#9724";
        STATIC $WHITE = "&#9723";
        //constructor for assigning the number of rows in the private variable
        public function __construct($number){
            $this->number = $number;
        }
        //function to generate the boxes
        public function generateBoxes(){

            
            for($i=0;$i<$this->number;$i++)
                {
                    for($j=0;$j<$this->number/2;$j++){

                    
                        if($i%2===0){

                            echo "<span style='font-size:60px;'>".html_entity_decode(self::$BLACK)."</span>";
                            echo "<span style='font-size:58px;'>".html_entity_decode(self::$WHITE)."</span>";

                         }
                        else{
                            echo "<span style='font-size:58px;'>".html_entity_decode(self::$WHITE)."</span>";
                            echo "<span style='font-size:60px;'>".html_entity_decode(self::$BLACK)."</span>";
                        }
                    }
                    echo "<br>";
                }
            }
    }
//number 
   
    $eight = new ChessBoard($numberOfRows);
    $eight->generateBoxes();

?>
</center>
<!DOCTYP html>
<!-- FOr the GUI part of  the page -->
<html>
	<head>
		<title>CHESS BOARD</title>
		
	</head>
	<body>
        <!-- form for getting the numbers and showing the result -->
		<form method="post">
		
                <input type="number" name="numberOfRows" placeholder="Enter Number of rows" value="<?php echo $numberOfRows; ?>"/>
                <input type="submit" name="submit" value="generate" required/>
			 
			
		</form>
	</body>
</html>

