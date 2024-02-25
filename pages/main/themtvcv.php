<body>
    <?php
    $sql_qt = "SELECT * FROM tbl_congviec  WHERE id_cv = '$_GET[id]' ";
    $qr = mysqli_query($mysqli, $sql_qt);
    $row = mysqli_fetch_array($qr);
    ?>

    <body>
        <form method="POST" action="xuly/themtvcv.php?id=<?php echo $row['id_cv'] ?>" enctype="multipart/form-data"
            class="form">
            <div class="form-group">
                <label for="tennhom">Tên công việc</label>
                <input type="text" class="form-control" id="tencongviec" name="tencongviec" value="<?php echo $row['tencongviec'] ?>"
                    required>
            </div>

            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="text" class="form-control" id="soluong" name="soluong"
                    value="<?php echo $row['soluong'] ?>" required>
            </div>

            <?php
            $sql_tv = "SELECT * FROM tbl_nhanvien";
            $kq_tv = mysqli_query($mysqli, $sql_tv);

            $sql_id_nhom_thanhvien = "SELECT DISTINCT id_cv FROM tbl_thanhviencv";
            $kq_id_nhom_thanhvien = mysqli_query($mysqli, $sql_id_nhom_thanhvien);
            $ds_id_nhom_thanhvien = array();
            while ($row_id_nhom_thanhvien = mysqli_fetch_array($kq_id_nhom_thanhvien)) {
                $ds_id_nhom_thanhvien[] = $row_id_nhom_thanhvien['id_cv'];
            }

            $sql_id_nhanvien_thanhvien = "SELECT id_ten FROM tbl_thanhviencv WHERE id_cv = '{$row['id_cv']}'";
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

            <button type="submit" class="btn btn-primary" name="themtvcv">Thêm</button>
        </form>
    </body>
</html>
