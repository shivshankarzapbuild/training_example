<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Pagination in php
        </title>
    </head>
    <body>
        <?php
            // first time connection
            $conn = mysqli_connect("localhost","root","admin","test");

            //defining the result per page
            $results_per_page = 6;
            
            //selecting the value of table for the first time
            $query = "SELECT * FROM pagination "; 
            
            $result = mysqli_query($conn,$query);

            // var_dump($result);
            
            // total number of results
            $number_of_results =  mysqli_num_rows($result);

            // while($row = mysqli_fetch_array($result)){

            //     echo $row["id"]. " \t" . $row["data"] . "<br>";
            // }

            //Total number of pages
            $number_of_pages = ceil($number_of_results / $results_per_page); 

            //echo $number_of_pages;

            //For getting the page count
            if(!isset($_GET["pages"])){
                $pages = 1;
            }else {

                $pages = $_GET["pages"];
            }


            // Result showing on the currentpage
           $this_page_result = ($pages -1) * $results_per_page;

           //Query with limit of the page 
            $query1 = "SELECT * FROM pagination LIMIT ".$this_page_result.','.$results_per_page; 


            $result1 = mysqli_query($conn,$query1);

            // var_dump($result1);

            //Printing the result on the page
            while ($row = mysqli_fetch_array($result1)){
                echo $row['id'] ."\t ".$row['data'] . "<br>";
            }


            //showing the page number of the pages

            for($pages = 1;$pages <=$number_of_pages;$pages++){

                echo '<a href = "pagination.php?pages='. $pages  . '">' . $pages."  " . '</a>'; 


            }




        ?>
        
    </body>
</html>