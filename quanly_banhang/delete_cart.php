<?php
 session_start();
 $id_sp = $_GET['id'];
 unset($_SESSION['gio_hang'][$id_sp]);
 header("Location: cart.php");
 ?>