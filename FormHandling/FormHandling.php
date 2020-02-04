<?php

    echo "<br>".$_SERVER["SERVER_NAME"];
    echo "<br>".$_SERVER["SERVER_ADDR"];
    echo "<br>".$_SERVER["GATEWAY_INTERFACE"];
    echo "<br>".$_SERVER["SERVER_SOFTWARE"];
    echo "<br>".$_SERVER["SERVER_PROTOCOL"];
    echo "<br>".$_SERVER["REQUEST_METHOD"];
    echo "<br>".$_SERVER["SERVER_SIGNATURE"];
    echo "<br>".$_SERVER["PATH_TRANSLATED"];
    echo "<br>".$_SERVER["SCRIPT_NAME"];
    echo "<br>".$_SERVER["REQUEST_URI"];
    echo "<br>".$_SERVER["PATH_INFO"];
    
    

    // if($_SERVER["REQUEST_METHOD"]=="POST"){

    //  //   echo "This is just inside the request method ";
        
    //     // echo " " . $_POST["username"];
    //     // echo " " . $_POST["password"];
    //     //print_r($_POST);

    //     // echo " ".$_POST[""];
    //     $email = $_POST['email'];
    //     list ($user, $domain) = explode('@', $email);
            
    //     echo "USERNAME = $user  and DOMAIN = $domain";
    //     if($domain != 'gmail.com'){
    //         echo " Enter gmail address only";
    //     }

    //     echo $isGmail;

    //    // $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    //     //echo $isValid;



    // //     if($_POST["email"] == "SHIVSHANKAR" && $_POST["password"]=="shiv"){

    // //         echo "Welcome " . $_POST['username'];

    // //     }
    //   }

?>