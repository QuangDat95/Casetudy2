<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="QuanLy/list.php">Mục quản lý</a> <span class="divider"></span></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Cập Nhật quản lý</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Tên đăng nhập:</div>
                            <div class="span9">
                            <input type="text" name="Ten_dang_nhap" placeholder="Nhập tên đăng nhập"
                            value="<?php echo $row->Ten_dang_nhap; ?>"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Mật khẩu:</div>
                            <div class="span9">
                            <input type="text" name="mat_khau" placeholder="Nhập tên mật khẩu"
                            value="<?php echo $row->mat_khau; ?>"/></div>
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