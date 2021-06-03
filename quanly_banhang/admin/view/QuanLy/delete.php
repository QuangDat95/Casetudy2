<?php 
    $url_controller = 'index.php?controller=QuanLy';
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="QuanLy/list.php">Mục quản lý</a></li>
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
        <!-- /row-fluid-->
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản Lý</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                <form action="" method="POST">
                        <div style="color:red">Bạn có muốn xóa Hãng này không?</div>
                        <input type="submit" name="confirm" value="Có">
                        <input type="submit" name="confirm" value="Không">
                    </form>
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