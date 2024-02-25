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

<h6>Thêm công việc</h6>
<form method="POST" action="xuly/themcongviec.php">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Tên công việc</th>
                <th scope="col">Mô tả</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control" name="tencongviec" required></td>
                <td><textarea class="form-control" id="tomtat" style="resize: none;" name="mota"></textarea></td>
            </tr>
            <tr>
                <th scope="col">Số lượng thành viên</th>
                <th scope="col">Ngày giao</th>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="soluong" required></td>
                <td><input type="date" class="form-control" name="ngaygiao" required></td>
            </tr>
            <tr>
                <th scope="col">Ngày hết hạn</th>
            </tr>
            <tr>
                <td><input type="date" class="form-control" name="hethan" required></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-primary" name="themcongviec" value="Thêm công việc"></td>
            </tr>
        </tfoot>
    </table>
</form>


</body>
</html>
