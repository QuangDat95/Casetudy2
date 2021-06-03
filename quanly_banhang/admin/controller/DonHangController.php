<?php
namespace Controller;

include_once 'model/DonHangModel.php';

use Model\DonHangModel;
class DonHangController{

    public $url_controller = 'index.php?controller=DonHang';

    public function list(){
        $objDonHangModel = new DonHangModel();
        $rows = $objDonHangModel->getAll();
        include 'view/DonHang/list.php';
    }
    public function add(){
        $objDonHangModel = new DonHangModel();
        //kiểm tra xử lý khi submit form với method POST
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            //lấy giá trị gán vào biến
            $Ten_khach_hang = $_REQUEST['Ten_khach_hang'];
            $ngay_mua = $_REQUEST['ngay_mua'];
           
            
            if($Ten_khach_hang != '' && $ngay_mua != ''){
                $data['Ten_khach_hang'] = $Ten_khach_hang;
                $data['ngay_mua'] = $ngay_mua;
                

                $objDonHangModel->insert( $data );
                //chuyển hướng về trang don hang
                header("Location:".$this->url_controller."&action=list");
            }
        }
        include 'view/DonHang/add.php';
    }
    public function edit(){
        $objDonHangModel = new DonHangModel();
        $id = $_GET['id'];
        $row = $objDonHangModel->getOne( $id );
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            //lấy giá trị gán vào biến
            $Ten_khach_hang = $_REQUEST['Ten_khach_hang'];
            $ngay_mua = $_REQUEST['ngay_mua'];
          

            $data['Ten_khach_hang'] = $Ten_khach_hang;
            $data['ngay_mua'] = $ngay_mua;
         

            $objDonHangModel->update( $id , $data );
            header("Location: ".$this->url_controller."&action=list");
        }
        include 'view/DonHang/edit.php';
    }
        
    public function delete(){
        $id = $_GET['id'];
        $objDonHangModel = new DonHangModel();
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            $objDonHangModel->delete( $id );
            header("Location: ".$this->url_controller."&action=list");
        }
        include 'view/DonHang/delete.php';
    }
    public function view(){
        $objDonHangModel = new DonHangModel();
        $id = $_GET['id'];
        $row = $objDonHangModel->getOne( $id );

        $items = $objDonHangModel->getOrderItems($id);
        $so_luong = 0;
        $tong_gia = 0;
        for($i=0;$i<count($items);$i++){
                $so_luong += $items[$i]->So_luong;
                $tong_gia += $items[$i]->Gia_san_pham*$items[$i]->So_luong;
        }
        include 'view/DonHang/view.php';
    }
   
}