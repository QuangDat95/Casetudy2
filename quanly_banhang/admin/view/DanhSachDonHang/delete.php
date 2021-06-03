<?php 
    $url_controller = 'index.php?controller=DanhSachDonHang';
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="DanhSachDonHang/list.php">Danh sách đơn hàng</a> <span class="divider"></span></li>
            <li class="active">Sửa</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Danh sách đơn hàng</h1>
                    <div class="clear"></div>
                </div>
                <form action="" method="POST">
                        <div style="color:red">Bạn có muốn xóa đơn hàng này không?</div>
                        <input type="submit" name="confirm" value="Có">
                        <input type="submit" name="confirm" value="Không">
                    </form>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>