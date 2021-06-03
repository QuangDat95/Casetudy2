<?php
    namespace Controller;

    include_once 'model/QuanLyModel.php';

    use Model\QuanLyModel;
    class QuanLyController{

        public $url_controller = 'index.php?controller=QuanLy';

        public function list(){
            $objQuanLyModel = new QuanLyModel();
            $rows = $objQuanLyModel->getAll();
            include 'view/QuanLy/list.php';
        }
        public function add(){
            $objQuanLyModel = new QuanLyModel();
            //kiểm tra xử lý khi submit form với method POST
            if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                //lấy giá trị gán vào biến
                $Ten_dang_nhap = $_REQUEST['Ten_dang_nhap'];
                $mat_khau = $_REQUEST['mat_khau'];
                //xác thực dữ liệu
                if($Ten_dang_nhap != '' && $mat_khau != ''){
                    $data['Ten_dang_nhap'] = $Ten_dang_nhap;
                    $data['mat_khau'] = $mat_khau;
                    $objQuanLyModel->insert( $data );
                    //chuyển hướng về loại sp
                    header("Location:".$this->url_controller."&action=list");
                }
            }
            include 'view/QuanLy/add.php';
        }
        public function edit(){
            $objQuanLyModel = new QuanLyModel();
            $id = $_GET['id'];
            $row = $objQuanLyModel->getOne( $id );
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //lấy giá trị gán vào biến
                $Ten_dang_nhap = $_REQUEST['Ten_dang_nhap'];
                $mat_khau = $_REQUEST['mat_khau'];

                $data['Ten_dang_nhap'] = $Ten_dang_nhap;
                $data['mat_khau'] = $mat_khau;
                $objQuanLyModel->update( $id , $data );
                //chuyển hướng về trang hãng đt
                header("Location:".$this->url_controller."&action=list");
            }
            include 'view/QuanLy/edit.php';
        }
        public function delete(){
            $id = $_GET['id'];
            $objQuanLyModel = new QuanLyModel();
            if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                $objQuanLyModel->delete( $id );
                header("Location: ".$this->url_controller."&action=list");
            }
            include 'view/QuanLy/delete.php';
        }
        public function login(){
            if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                $Ten_dang_nhap = $_REQUEST['Ten_dang_nhap'];
                $mat_khau = $_REQUEST['mat_khau'];
                
                $objQuanLyModel = new QuanLyModel();
                $quan_ly = $objQuanLyModel->checkLogin($Ten_dang_nhap,$mat_khau);
                if($quan_ly){
                    $_SESSION['quan_ly'] = $quan_ly;
                    $_SESSION['thong_bao_thanh_cong']   = 'Đăng nhập thành công';
                    header("Location: index.php?controller=PhanLoai&action=list");
                }else{
                    $_SESSION['thong_bao_loi'] = 'Tài khoản không chính xác';
                    header("Location: ".$this->url_controller."&action=login");
                }
            }else{
                include 'view/QuanLy/login.php';
            }    
        }
        public function logout(){
            unset($_SESSION['quan_ly']);
            $_SESSION['thong_bao_thanh_cong']   = 'Đăng xuất thành công';
            header("Location: ".$this->url_controller."&action=login");
        }
    }