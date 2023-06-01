<?php
session_start();
unset( $_SESSION['funcionario_atual']);
unset( $_SESSION['funcionario_id']);

echo" <script>window.history.back();</script>
window.location.href='../paginas/login.php';
";

?>