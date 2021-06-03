<?php
namespace Model;
use PDO;
class DatabaseConnect{
    protected $_db = null;

    public function __construct(){
        $username = 'root'; //tên đăng nhập CSDL
        $password = ''; // mật khẩu
        $options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $this->_db = new PDO('mysql:host=localhost;dbname=quanly_banhang', $username, $password, $options);
    }
}