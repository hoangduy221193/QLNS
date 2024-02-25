<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 if(isset($_POST['themnv'])){
    $tennv = $_POST['tennv'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    $trangthai = $_POST['trangthai'];
    $phongban = $_POST['phongban'];
    $chucvu = $_POST['chucvu'];
    $trinhdo = $_POST['trinhdo'];
    //xulyhinhanh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh_time = time().'_'.$hinhanh;
    $luong = $_POST['luong'];
    $loainv = $_POST['loainv'];
    $nguoithem =$_SESSION['id_admin'];
    $sql_them = "INSERT INTO tbl_nhanvien (tennv,ngaysinh,gioitinh,diachi,sodienthoai,taikhoannv,matkhau,trangthai,phongban,chucvu,trinhdo,bangcap,luong,luongthuong,luongtru,
    loainv,thoigianthem,thoigiannghi,nguoithem) VALUES ('$tennv','$ngaysinh','$gioitinh','$diachi','$sodienthoai','$taikhoan','$matkhau','$trangthai','$phongban','$chucvu'
    ,'$trinhdo','$hinhanh_time','$luong',0,0,'$loainv','$now',0,'$nguoithem')";
    $kq = mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'bangcap/'.$hinhanh_time);
    header('location:../index.php?quanly=themtaikhoan');
 }else if(isset($_POST['suanv'])){
    $id = $_GET['id'];
     $sql_sua = "UPDATE tbl_nhanvien SET tennv = '".$_POST['tennv']."',ngaysinh = '".$_POST['ngaysinh']."',gioitinh = '".$_POST['gioitinh']."',taikhoannv = '".$_POST['taikhoan']."'
     ,matkhau = '".$_POST['matkhau']."',trangthai = '".$_POST['trangthai']."' WHERE id_nhanvien = '$id'";
     $kq_sua = mysqli_query($mysqli,$sql_sua);
     header('location:../index.php?quanly=danhsachtaikhoan');
}else if(isset($_POST['suattnv'])){
   $idttnv = $_GET['idttnv'];
   $hinhanh = $_FILES['hinhanh']['name'];
   $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
   $hinhanh_time = time().'_'.$hinhanh;
   if($hinhanh !=''){
      move_uploaded_file($hinhanh_tmp,'bangcap/'.$hinhanh_time);
      $sql_suattnv = "UPDATE tbl_nhanvien SET tennv ='".$_POST['tennv']."',phongban ='".$_POST['phongban']."',chucvu ='".$_POST['chucvu']."',trinhdo ='".$_POST['trinhdo']."',bangcap ='".$hinhanh_time."',
      loainv ='".$_POST['loainv']."' WHERE id_nhanvien = '$idttnv'";
      $sql_anh = "SELECT * FROM tbl_nhanvien WHERE id_nhanvien = '$_GET[idttnv]' LIMIT 1";
      $query_anh = mysqli_query($mysqli,$sql_anh);
      while($row_anh = mysqli_fetch_array($query_anh)){
         unlink('bangcap/'.$row_anh['bangcap']);
      }
   }else{
      $sql_suattnv = "UPDATE tbl_nhanvien SET tennv ='".$_POST['tennv']."',phongban ='".$_POST['phongban']."',chucvu ='".$_POST['chucvu']."',trinhdo ='".$_POST['trinhdo']."',
      loainv ='".$_POST['loainv']."' WHERE id_nhanvien = '$idttnv'";
   }
   mysqli_query($mysqli,$sql_suattnv);
   header('location:../index.php?quanly=thongtinnhanvien');
}else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM tbl_nhanvien WHERE id_nhanvien = '$id'";
    $kq_xoa = mysqli_query($mysqli,$sql_xoa);
    while($row = mysqli_fetch_array($kq_xoa)){
        unlink('bangcap/'.$row['bangcao']);
     }
    header('location:../index.php?quanly=danhsachtaikhoan1');
 }
 
?>