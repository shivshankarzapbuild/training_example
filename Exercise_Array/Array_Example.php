<?php 

//Array Exercise quesitions from the w3resources
$color = array('white', 'green', 'red');

foreach($color as $color_name){
    echo "$color_name,";
}

//to show the color name as the list items and using the foreach loop
foreach($color as $color_name){
    
    echo "<li>$color_name</li>";

}
//show the country name and the capital name as the given format
//here is the key element and the data is given as in the array
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach($ceu as $country=>$capital){
    echo "<br> The capital of $country is $capital";
}

// A callback function is needed when we call the array walk recursive function of the 
// array functions of the php
//this function is mainly used for decoding the json data i.e. showing the key value pair
//of the json data

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

    //the array is given as the data product which can be used to find out the 
    // given value.
    $arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    
//int this part we are just counting the data elements in the array
    $count = count($arr);
    //sort function is used for sorting the elements of the array
    sort($arr);

    //sum variable is declared for storing the added value of the element and used when 
    //the average is to be calculated 
    $sum = 0;
    echo "<br>Sorted Array is :";
    for($i=0;$i<$count;$i++){

        echo "$arr[$i] ";
        
    }

    for($i=0;$i<$count;$i++){
        $sum = $sum + $arr[$i];

    }

    //average calculation
        $average = $sum/$count;
        echo "<br>Average Value of Temperature is ".$average;
        echo "<br>List of seven lowest temperature is : ";
        
        //Listing the seven lowest temperature in the array
        for($i=0;$i<7;$i++){
            echo "$arr[$i] ";
        }
    //
    //Now listing the seven highest temperature  
     echo "<r>bList of seven highest temperature is :";

     for($i = $count-1;$i>$count-7;$i-- ){
         
        echo "$arr[$i] ";
     }

     ///here just the numbers which are divisible by the number 4 is listed between 
     // the range 200 to 250
     echo "<br>The Numbers which are divisible by 4 between 200 to 250 are:";

     for($i =200;$i<250;$i++){
         if($i%4==0){
             echo "$i ";
         }
     }






?>