<?php
namespace Model;
include_once 'model/DatabaseConnect.php';

use Model\DatabaseConnect;
use PDO;

class PhanLoaiModel extends DatabaseConnect {
    public function getAll(){
        //lấy tất cả từ bảng Phân Loại
        $sql = "SELECT * FROM phan_loai";
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
        $sql = "SELECT * FROM phan_loai WHERE ID_hang = $id";
        $stmt = $this->_db->query( $sql );
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function update( $id , $data ){
        $Ten_hang = $data['Ten_hang'];
        //cập nhật dữ liệu
        $sql = "UPDATE phan_loai SET 
        Ten_hang = '$Ten_hang' 
        WHERE ID_hang = $id";
        $stmt = $this->_db->query( $sql );
    }
    public function insert( $data ){
        $Ten_hang = $data['Ten_hang'];
        //chèn dữ liệu vào
        $sql = "INSERT INTO phan_loai (Ten_hang) VALUES ('$Ten_hang')";
        $stmt = $this->_db->query( $sql );
    }
    public function delete(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['confirm'] == 'Có'){
                $id = $_GET['id'];
                $sql = "DELETE FROM phan_loai WHERE ID_hang = $id";
                $stmt = $this->_db->query( $sql );
            }
        }
    }
}