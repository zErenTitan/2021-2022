<?php
session_start();
if(isset($_SESSION['usuarioatual'])){
    session_destroy();
    header ("location:../index.php");
}else if(isset($_SESSION['emp_atual'])){
    session_destroy();
    header ("location:../index.php");
}


?>