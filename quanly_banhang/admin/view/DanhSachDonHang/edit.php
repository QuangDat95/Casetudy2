<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="DanhSachDonHang/list.php">Sửa danh sách</a> <span class="divider"></span></li>
            <li class="active">Sửa</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Cập Nhật danh sách</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                        <div class="row-form">
                            <div class="span3">Tên khách hàng:</div>
                            <div class="span9">
                            <select name="ID_don_hang">
                                    <option value="0">Chọn khách hàng</option>
                                    <?php foreach($don_hangs as $don_hang):?>
                                    <option value="<?php echo $don_hang->ID_don_hang;?>"
                                    <?php 
                                    if($row->ID_don_hang == $don_hang->ID_don_hang){
                                        echo 'selected';
                                    } 
                                    ?>>
                                    <?php echo $don_hang->Ten_khach_hang;?>
                                    </option>
                                    <?php endforeach;?>
                            </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="row-form">
                            <div class="span3">Tên sản phẩm:</div>
                            <div class="span9">
                            <select name="ID_san_pham">
                                    <option value="0">Chọn sản phẩm</option>
                                    <?php foreach($san_phams as $san_pham):?>
                                    <option value="<?php echo $san_pham->ID_san_pham;?>"
                                    <?php 
                                    if($row->ID_san_pham == $san_pham->ID_san_pham){
                                        echo 'selected';
                                    } 
                                    ?>>
                                    <?php echo $san_pham->Ten_san_pham;?>
                                    </option>
                                    <?php endforeach;?>
                            </select>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <div class="span3">Số lượng:</div>
                            <div class="span9">
                                <input type="text" name="So_luong" value="<?php echo $row->So_luong;?>"/>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9">
                                <select name="select">
                                        <option value="0">choose a option...</option>
                                        <option value="1">Activate</option>
                                        <option value="2">Deactivate</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                          
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Cập nhật</button>
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