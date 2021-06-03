<?php 
    $url_controller = 'index.php?controller=DonHang';
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="DonHang/view.php">Chi tiết đơn hàng</a> <span class="divider"></span></li>
            <li class="active">Sửa</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Chi tiết đơn hàng</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                <a href="index.php?controller=DanhSachDonHang&action=add" class="btn btn-add">Thêm</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tên Khách hàng</th>
                            <th colspan="3"><?php echo $row->Ten_khach_hang; ?></th>
                        </tr>
                        <tr>
                            <th>Ngày mua</th>
                             <?php 
                                $row->ngay_mua = date('d-m-Y', strtotime($row->ngay_mua));
                            ?>
                            <th colspan="3"><?php echo $row->ngay_mua; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tên Sản Phẩm</td>
                            <td>Hình ảnh</td>
                            <td>Số lượng</td>
                            <td>Giá sản phẩm</td>
                        </tr>
                    <?php foreach($items as $key => $item): ?> 
                        <tr>
                            <td><?php echo $item->Ten_san_pham; ?></td>
                            <td> <img src="<?php echo $item->hinh_anh ?>" width="100"> </td>
                            <td><?php echo $item->So_luong; ?></td>
                            <td><?php echo $item->Gia_san_pham = number_format($item->Gia_san_pham); ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td>Tổng</td>
                            <td></td>
                            <td><?php echo $so_luong;?></td>
                            <td><?php echo $tong_gia = number_format($tong_gia);?></td>
                            
                        </tr>
                        
                    </tbody>
                </table>        
                        <div class="row-form">
                        	<a href="<?php echo $url_controller;?>&action=list" class="btn btn-info">Trở về</a>
							<div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>