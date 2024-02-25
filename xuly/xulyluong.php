<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 if(isset($_POST['sualuong'])){
     $tennv = $_POST['tennv'];
     $luong = $_POST['luong'];
     $thang = $_SESSION['thang'];
     $thuong = $_POST['thuong'];
     $phat = $_POST['phat'];  
    $sql_sua = "UPDATE tbl_nhanvien SET tennv = '".$_POST['tennv']."',luong = '".$_POST['luong']."',thang = '".$_POST['thang']."'
    ,luongthuong = '".$_POST['thuong']."',luongtru = '".$_POST['phat']."' WHERE id_nhanvien = '".$_GET['id']."'";
    $query_sua = mysqli_query($mysqli,$sql_sua);
    header("Location:../index.php?quanly=quanliluong$_GET[idpb]");
 }
?>