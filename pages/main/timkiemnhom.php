<?php
        if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
       $sql_pro ="SELECT * FROM tbl_nhomnhanvien,tbl_admin WHERE tbl_nhomnhanvien.nguoitao = tbl_admin.id_admin AND tbl_nhomnhanvien.ten_nhom LIKE'%".$tukhoa."%'";
       $query_pro = mysqli_query($mysqli,$sql_pro);
      
?>
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <form class="form-inline" action="index.php?quanly=timkiemnhom" method="POST">
        <div class="input-group w-100">
          <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên nhóm " aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm kiếm</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<h6 style="text-align: center;padding: 10px;">Tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h6>
<div class="container mt-4">
  <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Liệt kê danh sách nhóm nhân viên</h6>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Tên nhóm</th>
          <th>Mô tả</th>
          <th>Ngày tạo</th>
          <th>Người tạo</th>
          <th>Số lượng thành viên</th>
          <th>Tóm Ngày cập nhập</th>
          <th>Dự án liên quan</th>
          <th>Thông tin liên lạc</th>
          <th>Quản lí</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $i=0;
        while ($row = mysqli_fetch_array($query_pro)) {
            $i++;
       ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['ten_nhom'] ?></td>
            <td><?php echo $row['mo_ta'] ?></td>
            <td><?php echo $row['ngaytao'] ?></td>
            <td><?php echo $row['ten'] ?></td>
            <td><?php echo $row['soluongthanhvien'] ?></td>
            <td><?php echo $row['ngaycapnhap'] ?></td>
            <td><?php echo $row['duanlienquan'] ?></td>
            <td><?php echo $row['thongtinlienlac'] ?></td>
            <td>
              <a class="btn btn-danger" href="xuly/xulythemnhom.php?id=<?php echo  $row['id_nhom'] ?>">Xóa</a> ||
              <a class="btn btn-warning" href="index.php?action=sach&query=sua&idsanpham=<?php echo  $row['id_nhom'] ?>">Sửa</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
