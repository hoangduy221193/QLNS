<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 if(isset($_POST['themcongviec'])){
     $tencongviec = $_POST['tencongviec'];
     $mota = $_POST['mota'];
     $nguoitao = $_SESSION['id_admin'];
     $soluong = $_POST['soluong'];
     $ngaygiao = $_POST['ngaygiao'];
     $hethan = $_POST['hethan'];
     $sql_them = "INSERT INTO tbl_congviec (tencongviec,mota,nguoitao,soluong,ngaygiao,hethan) 
     VALUES ('".$tencongviec."','".$mota."','".$nguoitao."','".$soluong."','".$ngaygiao."','".$hethan."')";
     mysqli_query($mysqli,$sql_them);
     header('Location:../index.php?quanly=themcongviec');
 }else if(isset($_POST['suacongviec'])){
    $sql_sua = "UPDATE tbl_congviec SET tencongviec = '".$_POST['tencongviec']."',mota = '".$_POST['mota']."',soluong = '".$_POST['soluong']."'
    ,ngaygiao = '".$_POST['ngaygiao']."',hethan = '".$_POST['hethan']."' WHERE id_cv = '".$_GET['id']."'";
    $query_sua = mysqli_query($mysqli,$sql_sua);
    header('Location:../index.php?quanly=congviecdagiao');
 } else {
     $id=$_GET['id'];
     $sql_xoa = "DELETE FROM tbl_congviec WHERE id_cv = '".$id."'";
     $query = mysqli_query($mysqli,$sql_xoa);
     header('Location:../index.php?quanly=congviecdagiao');
 }
?>