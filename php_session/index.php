<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

        include "login.php";
        session_start();
        $message = '';
        $fields = array();

        $db = new Database();

        if(isset($_POST["login"])){

            $fields = array(

                'username' => $_POST["email"],
                'password' => $_POST["password"]
            );
        }

       // print_r($fields);

        if($db->validate($fields)){

            if($db->login("login_table",$fields)){

                $_SESSION["username"] = $_POST["email"];
                header("location:homepage.php");

            }else{

                $message = $db->error;
            }

        }else{
            $message = $db->error;
         }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Simple login and logout</title>

    </head>
    <body>
        <form method="POST">
           
    <?php 
        
        if(isset($message)){
            echo "</p>" .$message  ."</p>";
        }
     ?>
            
            <input type="text" name="email" placeholder="Input Email" /><br>
            <input type="password" name="password" placeholder="Input Password"/><br>
            
            <input type="submit" name="login" value="LOGIN" />


            
            
        </form>
    </body>
</html>