<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 if(isset($_POST['themtvcv'])){
    $sql = "INSERT INTO tbl_thanhviencv (id_ten,id_cv,nguoithem,thoigian) VALUES ('".$_POST['nv']."','".$_GET['id']."','".$_SESSION['id_admin']."','".$now."')";
    $kq = mysqli_query($mysqli,$sql);
    header("Location:../index.php?quanly=congviec");
 }else{
    $idx = $_GET['idx'];
    $sql_xoa = "DELETE FROM tbl_thanhviencv WHERE id_tvcv = '$idx'";
    $kq_xoa = mysqli_query($mysqli,$sql_xoa);
    header("Location:../index.php?quanly=xemthanhviencv&id=$_GET[id]");
 }
?>