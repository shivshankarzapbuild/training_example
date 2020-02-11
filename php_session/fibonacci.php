<?php

    function fibonacci($number){
        
       // $first = $number;


            if($number == 0){
                return;
            }elseif($number ==1){
                return 1;
            }

            else{
                return (fibonacci($number-1)+fibonacci($number-2));
            }
            
      
               // echo $next;
        
}
     $number = 10;
       for($i =0;$i<=$number;$i++){
           echo fibonacci($i) . " ";
       }


    

?>