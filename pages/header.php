<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['ten']);
        unset($_SESSION['quyenhan']);
        unset($_SESSION['id_admin']);
        header('location:dangnhap.php');
    }
?>
<header style="background: lightslategray;width: 100%;">
    <div id="logo"></div>
    <div class="header" style="display: flex;margin-left: 600px;padding: 5px 10px;">
        <h6 style="margin-right: 20px;">Chào <?php if(isset($_SESSION["id_admin"])){ echo $_SESSION["ten"]; } ?></h6> || 
        <a href="index.php?dangxuat=1" style="color: black;margin-left: 20px;color: yellow;">Đăng xuất</a>
    </div>
</header>