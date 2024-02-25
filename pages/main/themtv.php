<body>
    <?php
    $sql_qt = "SELECT * FROM tbl_nhomnhanvien  WHERE id_nhom = '$_GET[id]' ";
    $qr = mysqli_query($mysqli, $sql_qt);
    $row = mysqli_fetch_array($qr);
    ?>

    <body>
        <form method="POST" action="xuly/themtv.php?id=<?php echo $row['id_nhom'] ?>" enctype="multipart/form-data"
            class="form">
            <div class="form-group">
                <label for="tennhom">Tên nhóm</label>
                <input type="text" class="form-control" id="tennhom" name="tennhom" value="<?php echo $row['ten_nhom'] ?>"
                    required>
            </div>

            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="text" class="form-control" id="soluong" name="soluong"
                    value="<?php echo $row['soluongthanhvien'] ?>" required>
            </div>

            <?php
            $sql_tv = "SELECT * FROM tbl_nhanvien";
            $kq_tv = mysqli_query($mysqli, $sql_tv);

            $sql_id_nhom_thanhvien = "SELECT DISTINCT id_nhom FROM tbl_thanhvien";
            $kq_id_nhom_thanhvien = mysqli_query($mysqli, $sql_id_nhom_thanhvien);
            $ds_id_nhom_thanhvien = array();
            while ($row_id_nhom_thanhvien = mysqli_fetch_array($kq_id_nhom_thanhvien)) {
                $ds_id_nhom_thanhvien[] = $row_id_nhom_thanhvien['id_nhom'];
            }

            $sql_id_nhanvien_thanhvien = "SELECT id_ten FROM tbl_thanhvien WHERE id_nhom = '{$row['id_nhom']}'";
            $kq_id_nhanvien_thanhvien = mysqli_query($mysqli, $sql_id_nhanvien_thanhvien);
            $ds_id_nhanvien_thanhvien = array();
            while ($row_id_nhanvien_thanhvien = mysqli_fetch_array($kq_id_nhanvien_thanhvien)) {
                $ds_id_nhanvien_thanhvien[] = $row_id_nhanvien_thanhvien['id_ten'];
            }
            ?>
            <div class="form-group">
                <label for="nv">Nhân viên</label>
                <select class="form-control" id="nv" name="nv" required>
                    <?php
                    while ($row_tv = mysqli_fetch_array($kq_tv)) {
                        if (!in_array($row_tv['id_nhanvien'], $ds_id_nhanvien_thanhvien)) {
                    ?>
                            <option value="<?php echo $row_tv['id_nhanvien'] ?>"><?php echo $row_tv['tennv'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="themtv">Thêm</button>
        </form>
    </body>
</html>
