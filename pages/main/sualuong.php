<body>
    <?php
  $sql_qt = "SELECT * FROM tbl_nhanvien  WHERE id_nhanvien = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);
?>
    <form method="POST" action="xuly/xulyluong.php?id=<?php echo $row['id_nhanvien'] ?>&idpb=<?php echo $row['phongban'] ?>"
        enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="tennv">Tên Nhân Viên</label>
            <input type="text" class="form-control" id="tennv" name="tennv" required
                value="<?php echo $row['tennv'] ?>">
        </div>

        <div class="form-group">
            <label for="luong">Lương gốc</label>
            <input type="text" class="form-control" id="luong" name="luong" required
                value="<?php echo $row['luong'] ?>">
        </div>

        <div class="form-group">
            <label for="thang">Tháng</label>
            <input type="text" class="form-control" id="thang" name="thang" required
                value="<?php echo $row['thang'] ?>">
        </div>

        <div class="form-group">
            <label for="thuong">Thưởng</label>
            <input type="text" class="form-control" id="thuong" name="thuong" required
                value="<?php echo $row['luongthuong'] ?>">
        </div>

        <div class="form-group">
            <label for="phat">Phạt</label>
            <input type="text" class="form-control" id="phat" name="phat" required
                value="<?php echo $row['luongtru'] ?>">
        </div>



        <button type="submit" class="btn btn-primary" name="sualuong">Sửa</button>
    </form>
</body>

</html>