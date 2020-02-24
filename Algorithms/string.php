<?php

    $str = "THIS IS A SENTENCE";
    $i = 0;
    $stringArray = array();
    $charArray = array();

    

    $arr = explode(" ",$str);
  //  print_r($arr);

    foreach($arr as $strings){
        echo $strings . " ";
        $stringArray[$i] = $strings;
        $i++;
    }

    for($j = 0;$j<$i;$j++){
       // echo $stringArray[$j];
        $count = count($stringArray[$j]);
         for($k=0;$k<$count;$k++){
            $charArray = str_split($stringArray[$j]);
            //print_r($charArray);
         }
         

        
           
    }
    print_r($charArray);


    

    
   /* for($i =0;$i<$length;$i++){
       $letters = str_split($strings[$i]);
       echo $letters;
    } */


?>