<?php
namespace Controller;

include_once 'model/DanhSachDonHangModel.php';

use Model\DanhSachDonHangModel;
use Model\SanPhamModel;
use Model\DonHangModel;

class DanhSachDonHangController{
    public $url_controller = 'index.php?controller=DanhSachDonHang';
    public function list(){
        $objDanhSachDonHangModel = new DanhSachDonHangModel();
        $rows = $objDanhSachDonHangModel->getAll();
        include 'view/DanhSachDonHang/list.php';
    }
    public function add(){
        $objDanhSachDonHangModel = new DanhSachDonHangModel();
        $objDonHangModel = new DonHangModel();
        $objSanPhamModel = new SanPhamModel();
        $id = $_GET['id'];
        $san_phams = $objSanPhamModel->getAll();
        $don_hangs = $objDonHangModel->getAll();
        $row = $objDonHangModel->getOne( $id );
        $rows = $objDanhSachDonHangModel->getAll();
        //kiểm tra xử lý khi submit form với method POST
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            //lấy giá trị gán vào biến
            $ID_don_hang = $_REQUEST['ID_don_hang'];
            $ID_san_pham = $_REQUEST['ID_san_pham'];
            $So_luong = $_REQUEST['So_luong'];
            if($ID_don_hang !='' && $ID_san_pham != '' && $So_luong != ''){
                $data['ID_don_hang'] = $ID_don_hang;
                $data['ID_san_pham'] = $ID_san_pham;
                $data['So_luong'] = $So_luong;
                $objDanhSachDonHangModel->insert( $data );
                //chuyển hướng về trang sản phẩm
                header("Location:".$this->url_controller."&action=list");
            }
        }
        include 'view/DanhSachDonHang/add.php';
    }
    public function edit(){
        $objDanhSachDonHangModel = new DanhSachDonHangModel();
        $objSanPhamModel = new SanPhamModel();
        $objDonHangModel = new DonHangModel();
        $id = $_GET['id'];
        $san_phams = $objSanPhamModel->getAll();
        $don_hangs = $objDonHangModel->getAll();
        $row = $objDanhSachDonHangModel->getOne( $id );
        $rows = $objDanhSachDonHangModel->getAll();
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            //lấy giá trị gán vào biến
            $ID_don_hang = $_REQUEST['ID_don_hang'];
            $ID_san_pham = $_REQUEST['ID_san_pham'];
            $So_luong = $_REQUEST['So_luong'];

            $data['ID_don_hang'] = $ID_don_hang;
            $data['ID_san_pham'] = $ID_san_pham;
            $data['So_luong'] = $So_luong;

            $objDanhSachDonHangModel->update( $id , $data );
            header("Location: ".$this->url_controller."&action=list");
        }
        include 'view/DanhSachDonHang/edit.php';
    }
        
    public function delete(){
        $id = $_GET['id'];
        $objDanhSachDonHangModel = new DanhSachDonHangModel();
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            $objDanhSachDonHangModel->delete( $id );
            header("Location: ".$this->url_controller."&action=list");
        }
        include 'view/DanhSachDonHang/delete.php';
    }
}