<?php
$sql_lietke = "SELECT * FROM tbl_thanhviencv,tbl_admin,tbl_congviec,tbl_nhanvien WHERE tbl_thanhviencv.nguoithem = tbl_admin.id_admin AND 
tbl_thanhviencv.id_cv = tbl_congviec.id_cv AND tbl_thanhviencv.id_ten = tbl_nhanvien.id_nhanvien AND tbl_thanhviencv.id_cv = '$_GET[id]'";
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
                    <th>Công việc</th>
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
                    <td><?php echo $row['tencongviec'] ?></td>
                    <td><?php echo $row['ten'] ?></td>
                    <td><?php echo $row['thoigian'] ?></td>
                    <td>
                        <a class="btn btn-danger" href="xuly/themtvcv.php?idx=<?php echo  $row['id_tvcv'] ?>&id=<?php echo  $row['id_cv'] ?>">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>