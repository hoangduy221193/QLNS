
<body>

<form method="POST" action="xuly/xulythemnhanvien.php" enctype="multipart/form-data" class="form">
    <div class="form-group">
        <label for="tennv">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="tennv" name="tennv" required>
    </div>

    <div class="form-group">
        <label for="ngaysinh">Ngày Sinh</label>
        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
    </div>

    <div class="form-group">
        <label for="gioitinh">Giới Tính</label>
        <select class="form-control" id="gioitinh" name="gioitinh" required>
            <option value="1">Nam</option>
            <option value="2">Nữ</option>
        </select>
    </div>

    <div class="form-group">
        <label for="diachi">Địa Chỉ</label>
        <input type="text" class="form-control" id="diachi" name="diachi" required>
    </div>

    <div class="form-group">
        <label for="sodienthoai">Số Điện Thoại</label>
        <input type="tel" class="form-control" id="sodienthoai" name="sodienthoai" required>
    </div>

    <div class="form-group">
        <label for="taikhoan">Tài Khoản</label>
        <input type="text" class="form-control" id="taikhoan" name="taikhoan" required>
    </div>

    <div class="form-group">
        <label for="matkhau">Mật Khẩu</label>
        <input type="password" class="form-control" id="matkhau" name="matkhau" required>
    </div>

    <div class="form-group">
        <label for="trangthai">Trạng Thái</label>
        <select class="form-control" id="trangthai" name="trangthai" required>
            <option value="0">Hoạt động</option>
            <option value="1">Không hoạt động</option>
        </select>
    </div>

    <div class="form-group">
        <label for="phongban">Phòng Ban</label>
        <select class="form-control" id="phongban" name="phongban" required>
            <option value="0">Phòng Nhân Sự </option>
            <option value="1">Phòng Kế Toán</option>
            <option value="2">Phòng Kinh Doanh </option>
            <option value="3">Phòng Công Nghệ Thông Tin </option>
            <option value="4">Phòng Sản Xuất</option>
            <option value="5">Phòng Quảng Cáo và tiếp thị </option>
            <option value="6">Phòng Nghiên Cứu và Phát Triển </option>
            <option value="7">Phòng Tổ Chức Sự Kiện </option>
        </select>
    </div>

    <div class="form-group">
        <label for="chucvu">Chức Vụ</label>
        <select class="form-control" id="chucvu" name="chucvu" required>
            <option value="0">Trưởng Phòng</option>
            <option value="1">Nhân Viên</option>
        </select>
    </div>

    <div class="form-group">
        <label for="trinhdo">Trình độ chuyên môn</label>
        <input type="text" class="form-control" id="trinhdo" name="trinhdo" required>
    </div>
    
    <div class="form-group">
        <label for="bangcap">Bằng cấp</label>
        <input type="file" class="form-control" id="bangcap" name="hinhanh" >
    </div>
    <div class="form-group">
        <label for="luong">Lương gốc</label>
        <select class="form-control" id="luong" name="luong" required>
            <option value="15000000">Nhân Viên Nhân Sự</option>
            <option value="20000000">Nhân Viên Kế Toán</option>
            <option value="30000000">Nhân Viên Kinh Doanh </option>
            <option value="15000000">Nhân Viên Công Nghệ Thông Tin </option>
            <option value="12000000">Nhân Viên Sản Xuất</option>
            <option value="16000000">Nhân Viên Quảng Cáo và Tiếp Thị </option>
            <option value="50000000">Nhân Viên Nghiên Cứu và Phát Triển</option>
            <option value="12300000">Nhân Viên Tổ Chức Sự Kiện</option>
        </select>
    </div>
    <div class="form-group">
        <label for="loainv">Loại nhân viên</label>
        <select class="form-control" id="loainv" name="loainv" required>
            <option value="0">Nhân Viên Nhân Sự</option>
            <option value="1">Nhân Viên Kế Toán</option>
            <option value="2">Nhân Viên Kinh Doanh </option>
            <option value="3">Nhân Viên Công Nghệ Thông Tin </option>
            <option value="4">Nhân Viên Sản Xuất</option>
            <option value="5">Nhân Viên Quảng Cáo và Tiếp Thị </option>
            <option value="6">Nhân Viên Nghiên Cứu và Phát Triển</option>
            <option value="7">Nhân ViênTổ Chức Sự Kiện</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary" name="themnv">Thêm</button>
</form>
</body>
</html>
