<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buttons Example</title>

    <style>
    .custom-btn {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
    }


    .big-square-btn {
        width: 150px;
        height: 150px;
        line-height: 50px;
        text-align: center;
        display: inline-block;
    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <!-- Button 1 -->
            <form method="POST" action="pages/main/export.php">
                <div class="col-md-6 mb-3">
                    <button name="btnExport" class="custom-btn big-square-btn" type="submit">Thông tin tài khoản nhân
                        viên</button>
                </div>
            </form>
            <!-- Button 2 -->
            <form method="POST" action="pages/main/tkconhoatdong.php">
                <div class="col-md-6 mb-3">
                    <button name="btnExport" class="custom-btn big-square-btn" type="submit">Tài khoản nhân viên còn
                        hoạt động</button>
                </div>
            </form>
        </div>
    </div>
<?php $query = "SELECT phongban, COUNT(*) AS soluong FROM tbl_nhanvien GROUP BY phongban";
$result = $mysqli->query($query);

// Tạo mảng dữ liệu để sử dụng trong biểu đồ
$data = array();
$data = array();
while ($row = $result->fetch_assoc()) {
    // Kiểm tra giá trị của 'phongban' và đặt tên phòng ban tương ứng
    if ($row['phongban'] == 0) {
        $tenPhongBan = 'Phòng Nhân Sự';
    } elseif ($row['phongban'] == 1) {
        $tenPhongBan = 'Phòng Kế toán';
    } elseif ($row['phongban'] == 2) {
        $tenPhongBan = 'Phòng Kinh Doanh';
    } elseif ($row['phongban'] == 3) {
        $tenPhongBan = 'Phòng Công Nghệ Thông Tin';
    } elseif ($row['phongban'] == 4) {
        $tenPhongBan = 'Phòng Sản Xuất';
    } elseif ($row['phongban'] == 5) {
        $tenPhongBan = 'Phòng Quảng Cáo và tiếp thị';
    } elseif ($row['phongban'] == 6) {
        $tenPhongBan = 'Phòng Nghiên Cứu và Phát Triển ';
    } elseif ($row['phongban'] == 7) {
        $tenPhongBan = 'Phòng Tổ Chức Sự Kiện';
    } else {
        $tenPhongBan = 'Phòng ' . $row['phongban'];
    }

    $data[] = array($tenPhongBan, (int)$row['soluong']);
}
 ?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Sử dụng dữ liệu từ truy vấn cơ sở dữ liệu
            var data = google.visualization.arrayToDataTable([
                ['Phòng Ban', 'Số Lượng Nhân Viên'],
                <?php
                foreach ($data as $row) {
                    echo "['" . $row[0] . "', " . $row[1] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Số Lượng Nhân Viên Theo Phòng Ban',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>

</html>


</body>

</html>