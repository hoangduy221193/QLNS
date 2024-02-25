<body>
    <?php
  $sql_qt = "SELECT * FROM tbl_nhanvien  WHERE id_nhanvien = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);
?>
    <form method="POST" action="xuly/xulythemnhanvien.php?id=<?php echo $row['id_nhanvien'] ?>"
        enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="tennv">Tên Nhân Viên</label>
            <input type="text" class="form-control" id="tennv" name="tennv" required
                value="<?php echo $row['tennv'] ?>">
        </div>

        <div class="form-group">
            <label for="ngaysinh">Ngày Sinh</label>
            <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required
                value="<?php echo $row['ngaysinh'] ?>">
        </div>

        <div class="form-group">
            <label for="gioitinh">Giới Tính</label>
            <select class="form-control" id="gioitinh" name="gioitinh" required>
                <option value="1" <?php if ($row['gioitinh'] == '1') echo 'selected'; ?>>Nam</option>
                <option value="2" <?php if ($row['gioitinh'] == '2') echo 'selected'; ?>>Nữ</option>
            </select>
        </div>

        <div class="form-group">
            <label for="taikhoan">Tài Khoản</label>
            <input type="text" class="form-control" id="taikhoan" name="taikhoan" required
                value="<?php echo $row['taikhoannv'] ?>">
        </div>

        <div class="form-group">
            <label for="matkhau">Mật Khẩu</label>
            <input type="password" class="form-control" id="matkhau" name="matkhau" required
                value="<?php echo $row['matkhau'] ?>">
        </div>

        <div class="form-group">
            <label for="trangthai">Trạng Thái</label>
            <select class="form-control" id="trangthai" name="trangthai" required>
                <option value="0" <?php if ($row['trangthai'] == '0') echo 'selected'; ?>>Hoạt động
                </option>
                <option value="1" <?php if ($row['trangthai'] == '1') echo 'selected'; ?>>
                    Không hoạt động</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary" name="suanv">Sửa</button>
    </form>
</body>

</html>