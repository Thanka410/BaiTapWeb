<?php
    $_server=$_SERVER['$SERVER_NAME'];
    $user="root";
    $pass="24082004";
    $db="udn";
    $con=mysqli_connect($_server,$user,$pass,$db);
    mysqli_query($con, "set names 'utf8'");
?>