<?php

    $update = false;//flag for checking if the user wants to update or just insert in the 
    //database 
    $db = "test";
    $username = "root";
    $pass = "admin";
    $host = "localhost";

    $conn = mysqli_connect($host,$username,$pass,$db);
    echo $_SERVER["QUERY_STRING"];
	//$conn2 = mysqli_connect($host,$user,$password,$db2);
	// var_dump(function_exists('mysqli_connect'));
	// if ($conn) {

	// 	echo "connected";
	// }

    //for saving the data into the database 
    if(isset($_POST["save"])){

        
        $id= $_POST["id"];
        $name= $_POST["name"];
        $email = $_POST["email"];
        $password = sha1($_POST['password']);
       // echo "$id  $name  $email  $password";

        $sql = "INSERT INTO test_table(username,email,password) VALUES ('$name','$email','$password')";

        //for again going into the form table  
        $query = mysqli_query($conn,$sql);

                if($query){
                    header("location:databaseExample.php");
                }
        }

        

        //for deleting the data from the database
        if(isset($_GET["delete"])){
            $id = $_GET['delete'];
            $query = "DELETE FROM test_table WHERE  id = $id";
            $execute = mysqli_query($conn,$query) or die(mysqli_error($conn));
             header("location:databaseExample.php");
        }


        //for showing the data into the form to edit and update it
        if(isset($_GET["edit"])){
            $id = $_GET["edit"];
            $update = true;
            $query1 = "SELECT * FROM test_table WHERE  id = $id";
            $result = mysqli_query($conn,$query1) or die(mysqli_error($conn));
            if(count($result)==1){
                $row = mysqli_fetch_array($result);
                $id2 = $row["id"];
                $name2 = $row["username"];
                $email2 = $row["email"];
                $password2= $row["password"];
            }


        }

        //when the user clicks the update button the all the data is taken and then 
        //it is updated in the database

        if(isset($_POST["update"])){

            $id = $_POST["id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $query = "UPDATE test_table SET username = '$name',email = '$email',password='$password' WHERE id = $id";

            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

            header("location:databaseExample.php");
        }
?>