<?php 

    session_start();

    if(!isset($_SESSION["name"])){
        $_SESSION["name"] = "shivshankar";
        $_SESSION["name"]["php"] = "shvshankar";
        $_SESSION["counter"] = 1;
    }else{
        $_SESSION["name"] = "ShivShankar";
        $_SESSION["counter"]++;
    }
?>

<html>
<body>
    <?php echo " Your Name is " . $_SESSION["name"]; ?>
    <?php echo "Visitor number = " . $_SESSION["counter"]; ?>
</body>
</html>