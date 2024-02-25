<?php
$sql_lietke = "SELECT * FROM tbl_thanhvien,tbl_admin,tbl_nhomnhanvien,tbl_nhanvien WHERE tbl_thanhvien.nguoithem = tbl_admin.id_admin AND 
tbl_thanhvien.id_nhom = tbl_nhomnhanvien.id_nhom AND tbl_thanhvien.id_ten = tbl_nhanvien.id_nhanvien AND tbl_thanhvien.id_nhom = '$_GET[id]'";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="container mt-4">
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Danh sách thành viên</h6>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Nhóm</th>
                    <th>Người thêm</th>
                    <th>Thời gian thêm</th>
                    <th>Quản lí</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke)) {
          $i++;
        ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['tennv'] ?></td>
                    <td><?php echo $row['ten_nhom'] ?></td>
                    <td><?php echo $row['ten'] ?></td>
                    <td><?php echo $row['thoigian'] ?></td>
                    <td>
                        <a class="btn btn-danger" href="xuly/themtv.php?idx=<?php echo  $row['id_tv'] ?>&id=<?php echo  $row['id_nhom'] ?>">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>