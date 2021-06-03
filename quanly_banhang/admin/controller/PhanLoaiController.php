<?php
    namespace Controller;

    include_once 'model/PhanLoaiModel.php';

    use Model\PhanLoaiModel;
    class PhanLoaiController{

        public $url_controller = 'index.php?controller=PhanLoai';

        public function list(){
            $objPhanLoaiModel = new PhanLoaiModel();
            $rows = $objPhanLoaiModel->getAll();
            include 'view/PhanLoai/list.php';
            
        }
        public function add(){
            $objPhanLoaiModel = new PhanLoaiModel();
            //kiểm tra xử lý khi submit form với method POST
            if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                //lấy giá trị gán vào biến
                $Ten_hang = $_REQUEST['Ten_hang'];
                //xác thực dữ liệu
                if($Ten_hang != ''){
                    $data['Ten_hang'] = $Ten_hang;
                    $objPhanLoaiModel->insert( $data );
                    //chuyển hướng về loại sp
                    header("Location:".$this->url_controller."&action=list");
                }
            }
            include 'view/PhanLoai/add.php';
        }
        public function edit(){
            $objPhanLoaiModel = new PhanLoaiModel();
            $id = $_GET['id'];
            $row = $objPhanLoaiModel->getOne( $id );
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //lấy giá trị gán vào biến
                $Ten_hang = $_REQUEST['Ten_hang'];

                $data['Ten_hang'] = $Ten_hang;
                $objPhanLoaiModel->update( $id , $data );
                //chuyển hướng về trang hãng đt
                header("Location:".$this->url_controller."&action=list");
            }
            include 'view/PhanLoai/edit.php';
        }
        public function delete(){
            $id = $_GET['id'];
            $objPhanLoaiModel = new PhanLoaiModel();
            if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                $objPhanLoaiModel->delete();
                header("Location: ".$this->url_controller."&action=list");
            }
            include 'view/PhanLoai/delete.php';
        }
    }