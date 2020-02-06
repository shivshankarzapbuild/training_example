<!DOCTYPE html>
<html>
    <head>
        <title>
            Database Example
        </title>
    </head>
    <body>

    
        <?php require_once "database.php" ?>

        <?php

            // database variables 
                $db = "test";
                $username = "root";
                $pass = "admin";
                $host = "localhost";
                //$id = "";


                $conn = new mysqli($host,$username,$pass,$db);
                // if(!$conn){
                //     echo "Not connected" . mysqli_error($conn);
                // }
                // else{
                //     echo "Connected";
                // }
                
                $sql = "select * from test_table;";
                $result = mysqli_query($conn,$sql);

                // while($row = mysqli_fetch_array($result)){
                //     $id = $row["id"];
                //     $username = $row["username"];
                //     $email = $row["email"];
                //     $pass = $row["password"];
                // }
                // if (!$result) {
                //     printf("Error: %s\n", mysqli_error($conn));
                //     exit();
                // }

               // echo $id." <br>".$username."<br>".$email."<br>".$pass;
                // $row = $result -> fetch_assoc();

            //  pre_r($result->fetch_assoc());
            //  pre_r($result->fetch_assoc());
             

            // function pre_r( $array ){
            //     echo "<pre>";
            //     print_r($array);
            //     echo "</pre>";
            // }

            // while($row = $result->fetch_assoc()){
            //     echo $row["id"]. "<br>";
            //     echo $row["username"]. "<br>";
            //     echo $row["email"]. "<br>";
            //     //echo $row["id"];
            // }

            //print_r($row);
        ?>
    <center>
        <table style="width:70%;border:1px solid black;">
                <!-- for showing the data in the tabulaer form  --> 
                <thead>
                    <tr > 
                    <th style="border:1px solid black;">ID  </th>
                    <th style="border:1px solid black;">Name </th> 
                    <th style="border:1px solid black;">Email </th>
                    <th colspan="2" style="border:1px solid black;">Action</th>
                    </tr>

                    <?php
//For fetching the data from the database and showing it in the tabular form 
                    while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td style="border:1px solid black;"> <?php echo $row["id"]; ?> </td>
                        <td style="border:1px solid black;"> <?php echo $row["username"];?> </td>
                        <td style="border:1px solid black;"> <?php echo $row["email"]; ?> </td>
                        <td>
                         <a href="databaseExample.php?edit=<?php echo $row["id"]; ?>"> EDIT</a>
                         <a href="database.php?delete=<?php echo $row["id"]; ?>">DELETE </a>
                         </td>
                         

                    </tr>
                    <?php endwhile; ?>

                </thead>
        </table>

        </center>
        <center style="width:70%;">
        <div >
        <form method="POST" action="database.php" >
            
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <span>NAME</span><br>
            <input type="name" name="name" placeholder="name" value= "<?php echo $name2; ?>" required/><br>
            <span>EMAIL</span><br>
            <input type="email" name="email" placeholder="email" value= "<?php echo $email2; ?>" required/><br>
            <span>PASSWORD</span><br>
            <input type="password" name="password" placeholder="password" value= "<?php echo $password2; ?>" required/><br><br><br>
           
           <!-- a flag for showing the update or the save button as the the user demands -->
            <?php if($update == true): ?>

            <button type="submit" name="update"> Update </button>
                <?php else : ?>
            <button type="submit" name="save">Save</button>
                <?php endif; ?>


        </form>
        </div>
    </center>
    </body>
</html>