<?php
namespace Model;
include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class SanPhamModel extends DatabaseConnect {
    public function getAll(){
        $sql = "SELECT san_pham.ID_san_pham, san_pham.Ten_san_pham,san_pham.hinh_anh, san_pham.Gia_san_pham, phan_loai.Ten_hang FROM `san_pham`
        JOIN phan_loai ON san_pham.ID_hang = phan_loai.ID_hang";
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
        $sql = "SELECT * FROM san_pham WHERE ID_san_pham = $id";
        $stmt = $this->_db->query( $sql );
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function update( $id, $data ){
        $ID_hang = $data['ID_hang'];
        $Ten_san_pham = $data['Ten_san_pham'];
        $hinh_anh = $data['hinh_anh'];
        $Gia_san_pham = $data['Gia_san_pham'];
        $sql = "UPDATE san_pham SET 
        ID_hang = '$ID_hang',
        Ten_san_pham = '$Ten_san_pham',
        hinh_anh = '$hinh_anh',
        Gia_san_pham = '$Gia_san_pham'
        WHERE ID_san_pham = $id";
        $stmt = $this->_db->query( $sql );
    }
    public function insert( $data ){
        $ID_hang = $data['ID_hang'];
        $Ten_san_pham = $data['Ten_san_pham'];
        $hinh_anh = $data['hinh_anh'];
        $Gia_san_pham = $data['Gia_san_pham'];
        $sql = "INSERT INTO san_pham 
        (
            ID_hang, 
            Ten_san_pham, 
            hinh_anh, 
            Gia_san_pham) VALUES 
        (
            '$ID_hang', 
            '$Ten_san_pham',
            '$hinh_anh', 
            '$Gia_san_pham'
        )";
        $stmt = $this->_db->query( $sql );
    }
    public function delete(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_POST['confirm'] == 'Có'){
                $id = $_GET['id'];
                $sql = "DELETE FROM san_pham WHERE ID_san_pham = $id";
                $stmt = $this->_db->query( $sql );
            }
        }
    }
}