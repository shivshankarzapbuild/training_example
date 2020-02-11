<?php 

class Examples{



    public function swap($a,$b){
        $a= $a+$b;
        $b= $a-$b;
        $a = $a-$b;

        echo "value of a = " . $a;
        echo "value of b = " . $b;

    }

    public function weekday(){
        $date = date_create();

        $week_number = date_format($date,"W");

        echo $week_number;

    }

    public function writefile(){

        $name = "Shiv shankar";

        $file = fopen("details.txt","w+");

        fwrite($file,"Hello ".$name);

        fclose($file);

        $file = fopen("details.txt","r");

        echo fread($file,filesize("details.txt"));

    } 

    public function concatanate(){

        $str1 = "ZAPBUILD";
    $str2 = "TRAINEE";

    $length = strlen($str1);
    $length2 = strlen($str2);

   // $str3 = array();
    $i =0;
    $j=0;
    // $k =0;

    //  print_r(str_split($str1,1));
    //  print_r(str_split($str2,1));

     //echo $length .  $length;
    

    for(;$i<=$length,$j<=$length2;$i++,$j++){
        
        echo $str1[$i].$str2[$j];
        // // }elseif($i>$j){
        //     $str3[$k]=$str2[$j];
        //     $j++;
        //     $k++;
        // }
    }

    } 

    public function unlink_unset(){

        session_start();
        
        $_SESSION[""];
    }
}

$swap = new Examples();

$swap->swap(10,12);
$swap->writefile();
$swap->weekday();
$swap->concatanate();
?>