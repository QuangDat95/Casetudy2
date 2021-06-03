<?php
//khởi tạo session
session_start();


//lấy id sản phẩm
$id_sp = $_GET['id'];

//kiểm tra session gio hang đã được khởi tạo chưa
if( isset( $_SESSION['gio_hang'] ) ){
    $cart = $_SESSION['gio_hang'];
}else{
    $cart = [];
}

//kiểm tra id_sp đã có trong giỏ chưa 
if( isset( $cart[$id_sp] ) ){
    $cart[$id_sp] += 1; //nếu có thì cộng 1
}else{
    $cart[$id_sp] = 1; //nếu không thì = 1
}

//đặt lại session gio hang
$_SESSION['gio_hang'] = $cart;

//chuyển hướng về trang sản phẩm
header("Location: cart.php");