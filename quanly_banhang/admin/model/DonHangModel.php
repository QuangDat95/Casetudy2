<?php
namespace Model;
include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class DonHangModel extends DatabaseConnect {
    public function getAll(){
        $sql = "SELECT * FROM don_hang";
        //thưc hien truy vấn
        $stmt = $this->_db->query( $sql );
        //tùy chọn kiểu trả Về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //lấy tất cả kết quả
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getOne( $id ){
        //lấy 1 kết quả duy nhất từ sản phẩm dựa vào id sản phẩm
        $sql = "SELECT * FROM don_hang WHERE ID_don_hang = '$id'";
        $stmt = $this->_db->query( $sql );
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function update( $id, $data ){
        $Ten_khach_hang = $data['Ten_khach_hang'];
        $ngay_mua = $data['ngay_mua'];
       
        $sql = "UPDATE don_hang SET
        Ten_khach_hang = '$Ten_khach_hang',
        ngay_mua = '$ngay_mua'
        WHERE ID_don_hang = $id";
        $stmt = $this->_db->query( $sql );
    }
    public function insert( $data ){
        $Ten_khach_hang = $data['Ten_khach_hang'];
        $ngay_mua = $data['ngay_mua'];
     
        $sql = "INSERT INTO don_hang 
        (Ten_khach_hang, ngay_mua) VALUES 
        ('$Ten_khach_hang', '$ngay_mua')";
        $ID_new_san_pham = $this->_db->lastInsertId();
        $stmt = $this->_db->query( $sql );
    }
    public function delete(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_POST['confirm'] == 'Có'){
                $id = $_GET['id'];
                $sql = "DELETE FROM don_hang WHERE ID_don_hang = $id";
                $stmt = $this->_db->query( $sql );
            }
        }
    }
    public function getOrderItems($id){
        $sql = "SELECT * FROM `chi_tiet_don_hang` 
        JOIN san_pham ON chi_tiet_don_hang.ID_san_pham = san_pham.ID_san_pham
         WHERE ID_don_hang = '$id'";
         //thưc hien truy vấn
        $stmt = $this->_db->query( $sql );
        //tùy chọn kiểu trả Về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //lấy tất cả kết quả
        $rows = $stmt->fetchAll();
        return $rows;
    }
}