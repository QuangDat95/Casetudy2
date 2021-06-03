<?php include_once 'dataBaseConnect.php'; ?>
<?php
$rows = [];
$cart = [];
if(isset($_SESSION['gio_hang'])){
	$cart   = $_SESSION['gio_hang'];
	$id_sp = implode(',', array_keys($cart) );

    if($id_sp != ''){
        $sql = "SELECT * FROM san_pham WHERE ID_san_pham IN ($id_sp)";
        $stmt = $connect->query($sql);
        // tùy chọn kiểu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        // lấy tất cả kết quả
        $rows = $stmt->fetchAll();
    }
}
?>
<div class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <i class="fa fa-shopping-cart"></i>
        <span>Giỏ hàng</span>
        <div class="qty"><?php echo count($cart)?></div>
    </a>
    <div class="cart-dropdown">
        <div class="cart-list">
        <?php $total = 0;?>
            <?php foreach($rows as $key => $row):?>
                <?php $total += $row->Gia_san_pham*$cart[$row->ID_san_pham];?>
            <div class="product-widget">
                <div class="product-img">
                    <img src="admin/<?php echo $row->hinh_anh;?>">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#"><?php echo $row->Ten_san_pham;?></a></h3>
                    <h4 class="product-price"><span class="qty"><?php echo $cart[$row->ID_san_pham]?>x</span><?php echo number_format($row->Gia_san_pham); ?></h4>
                </div>
                <button class="delete"><i class="fa fa-close"></i></button>
            </div>	
            <?php endforeach;?>
        </div>
        <div class="cart-summary">
            <small><?php echo count($cart)?> sản phẩm đã chọn</small>
            <h5>Tổng tiền: <?php echo number_format($total); ?> </h5>
        </div>
        <div class="cart-btns">
            <a href="cart.php">Xem giỏ hàng</a>
            <a href="checkout.php">Thanh toán<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>