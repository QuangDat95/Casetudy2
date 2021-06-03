<?php
//thiết lập lại thời gian
    ini_set('session.gc_maxlifetime',3600);
    //khởi chạy session
    session_start();

    if( isset( $_GET['controller'] )){
        $controller = $_GET['controller'];
    }else{
        $controller = 'PhanLoai';
    }

    if( isset( $_GET['action'] )){
        $action = $_GET['action'];
    }else{
        $action = 'list';
    }

    //kiểm tra đăng nhập
    if(!isset($_SESSION['quan_ly']) && $action != 'login'){
        header("Location: index.php?controller=QuanLy&action=login");
    }
    //application root directory
    define('APP_ROOT_DIR', dirname( __FILE__ ) );
?>
<?php include APP_ROOT_DIR.'/public/layout/header.php';?>
<?php if($action != 'login'):?>
<?php include APP_ROOT_DIR.'/public/layout/menu.php';?>
<?php endif; ?>
<?php include APP_ROOT_DIR.'/router.php';?>
<?php include APP_ROOT_DIR.'/public/layout/footer.php';?>