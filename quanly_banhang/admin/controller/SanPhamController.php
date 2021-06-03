<?php
namespace Controller;

include_once 'model/SanPhamModel.php';

use Model\SanPhamModel;
use Model\PhanLoaiModel;
class SanPhamController{

    public $url_controller = 'index.php?controller=SanPham';

    public function list(){
        $objSanPhamModel = new SanPhamModel();
        $rows = $objSanPhamModel->getAll();
        include 'view/SanPham/list.php';
    }
    public function add(){
        $objSanPhamModel = new SanPhamModel();
        $objPhanLoaiModel = new PhanLoaiModel();
        $phan_loais = $objPhanLoaiModel->getAll();
        //kiểm tra xử lý khi submit form với method POST
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            //lấy giá trị gán vào biến
            $ID_hang = $_REQUEST['ID_hang'];
            $Ten_san_pham = $_REQUEST['Ten_san_pham'];
            $Gia_san_pham = $_REQUEST['Gia_san_pham'];

            if( isset( $_FILES['hinh_anh'] )  ){
                $tmp_name       = $_FILES['hinh_anh']['tmp_name'];
                $file_name      = $_FILES['hinh_anh']['name'];
                $targer_file    = 'public/img/products/'.$file_name;
                move_uploaded_file($tmp_name,$targer_file);

                $data['hinh_anh'] = $targer_file;
            }


            if($ID_hang != '' && $Ten_san_pham != '' && $Gia_san_pham != ''){
                $data['ID_hang'] = $ID_hang;
                $data['Ten_san_pham'] = $Ten_san_pham;
                $data['Gia_san_pham'] = $Gia_san_pham;
                $objSanPhamModel->insert( $data );
                //chuyển hướng về trang sản phẩm
                header("Location:".$this->url_controller."&action=list");
            }
        }
        include 'view/SanPham/add.php';
    }
    public function edit(){
        $objSanPhamModel = new SanPhamModel();
        $objPhanLoaiModel = new PhanLoaiModel();
        $phan_loais = $objPhanLoaiModel->getAll();
        $id = $_GET['id'];
        $row = $objSanPhamModel->getOne( $id );
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            //lấy giá trị gán vào biến
            $ID_hang = $_REQUEST['ID_hang'];
            $Ten_san_pham = $_REQUEST['Ten_san_pham'];
            $Gia_san_pham = $_REQUEST['Gia_san_pham'];

            if(isset($_FILES['hinh_anh'])){
                $tmp_name       = $_FILES['hinh_anh']['tmp_name'];
                $file_name      = $_FILES['hinh_anh']['name'];
                /*
                    bi-kip-phong.van-4.jpg
                    logo.png
                    logo.jpgeg
                */
                $duoi           = end( explode('.',$file_name) );
                /*
                    time(): 123456788765
                */
                $file_name      = time().'.'.$duoi;
                /*
                    $file_name = 123456788765.jpg
                */

                $targer_file    = 'public/img/products/'.$file_name;
                move_uploaded_file($tmp_name,$targer_file);

                $data['hinh_anh'] = $targer_file;
            }

            $data['ID_hang'] = $ID_hang;
            $data['Ten_san_pham'] = $Ten_san_pham;
            $data['Gia_san_pham'] = $Gia_san_pham;

            $objSanPhamModel->update( $id , $data );
            header("Location: ".$this->url_controller."&action=list");
        }
        include 'view/SanPham/edit.php';
    }
    public function delete(){
        $id = $_GET['id'];
        $objSanPhamModel = new SanPhamModel();
        if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            $objSanPhamModel->delete( $id );
            header("Location: ".$this->url_controller."&action=list");
        }
        include 'view/SanPham/delete.php';
    }
}