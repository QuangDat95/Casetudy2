<?php 
    $url_controller = 'index.php?controller=PhanLoai';
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="PhanLoai/list.php">Hãng điện thoại</a></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12 search">
                <form>
                    <input type="text" class="span11" placeholder="Nhập từ khóa" name="tu_khoa" />
                    <button class="btn span1" type="submit">Tìm</button>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản Lý hãng điện thoại</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                    <form action="" method="POST">
                        <div style="color:red">Bạn có muốn xóa Hãng này không?</div>
                        <input type="submit" name="confirm" value="Có">
                        <input type="submit" name="confirm" value="Không">
                    </form>
                    </table>
                    <!-- <div class="bulk-action">
                        <a href="#" class="btn btn-success">Activate</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>/bulk-action -->
                    <div class="dataTables_paginate">
                        <a class="first paginate_button paginate_button_disabled" href="#">First</a>
                        <a class="previous paginate_button paginate_button_disabled" href="#">Previous</a>
                        <span>
                            <a class="paginate_active" href="#">1</a>
                            <a class="paginate_button" href="#">2</a>
                        </span>
                        <a class="next paginate_button" href="#">Next</a>
                        <a class="last paginate_button" href="#">Last</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>
    </div>
</div>