<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h6 {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<?php
  $sql_qt = "SELECT * FROM tbl_nhomnhanvien  WHERE id_nhom = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);
?>
<h6>Sửa nhóm nhân viên</h6>
<form method="POST" action="xuly/xulythemnhom.php?id=<?php echo  $row['id_nhom'] ?>">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Tên nhóm</th>
                <th scope="col">Mô tả</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control" name="tennhom" value="<?php echo $row['ten_nhom'] ?>" required></td>
                <td><textarea class="form-control" id="tomtat" style="resize: none;" name="mota"><?php echo $row['mo_ta']; ?></textarea></td>
            </tr>
            <tr>
                <th scope="col">Số lượng thành viên</th>
                <th scope="col">Dự án có liên quan</th>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="soluong" value="<?php echo $row['soluongthanhvien'] ?>" required></td>
                <td><input type="text" class="form-control" name="duan" value="<?php echo $row['duanlienquan'] ?>" required></td>
            </tr>
            <tr>
                <th scope="col">Thông tin liên lạc</th>
            </tr>
            <tr>
                <td><input type="email" class="form-control" name="thongtinlienlac" value="<?php echo $row['thongtinlienlac'] ?>" required></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-primary" name="suanhom" value="Sửa nhóm "></td>
            </tr>
        </tfoot>
    </table>
</form>


</body>
</html>
