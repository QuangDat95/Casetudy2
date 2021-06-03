<?php 
    $url_controller = 'index.php?controller=';
?>
<div class="menu">
    <div class="breadLine">
        <div class="arrow"></div>
        <div class="adminControl active">
        <div style="width:5.5cm;"><marquee style="color:blue">Chào Nguyễn Quang Đạt</marquee></div>
        </div>
    </div>
    <div class="admin">
        <div class="image">
            <a href="index.php"><img src="public/img/users/avatar.jpg" class="img-polaroid"/></a>
        </div>
        <ul class="control">
            <li><span class="icon-cog"></span> <a href="<?php echo $url_controller; ?>QuanLy&action=list">Cập nhật Quản lý</a></li>
            <li><span class="icon-share-alt"></span> <a href="<?php echo $url_controller; ?>QuanLy&action=logout">Đăng xuất</a></li>
        </ul>
    </div>
    <ul class="navigation">
        <li>
            <a href="<?php echo $url_controller; ?>PhanLoai&action=list">
                <span class="isw-grid"></span><span class="text">Danh mục hãng</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_controller; ?>SanPham&action=list">
                <span class="isw-list"></span><span class="text">Tên sản phẩm</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_controller; ?>DonHang&action=list">
                <span class="isw-list"></span><span class="text">Đơn hàng</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_controller; ?>DanhSachDonHang&action=list">
                <span class="isw-list"></span><span class="text">Danh sách đơn hàng</span>
            </a>
        </li>
    </ul>
</div>