<?php 
    $url_controller = 'index.php?controller=PhanLoai';
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="PhanLoai/list.php">Các hãng điện thoại</a></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12 search">
                <form action="" method="GET">
                <input type="hidden" name="controller" value="PhanLoai">
                    <input type="text" class="span11" placeholder="Nhập từ khóa" name="tu_khoa" autocomplete ="off" />
                    <button class="btn span1" type="submit">Tìm</button>
                    <input type="hidden" name="action" value="search">
                </form>
            </div>
        </div>
        <!-- /row-fluid-->
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản Lý các hãng</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="<?php echo $url_controller; ?>&action=add" class="btn btn-add">Thêm hãng</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="checkAll" /></th>
                                <th class="sorting"><a href="#">ID</a></th>
                                <th class="sorting"><a href="#">Tên hãng</a></th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- START LOOP-->
                            <?php foreach( $rows as $key => $row ):?>
                            <tr>
                                <td><input type="checkbox" name="checkbox" /></td>
                                <td> <?php echo $row->ID_hang; ?> </td>
                                <td> <?php echo $row->Ten_hang; ?></td>
                                <td>
                                    <a href="<?php echo $url_controller; ?>&action=edit&id=<?php echo $row->ID_hang ;?>" class="btn btn-primary">Sửa</a>
                                    <a href="<?php echo $url_controller; ?>&action=delete&id=<?php echo $row->ID_hang ;?>" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <!-- END LOOP-->
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <a href="#" class="btn btn-success">Kích hoạt</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </div><!-- /bulk-action-->
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
<script>
    // function xac_nhan(){
    //     let thong_bao = confirm('Bạn có chắc chắn xóa hay không ?');
    //     if( thong_bao == false ){
    //         console.log( event );

    //         event.preventDefault();
    //     }
    //}
</script>