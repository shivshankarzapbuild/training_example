<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

     //   echo "This is just inside the request method ";
        
        // echo " " . $_POST["username"];
        // echo " " . $_POST["password"];
        //print_r($_POST);

        // echo " ".$_POST[""];
        $email = $_POST['email'];
        list ($user, $domain) = explode('@', $email);
            
        echo "USERNAME = $user  and DOMAIN = $domain";
        if($domain != 'gmail.com'){
            echo " Enter gmail address only";
        }

        echo $isGmail;

       // $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);
        //echo $isValid;



    //     if($_POST["email"] == "SHIVSHANKAR" && $_POST["password"]=="shiv"){

    //         echo "Welcome " . $_POST['username'];

    //     }
      }

?>