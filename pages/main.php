<div class="container-fluid">
    <div class="row">
        <!--large-middle-sm small-x-small--->
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <?php
        include("sidebar/sidebar.php")
        ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="maincontent">
                <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='danhmucsanpham'){
                include("main/danhmuc.php");

            }else if($tam =='themtaikhoan'){
                include("main/themtaikhoan.php");

            }
            else if($tam =='themnhom'){
                include("main/themnhom.php");
            }

            else if($tam =='lietkedanhsachnhom'){
                include("main/lietkedanhsachnhom.php");

            }

            else if($tam =='timkiemnhom'){
                include("main/timkiemnhom.php");

            }

            else if($tam =='dangnhap'){
                include("main/dangnhap.php");

            }

            else if($tam =='suanhom'){
                include("main/suanhomnv.php");

            }

            else if($tam =='danhsachtaikhoan'){
                include("main/danhsachtaikhoan1.php");

            }

            else if($tam =='danhsachtaikhoan2'){
                include("main/danhsachtaikhoan2.php");

            }

            else if($tam =='suanv'){
                include("main/suatknv.php");

            }

            else if($tam =='thongtinnhanvien'){
                include("main/thongtinnhanvien.php");

            }

            else if($tam =='suattnv'){
                include("main/suattnv.php");

            }

            else if($tam =='timkiemtk'){
                include("main/timkiemtk.php");

            }

            else if($tam =='timkiemttnv'){
                include("main/timkiemttnv.php");

            }

            else if($tam =='doimk'){
                include("main/doimk.php");

            }

            else if($tam =='quanliluong0'){
                include("main/quanliluong1.php");

            }
            
            else if($tam =='quanliluong1'){
                include("main/quanliluong2.php");

            }
            
            else if($tam =='quanliluong2'){
                include("main/quanliluong3.php");

            }

            else if($tam =='quanliluong3'){
                include("main/quanliluong4.php");

            }

            else if($tam =='quanliluong4'){
                include("main/quanliluong5.php");

            }

            else if($tam =='quanliluong5'){
                include("main/quanliluong6.php");

            }

            else if($tam =='quanliluong6'){
                include("main/quanliluong7.php");

            }

            else if($tam =='quanliluong7'){
                include("main/quanliluong8.php");

            }

            else if($tam =='sualuong'){
                include("main/sualuong.php");

            }
            
            else if($tam =='themthanhvien'){
                include("main/themthanhvien.php");

            }

            else if($tam =='themtv'){
                include("main/themtv.php");

            }

            else if($tam =='xemthanhvien'){
                include("main/xemthanhvien.php");

            }

            else if($tam =='export'){
                include("main/export.php");

            }

            else if($tam =='congviec'){
                include("main/congviec.php");

            }
            
            else if($tam =='themcongviec'){
                include("main/themcongviec.php");

            }

            else if($tam =='congviecdagiao'){
                include("main/congviecdagiao.php");

            }

            else if($tam =='suacongviec'){
                include("main/suacongviec.php");

            }

            else if($tam =='timkiemcongviec'){
                include("main/timkiemcongviec.php");

            }

            else if($tam =='themthanhviencongviec'){
                include("main/themtvcv.php");

            }

            else if($tam =='xemthanhviencv'){
                include("main/xemthanhviencv.php");

            }


            else {
                include("main/index.php");
            }
          ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>