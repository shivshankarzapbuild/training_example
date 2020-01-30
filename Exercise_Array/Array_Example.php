<?php 

$color = array('white', 'green', 'red');

foreach($color as $color_name){
    echo "$color_name,";
}

foreach($color as $color_name){
    
    echo "<li>$color_name</li>";

}
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach($ceu as $country=>$capital){
    echo "<br> The capital of $country is $capital";
}

function callbackfunction($value,$key)
{
echo "<br>$key : $value"."\n";
}

$json = '{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }}';
    $value = json_decode($json,true);
    echo "<br>";

    array_walk_recursive($value,"callbackfunction");

    $arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    
    $count = count($arr);
    sort($arr);
    $sum = 0;
    echo "<br>Sorted Array is :";
    for($i=0;$i<$count;$i++){

        echo "$arr[$i] ";
        
    }
    for($i=0;$i<$count;$i++){
        $sum = $sum + $arr[$i];

    }
    $average = $sum/$count;
    echo "<br>Average Value of Temperature is ".$average;
    echo "<br>List of seven lowest temperature is : ";
     
    for($i=0;$i<7;$i++){
         echo "$arr[$i] ";
     }
    
     echo "<r>bList of seven highest temperature is :";

     for($i = $count-1;$i>$count-7;$i-- ){
         
        echo "$arr[$i] ";
     }


     echo "<br>The Numbers which are divisible by 4 between 200 to 250 are:";

     for($i =200;$i<250;$i++){
         if($i%4==0){
             echo "$i ";
         }
     }






?>