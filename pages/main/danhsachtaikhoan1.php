<?php
$sql_lietke = "SELECT * FROM tbl_nhanvien,tbl_admin WHERE tbl_nhanvien.nguoithem = tbl_admin.id_admin 
ORDER BY tbl_nhanvien.id_nhanvien DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form class="form-inline" action="index.php?quanly=timkiemtk" method="POST">
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
<div class="container mt-4">  //aagi
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Liệt kê danh sách nhân viên đang làm
    </h6>
    <div class="d-flex justify-content-center mt-3" style="padding: 10px;">
        <a href="index.php?quanly=danhsachtaikhoan" class="btn btn-primary mr-2">Tài khoản còn hoạt động</a>
        <a href="index.php?quanly=danhsachtaikhoan2" class="btn btn-danger">Tài khoản đã nghỉ việc</a>
        <form method="POST" action="pages/main/tkconhoatdong.php" style="margin-left: 5px;">
            <button name="btnExport" class="btn btn-success" type="submit">Xuất file excel tài khoản còn hoạt
                động</button>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Họ Và Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Ngày Tạo</th>
                    <th>Người Tạo</th>
                    <th>Giới Tính</th>
                    <th>Trạng Thái</th>
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
                    <td><?php echo $row['ngaysinh'] ?></td>
                    <td><?php echo $row['taikhoannv'] ?></td>
                    <td><?php echo $row['matkhau'] ?></td>
                    <td><?php echo $row['thoigianthem'] ?></td>
                    <td><?php echo $row['ten'] ?></td>
                    <td><?php if($row['gioitinh']==1){
                echo 'Nam';
            }else{
                echo 'Nữ';
            } ?></td>
                    <td><?php if($row['trangthai']==0){
                echo 'Hoạt động';
            }else{
                echo 'Nghỉ việc';
            } ?></td>
                    <td>
                        <a class="btn btn-warning"
                            href="index.php?quanly=suanv&id=<?php echo  $row['id_nhanvien'] ?>">Sửa</a>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>