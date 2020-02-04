
<?php

  if(!empty($_FILES['filetoupload']))
  {
    $path = "/var/www/html/training_examples/FileHandling/";
    $path = $path . basename( $_FILES['filetoupload']['name']);
    //echo $path;
   
    if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['filetoupload']['name']). 
      " has been uploaded";
    }

    else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>