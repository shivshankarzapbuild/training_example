<?php

//creates an array
  $names = array("Shivshankar","Ankit","Pulok","Anand");
    
    foreach ($names as $name){

        echo "<br>Name is  ".$name;
    }

    //change the key case to upper 
    //can also change to lower using CASE_LOWER
    echo "<br>";
    $names = array("Shivshankar"=>"22","Ankit"=>"22","Pulok"=>"22","Anand"=>"23");

   print_r(array_change_key_case($names,CASE_UPPER));
 
   //splits an array into specified length

   echo "<br>"; 
   $names = array("Shivshankar","Ankit","Pulok","Anand");

   print_r(array_chunk($names,2));

   //prints the specified value  of the array  array_column
   $a = array(
    array(
      'id' => 3383,
      'first_name' => 'shiv',
      'last_name' => 'shankar',
    ),
    array(
      'id' => 3361,
      'first_name' => 'ankit',
      'last_name' => 'kumar',
    ),
    array(
      'id' => 3376,
      'first_name' => 'pulok',
      'last_name' => 'pandit',
    ),
    array(
        'id'=>3386,
        'first_name'=>'anand',
        'last_name'=>'kumar'
    )
  );
  echo "<br>";
  print_r(array_column($a,'first_name'));

  //array_combine combines two array first array as key and second as values
  //BUt all arrays must be of equal length

  $names = array("Shivshankar","Ankit","Pulok","Anand");
  $age = array("22","22","22","23");
  echo "<br>";

  print_r(array_combine($names,$age));

  //count the number of times elements have occured in the array like A=2 times

  $array = array("A","A","B","V","C","V");
  print_r(array_count_values($array));

  //array_diff prints the difference of the two array only the difference element
  //compares only the values of the array

  $array1 = array("A","B","C","D");
  $array2 = array("A","B","C");
  echo "<br>";
  print_r(array_diff($array1,$array2));

  //array 

?>