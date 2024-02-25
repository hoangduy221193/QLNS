<?php
$sql_lietke = "SELECT * FROM tbl_nhanvien,tbl_admin WHERE tbl_nhanvien.nguoithem = tbl_admin.id_admin 
ORDER BY tbl_nhanvien.id_nhanvien DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form class="form-inline" action="index.php?quanly=timkiemttnv" method="POST">
                <div class="input-group w-100">
                    <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên nhân viên "
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Quản lí nhân viên</h6>
    <div class="d-flex justify-content-center mt-3" style="padding: 10px;">
    <form method="POST" action="pages/main/export.php">
        <button name="btnExport" class="btn btn-success" type="submit">Xuất file excel</button>
    </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Họ Và Tên</th>
                    <th>Phòng ban công tác</th>
                    <th>Chức vụ</th>
                    <th>Trình độ chuyên môn</th>
                    <th>Bằng cấp</th>
                    <th>Loại nhân viên</th>
                    <th>Quản lí</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke)) {
            if($row['trangthai']==0){
          $i++;
        ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['tennv'] ?></td>
                    <td><?php if($row['phongban']==0){
                         echo 'Phòng Nhân Sự';
                    }else if($row["phongban"]==1){
                        echo 'Phòng Kế Toán';
                    } else if($row['phongban']==2){
                        echo 'Phòng Kinh Doanh';
                    }else if($row['phongban']==3){
                        echo 'Phòng Công Nghệ Thông Tin';
                    }else if($row['phongban']==4){
                        echo 'Phòng Sản Xuất';
                    }else if($row['phongban']==5){
                        echo 'Phòng Quảng Cáo và Tiếp Thị';
                    }else if($row['phongban']==6){
                        echo 'Phòng Nghiên Cứu và Phát Triển';
                    }else{
                        echo 'Phòng Tổ Chức Sự Kiện';
                    
                    } ?></td>
                    <td><?php if($row['chucvu']==0){
                            echo 'Trưởng Phòng';
                    }else{
                        echo 'Nhân Viên';
                    } ?></td>
                    <td><?php echo $row['trinhdo'] ?></td>
                    <td><img src="xuly/bangcap/<?php echo $row['bangcap'] ?>" width="150px"></td>
                    <td><?php if($row['loainv']==0){
                            echo 'Nhân Viên Nhân Sự';
                    }else if($row['loainv']==1){
                        echo 'Nhân Viên Kế Toán';
                    }else if($row['loainv']==2){
                        echo 'Nhân Viên Kinh Doanh';
                    }else if($row['loainv']==3){
                        echo 'Nhân Viên Công Nghệ Thông Tin';
                    }else if($row['loainv']==4){
                        echo 'Nhân Viên Sản Xuất';
                    }else if($row['loainv']==5){
                        echo 'Nhân Viên Quảng Cáo và Tiếp Thị';
                    }else if($row['loainv']==6){
                        echo 'Nhân Viên Nghiên Cứu và Phát Triển';
                    }else if($row['loainv']==7){
                        echo 'Nhân Viên Tổ Chức Sự Kiện';
                    } ?></td>
                    <td>
                        <a class="btn btn-warning"
                            href="index.php?quanly=suattnv&id=<?php echo  $row['id_nhanvien'] ?>">Sửa</a>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>