<?php
include 'controller/PhanLoaiController.php';
include 'controller/SanPhamController.php';
include 'controller/DonHangController.php';
include 'controller/DanhSachDonHangController.php';
include 'controller/QuanLyController.php';

use Controller\PhanLoaiController;
use Controller\SanPhamController;
use Controller\DonHangController;
use Controller\DanhSachDonHangController;
use Controller\QuanLyController;

switch ($controller){
    case 'PhanLoai':
        $objController = new PhanLoaiController();
        break;
    case 'SanPham':
        $objController = new SanPhamController();
        break;
    case 'DonHang':
        $objController = new DonHangController();
        break;
    case 'DanhSachDonHang':
        $objController = new DanhSachDonHangController();
        break;
    case 'QuanLy':
        $objController = new QuanLyController();
        break;
}

switch ($action){
    case 'list':
        $objController->list();
        break;
    case 'view':
        $objController->view();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    case 'login':
        $objController->login();
        break;
    case 'logout':
        $objController->logout();
        break;
        default:
        $objController->list();
        break;
}