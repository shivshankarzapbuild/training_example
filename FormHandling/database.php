<?php

    $db = "test";
    $username = "root";
    $pass = "admin";
    $host = "localhost";

    $conn = mysqli_connect($host,$username,$pass,$db);
	//$conn2 = mysqli_connect($host,$user,$password,$db2);
	
	if ($conn) {

		echo "connected";
	}

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $id= $_POST["id"];
        $name= $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];


       // echo "$id  $name  $email  $password";

        $sql = "INSERT INTO test_table(id,username,email,password) VALUES ($id,'$name','$email','$password')";

        $query = mysqli_query($conn,$sql);

        if($query){
            echo "Inserted ";
        }
        else {
            echo "not inserted".mysqli_error($conn);
        }
        }
?>