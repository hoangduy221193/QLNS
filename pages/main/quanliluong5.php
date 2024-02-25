<?php
$sql_lietke = "SELECT * FROM tbl_nhanvien,tbl_admin WHERE tbl_nhanvien.nguoithem = tbl_admin.id_admin 
ORDER BY tbl_nhanvien.id_nhanvien DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);

?>

<div class="container ">
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Quản lí lương</h6>
    <div class="d-flex justify-content-center mt-3" style="padding: 10px;">
    <a href="index.php?quanly=quanliluong0" class="btn btn-light">Phòng nhân sự</a>
    <a href="index.php?quanly=quanliluong1" class="btn btn-light">Phòng kế toán</a>
    <a href="index.php?quanly=quanliluong2" class="btn btn-light">Phòng kinh doanh</a>
    <a href="index.php?quanly=quanliluong3" class="btn btn-light">Phòng công nghệ thông tin</a>
    <a href="index.php?quanly=quanliluong4" class="btn btn-light">Phòng sản xuất</a>
    <a href="index.php?quanly=quanliluong5" class="btn btn-light">Phòng quảng cáo và tiếp thị</a>
    <a href="index.php?quanly=quanliluong6" class="btn btn-light">Phòng nghiên cứu và phát triển</a>
    <a href="index.php?quanly=quanliluong7" class="btn btn-light">Phòng tổ chức sự kiện</a>
    </div>
    <p style="text-align: center;">Lương phòng sản xuất</p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Họ Và Tên</th>
                    <th>Phòng ban công tác</th>
                    <th>Chức vụ</th>
                    <th>Trình độ chuyên môn</th>
                    <th>Bằng cấp</th>
                    <th>Lương gốc</th>
                    <th>Tháng</th>
                    <th>Thưởng</th>
                    <th>Phạt</th>
                    <th>Thành tiền</th>
                    <th>Quản lí</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $i = 0;
        $tongtien=0;
        while ($row = mysqli_fetch_array($query_lietke)) {
            if($row['phongban']==4){
                $luong = intval($row['luong']);
                $luongthuong = intval($row['luongthuong']);
                $luongtru = intval($row['luongtru']);
                
                $thanhtien = $luong + $luongthuong - $luongtru;

                $tongtien+=$thanhtien;
                
          $i++;
        ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['tennv'] ?></td>
                    <td><?php if($row['phongban']==0){
                         echo 'Phòng Nhân Sự';
                    }else if($row["phongban"]==1){
                        echo 'Phòng Kế Toán';
                    } else if($row['phongban']==2){
                        echo 'Phòng Kinh Doanh';
                    }else if($row['phongban']==3){
                        echo 'Phòng Công Nghệ Thông Tin';
                    }else if($row['phongban']==4){
                        echo 'Phòng Sản Xuất';
                    }else if($row['phongban']==5){
                        echo 'Phòng Quảng Cáo và Tiếp Thị';
                    }else if($row['phongban']==6){
                        echo 'Phòng Nghiên Cứu và Phát Triển';
                    }else{
                        echo 'Phòng Tổ Chức Sự Kiện';
                    
                    } ?></td>
                    <td><?php if($row['chucvu']==0){
                            echo 'Trưởng Phòng';
                    }else{
                        echo 'Nhân Viên';
                    } ?></td>
                    <td><?php echo $row['trinhdo'] ?></td>
                    <td><img src="xuly/bangcap/<?php echo $row['bangcap'] ?>" width="150px"></td>
                    <td><?php echo number_format( $row['luong'],0,',','.').'vnđ';?></td>
                    <td><?php echo $row['thang'] ?></td>
                    <td><?php echo number_format( $row['luongthuong'],0,',','.').'vnđ';?></td>
                    <td><?php echo number_format( $row['luongtru'],0,',','.').'vnđ';?></td>
                    <td><?php echo number_format( $thanhtien,0,',','.').'vnđ'; ?></td>
                    <td>
                        <a class="btn btn-warning"
                        href="index.php?quanly=sualuong&id=<?php echo  $row['id_nhanvien'] ?>">Sửa</a>
                    </td>
                    </td>
                </tr>
                <?php }} ?>
                <tr>
                    <td colspan="12">
                        <p style="text-align: center;color: red;">Tổng tiền: <?php echo number_format( $tongtien,0,',','.').'vnđ'; ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>