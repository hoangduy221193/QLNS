<body>
    <?php
  $sql_qt = "SELECT * FROM tbl_nhanvien  WHERE id_nhanvien = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);
?>
    <form method="POST" action="xuly/xulythemnhanvien.php?idttnv=<?php echo $row['id_nhanvien'] ?>"
        enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="tennv">Tên Nhân Viên</label>
            <input type="text" class="form-control" id="tennv" name="tennv" required
                value="<?php echo $row['tennv'] ?>">
        </div>

        <div class="form-group">
    <label for="phongban">Phòng Ban</label>
    <select class="form-control" id="phongban" name="phongban" required>
        <option value="0" <?php if ($row['phongban'] == 0) echo 'selected'; ?>>Phòng Nhân Sự </option>
        <option value="1" <?php if ($row['phongban'] == 1) echo 'selected'; ?>>Phòng Kế Toán</option>
        <option value="2" <?php if ($row['phongban'] == 2) echo 'selected'; ?>>Phòng Kinh Doanh </option>
        <option value="3" <?php if ($row['phongban'] == 3) echo 'selected'; ?>>Phòng Công Nghệ Thông Tin </option>
        <option value="4" <?php if ($row['phongban'] == 4) echo 'selected'; ?>>Phòng Sản Xuất</option>
        <option value="5" <?php if ($row['phongban'] == 5) echo 'selected'; ?>>Phòng Quảng Cáo và Tiếp Thị </option>
        <option value="6" <?php if ($row['phongban'] == 6) echo 'selected'; ?>>Phòng Nghiên Cứu và Phát Triển </option>
        <option value="7" <?php if ($row['phongban'] == 7) echo 'selected'; ?>>Phòng Tổ Chức Sự Kiện </option>
    </select>
</div>



        <div class="form-group">
            <label for="chucvu">Chức Vụ</label>
            <select class="form-control" id="chucvu" name="chucvu" required>
                <option value="0" <?php if ($row['chucvu'] == '0') echo 'selected'; ?>>Trưởng Phòng</option>
                <option value="1" <?php if ($row['chucvu'] == '1') echo 'selected'; ?>>Nhân Viên</option>
            </select>
        </div>


        <div class="form-group">
            <label for="taikhoan">Trình độ chuyên môn</label>
            <input type="text" class="form-control" id="trinhdo" name="trinhdo" required
                value="<?php echo $row['trinhdo'] ?>">
        </div>

        <div class="form-group">
            <label for="bangcap">Bằng cấp</label>
            <input type="file" class="form-control" id="bangcap" name="hinhanh">
            <img src="xuly/bangcap/<?php echo $row['bangcap'] ?>" width="150px">
        </div>
        <div class="form-group">
            <label for="loainv">Loại nhân viên</label>
            <select class="form-control" id="loainv" name="loainv" required>
                <option value="0" <?php if ($row['loainv'] == '0') echo 'selected'; ?>>Nhân Viên Nhân Sự</option>
                <option value="1" <?php if ($row['loainv'] == '1') echo 'selected'; ?>>Nhân Viên Kế Toán</option>
                <option value="2" <?php if ($row['loainv'] == '2') echo 'selected'; ?>>Nhân Viên Kinh Doanh </option>
                <option value="3" <?php if ($row['loainv'] == '3') echo 'selected'; ?>>Nhân Viên Công Nghệ Thông Tin
                </option>
                <option value="4" <?php if ($row['loainv'] == '4') echo 'selected'; ?>>Nhân Viên Sản Xuất</option>
                <option value="5" <?php if ($row['loainv'] == '5') echo 'selected'; ?>>Nhân Viên Quảng Cáo và Tiếp Thị
                </option>
                <option value="6" <?php if ($row['loainv'] == '6') echo 'selected'; ?>>Nhân Viên Nghiên Cứu và Phát
                    Triển</option>
                <option value="7" <?php if ($row['loainv'] == '7') echo 'selected'; ?>>Nhân Viên Tổ Chức Sự Kiện
                </option>
            </select>
        </div>



        <button type="submit" class="btn btn-primary" name="suattnv">Sửa</button>
    </form>
</body>

</html>