<?php
namespace Model;
include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class QuanLyModel extends DatabaseConnect {
    public function getAll(){
        //lấy tất cả từ bảng Phân Loại
        $sql = "SELECT * FROM quan_ly";
        //thực hiện truy vấn
        $stmt = $this->_db->query( $sql );
        //tùy chọn kiểu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //lấy tất cả kết quả
        $rows = $stmt->fetchAll();

        return $rows;
    }
    public function getOne( $id ){
        //lấy 1 kết quả duy nhất từ hãng dựa vào ID_hang
        $sql = "SELECT * FROM quan_ly WHERE ID_quanly = $id";
        $stmt = $this->_db->query( $sql );
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function update( $id , $data ){
        $Ten_dang_nhap = $data['Ten_dang_nhap'];
        $mat_khau = $data['mat_khau'];
        //cập nhật dữ liệu
        $sql = "UPDATE quan_ly SET 
        Ten_dang_nhap = '$Ten_dang_nhap', 
        mat_khau = '$mat_khau' 
        WHERE ID_quanly = $id";
        $stmt = $this->_db->query( $sql );
    }
    public function insert( $data ){
        $Ten_dang_nhap = $data['Ten_dang_nhap'];
        $Dia_chi = $data['mat_khau'];
        //chèn dữ liệu vào
        $sql = "INSERT INTO quan_ly 
        (Ten_dang_nhap, mat_khau) VALUES 
        ('$Ten_dang_nhap', '$mat_khau')";
        $stmt = $this->_db->query( $sql );
    }
    public function delete(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['confirm'] == 'Có'){
                $id = $_GET['id'];
                $sql = "DELETE FROM quan_ly WHERE ID_quanly = $id";
                $stmt = $this->_db->query( $sql );
            }
        }
    }
    public function checkLogin($Ten_dang_nhap,$mat_khau){
        $sql = "SELECT * FROM quan_ly WHERE Ten_dang_nhap = '$Ten_dang_nhap' AND mat_khau = '$mat_khau'";
        $stmt = $this->_db->query( $sql );
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        if($row->ID_quanly){
            return $row;
        }else{
            return false;
        }
    }
}