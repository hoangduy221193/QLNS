<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 if(isset($_POST['themnhom'])){
     $tennhom = $_POST['tennhom'];
     $mota = $_POST['mota'];
     $nguoitao = $_SESSION['id_admin'];
     $soluong = $_POST['soluong'];
     $duan = $_POST['duan'];
     $thongtinlienlac = $_POST['thongtinlienlac'];
     $sql_them = "INSERT INTO tbl_nhomnhanvien (ten_nhom,mo_ta,ngaytao,nguoitao,soluongthanhvien,ngaycapnhap,duanlienquan,thongtinlienlac) 
     VALUES ('".$tennhom."','".$mota."','".$now."','".$nguoitao."','".$soluong."','".$now."','".$duan."','".$thongtinlienlac."')";
     mysqli_query($mysqli,$sql_them);
     header('Location:../index.php?quanly=lietkedanhsachnhom');
 }else if(isset($_POST['suanhom'])){
    $sql_sua = "UPDATE tbl_nhomnhanvien SET ten_nhom = '".$_POST['tennhom']."',mo_ta = '".$_POST['mota']."',soluongthanhvien = '".$_POST['soluong']."'
    ,ngaycapnhap = '".$now."',duanlienquan = '".$_POST['duan']."',thongtinlienlac = '".$_POST['thongtinlienlac']."' WHERE id_nhom = '".$_GET['id']."'";
    $query_sua = mysqli_query($mysqli,$sql_sua);
    header('Location:../index.php?quanly=lietkedanhsachnhom');
 } else {
     $id=$_GET['id'];
     $sql_xoa = "DELETE FROM tbl_nhomnhanvien WHERE id_nhom = '".$id."'";
     $query = mysqli_query($mysqli,$sql_xoa);
     header('Location:../index.php?quanly=lietkedanhsachnhom');
 }
?>