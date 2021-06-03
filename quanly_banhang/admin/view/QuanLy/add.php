<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="SanPham/list.php">Quản lý</a> <span class="divider"></span></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Thêm quản lý</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row-form">
                            <div class="span3">Tên đăng nhập:</div>
                            <div class="span9"><input type="text" name="Ten_dang_nhap" placeholder="Nhập tên đăng nhập"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Mật khẩu:</div>
                            <div class="span9"><input type="text" name="mat_khau" placeholder="Nhập mật khẩu"/></div>
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