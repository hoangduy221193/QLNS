<?php
require '../../vendor/autoload.php'; 
require'../../config/config.php';// Đường dẫn đến thư mục chứa autoload.php của PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['btnExport'])) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->setCellValue('A1', 'Họ và tên');
    $sheet->setCellValue('B1', 'Tài khoản');
    $sheet->setCellValue('C1', 'Mật khẩu');
    $sheet->setCellValue('D1', 'Phòng công tác');
    $sheet->setCellValue('E1', 'Chức vụ');
    $sheet->setCellValue('F1', 'Trình độ chuyên môn');
    $sheet->setCellValue('G1', 'Loại nhân viên');

    $result = mysqli_query($mysqli, "SELECT tennv, taikhoannv, matkhau,phongban,chucvu,trinhdo,loainv FROM tbl_nhanvien");

    $rowCount = 2; // Bắt đầu từ dòng thứ 2
    while ($row = mysqli_fetch_array($result)) {
        $sheet->setCellValue('A' . $rowCount, $row['tennv']);
        $sheet->setCellValue('B' . $rowCount, $row['taikhoannv']);
        $sheet->setCellValue('C' . $rowCount, $row['matkhau']);
        $sheet->setCellValue('D' . $rowCount, $row['phongban']);
        $sheet->setCellValue('E' . $rowCount, $row['chucvu']);
        $sheet->setCellValue('F' . $rowCount, $row['trinhdo']);
        $sheet->setCellValue('G' . $rowCount, $row['loainv']);
        $rowCount++;
    }

    $writer = new Xlsx($spreadsheet);
    $writer->save('../../excel/danhsachtaikhoan.xlsx');

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="danhsachtaikhoan.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}
?>


