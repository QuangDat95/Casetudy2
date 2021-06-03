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
            <div class="span12 search">
                <form action="" method="GET">
                <input type="hidden" name="controller" value="SanPham">
                    <input type="text" class="span11" placeholder="Nhập từ khóa" name="tu_khoa" autocomplete ="off" />
                    <button class="btn span1" type="submit">Tìm</button>
                    <input type="hidden" name="action" value="search">
                </form>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Danh sách đơn hàng</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                <a href="<?php echo $url_controller; ?>&action=add" class="btn btn-add">Thêm</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tên Khách hàng</th>
                            <th>Ngày mua</th>
                            <td>Tên Sản Phẩm</td>
                            <td>Hình ảnh</td>
                            <td>Số lượng</td>
                            <td>Hành động</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $key => $row): ?> 
                        <tr>
                            <td><?php echo $row->Ten_khach_hang; ?></td>
                            <td><?php echo $row->ngay_mua;?></td>
                            <td><?php echo $row->Ten_san_pham;?></td>
                            <td> <img src="<?php echo $row->hinh_anh ?>" width="100"> </td>
                            <td><?php echo $row->So_luong; ?></td>
                            <td>
                            <a href="<?php echo $url_controller; ?>&action=edit&id=<?php echo $row->ID_chi_tiet ;?>" class="btn btn-primary">Sửa</a>
                            <a href="<?php echo $url_controller; ?>&action=delete&id=<?php echo $row->ID_chi_tiet ;?>" class="btn btn-danger" >Xóa</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>