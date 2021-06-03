<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="SanPham/list.php">Điện thoại</a> <span class="divider"></span></li>
            <li class="active">Thêm</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Thêm đơn hàng</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row-form">
                            <div class="span3">Tên Sản phẩm:</div>
                            <div class="span9"><input type="text" name="Ten_san_pham" placeholder="Nhập tên sản phẩm"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Chọn Hãng:</div>
                            <div class="span9">
                            <select name="ID_hang">
                                    <option value="0">Chọn hãng</option>
                                    <?php foreach($phan_loais as $phan_loai):?>
                                    <option value="<?php echo $phan_loai->ID_hang;?>">
                                    <?php echo $phan_loai->Ten_hang;?>
                                    </option>
                                    <?php endforeach;?>
                            </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Hình Ảnh:</div>
                            <div class="span9">
                                <input type="file" name="hinh_anh" />
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Giá sản phẩm:</div>
                            <div class="span9"><input type="text" name="Gia_san_pham" placeholder="Nhập giá sản phẩm"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Trạng Thái:</div>
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
                            <button class="btn btn-success" type="submit">Lưu</button>
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