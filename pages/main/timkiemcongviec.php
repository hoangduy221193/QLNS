<?php
        if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
       $sql_pro ="SELECT * FROM tbl_congviec,tbl_admin WHERE tbl_congviec.nguoitao = tbl_admin.id_admin AND tbl_congviec.tencongviec LIKE'%".$tukhoa."%'";
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
  <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Liệt kê công việc</h6>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
        <th>ID</th>
          <th>Tên công việc</th>
          <th>Mô tả</th>
          <th>Người tạo</th>
          <th>Số lượng thành viên</th>
          <th>Ngày tạo</th>
          <th>Hết hạn</th>
          <th>Quản lí</th>
          <th>Thành viên</th>
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
            <td><?php echo $row['tencongviec'] ?></td>
            <td><?php echo $row['mota'] ?></td>
            <td><?php echo $row['nguoitao'] ?></td>
            <td><?php echo $row['soluong'] ?></td>
            <td><?php echo $row['ngaygiao'] ?></td>
            <td><?php echo $row['hethan'] ?></td>
            <td>
              <a class="btn btn-danger" href="xuly/themcongviec.php?id=<?php echo  $row['id_cv'] ?>">Xóa</a> ||
              <a class="btn btn-warning" href="index.php?quanly=suacongviec&id=<?php echo  $row['id_cv'] ?>">Sửa</a>||
            </td>
            <td><a class="btn btn-info" href="index.php?quanly=xemthanhvien&id=<?php echo  $row['id_cv'] ?>">Thành viên</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
