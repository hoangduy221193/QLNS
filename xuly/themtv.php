<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 if(isset($_POST['themtv'])){
    $sql = "INSERT INTO tbl_thanhvien (id_ten,id_nhom,nguoithem,thoigian) VALUES ('".$_POST['nv']."','".$_GET['id']."','".$_SESSION['id_admin']."','".$now."')";
    $kq = mysqli_query($mysqli,$sql);
    header("Location:../index.php?quanly=themthanhvien");
 }else{
    $idx = $_GET['idx'];
    $sql_xoa = "DELETE FROM tbl_thanhvien WHERE id_tv = '$idx'";
    $kq_xoa = mysqli_query($mysqli,$sql_xoa);
    header("Location:../index.php?quanly=xemthanhvien&id=$_GET[id]");
 }
?>