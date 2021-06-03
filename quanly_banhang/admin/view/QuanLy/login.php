<div class="loginBox">        
        <div class="loginHead">
            <img src="img/logo.png" alt="NTQ Solution Admin Control Panel" title="NTQ Solution Admin Control Panel"/>
        </div>
        <form class="form-horizontal" action="index.php?controller=QuanLy&action=login" method="POST">
        <?php
            if(isset($_SESSION['thong_bao_loi'])){
                $loi = $_SESSION['thong_bao_loi'];
                echo '<p style="text-align:center;color:red;">'.$loi.'</p>';
                //xóa thông báo
                unset( $_SESSION['thong_bao_loi']);
            }
        ?>
        <?php
            if(isset($_SESSION['thong_bao_thanh_cong'])){
                $thong_bao = $_SESSION['thong_bao_thanh_cong'];
                echo '<p style="text-align:center;color:green;">'.$thong_bao.'</p>';
                //xóa thông báo
                unset( $_SESSION['thong_bao_thanh_cong']);
            }
        ?>
            <div class="control-group">
                <label for="inputUsername">Tên Đăng nhập</label>                
                <input type="text" id="inputUsername" name="Ten_dang_nhap" autocomplete="off"/>
            </div>
            <div class="control-group">
                <label for="inputPassword">Mật khẩu</label>                
                <input type="password" id="inputPassword" name="mat_khau"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <label class="checkbox"><input type="checkbox">Ghi nhớ đăng nhập</label>                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block">Đăng nhập</button>
            </div>
        </form>             
    </div>  