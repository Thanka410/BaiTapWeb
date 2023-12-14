<?php
    session_start();
    include("connect.php");
    $us=$_GET['user'];
    $pw=$_GET['pass'];

    $sql = "SELECT * FROM sinhvien WHERE masv='{$us}' and matkhau='{$pw}'";
    mysqli_query($con, "set names 'utf8'");
    $rs=mysqli_query($con,$sql);
    if(mysqli_num_row($rs)>0){
        $row=mysqli_fetch_array($rs);
        $_SESSION['code']=$row['masv'];
        $_SESSION['info']=$us." - " .$row["hoten"]." - " .$row["lop"];
        echo $us." - " .$row["hoten"]."&nbsp;|&nbsp;<a href=QLSV.php>NEXT</a>";}
    else {
        echo "Bạn nhập thông tin sai!";
        mysqli_free_result($rs);
        mysqli_close($con);
    }
   