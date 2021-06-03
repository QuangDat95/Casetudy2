<?php
namespace Model;
include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class DanhSachDonHangModel extends DatabaseConnect {
    public function getAll(){
        /*
        sql lấy (id, khuyen mai, so luong) từ bảng chi_tiet_don_hang, 
        (ten kh từ don hang), (tên sp giá sp từ sản phẩm)
        */
        $sql = "SELECT  * FROM `chi_tiet_don_hang`
                        JOIN don_hang ON chi_tiet_don_hang.ID_don_hang = don_hang.ID_don_hang
                        JOIN san_pham ON chi_tiet_don_hang.ID_san_pham = san_pham.ID_san_pham";
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
        $sql = "SELECT * FROM chi_tiet_don_hang WHERE ID_chi_tiet = $id";
        //thưc hien truy vấn
        $stmt = $this->_db->query( $sql );
        //tùy chọn kiểu trả Về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
         //lấy 1 kết quả
        $row = $stmt->fetch();
        return $row;
    }
    public function update( $id, $data ){
        $ID_don_hang = $data['ID_don_hang'];
        $ID_san_pham = $data['ID_san_pham'];
        $So_luong = $data['So_luong'];
        
        $sql = "UPDATE chi_tiet_don_hang SET
        ID_don_hang = '$ID_don_hang',
        ID_san_pham = '$ID_san_pham',
        So_luong = '$So_luong'
        
        WHERE ID_chi_tiet = $id";
        $stmt = $this->_db->query( $sql );
    }
    public function insert( $data ){
        $ID_don_hang = $data['ID_don_hang'];
        $ID_san_pham = $data['ID_san_pham'];
        $So_luong = $data['So_luong'];
        
        $sql = "INSERT INTO chi_tiet_don_hang 
        (ID_don_hang, ID_san_pham, So_luong) VALUES 
        ( '$ID_don_hang', '$ID_san_pham', '$So_luong' )"; 
         $new_ID = $this->_db->lastInsertId();
        $stmt = $this->_db->query( $sql );
    }
    public function delete(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_POST['confirm'] == 'Có'){
                $id = $_GET['id'];
                $sql = "DELETE FROM chi_tiet_don_hang WHERE ID_chi_tiet = $id";
                $stmt = $this->_db->query( $sql );
            }
        }
    }
}