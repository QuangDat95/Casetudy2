<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="DonHang/list.php">Đơn hàng</a> <span class="divider"></span></li>
            <li class="active">Thêm đơn hàng</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Thêm Sản phẩm</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    <div class="row-form">
                            <div class="span3">Tên khách hàng:</div>
                            <div class="span9"><input type="text" name="Ten_khach_hang" placeholder="Nhập tên khách hàng"/></div>
                            <div class="clear"></div>
                        </div>
                    	<div class="row-form">
                            <div class="span3">Ngày Mua:</div>
                            <div class="span9">
                                <input type="date" name="ngay_mua"/>
                            </div>
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