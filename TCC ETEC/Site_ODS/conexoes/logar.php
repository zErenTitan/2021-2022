<?php
session_start();
include "conexao.php";
$email = $_POST['email_login'];
$senha=$_POST['senha_login'];
$sql= "select * from administrador";
$queryselect = mysqli_query($conexao,$sql);

while($dados=mysqli_fetch_array($queryselect)) {
    if($dados['adm_email'] == $email && $dados['adm_senha'] == $senha){
        $_SESSION['funcionario_atual']=$dados['adm_email'];
        $_SESSION['funcionario_id']=$dados['adm_codigo'];
            
    header("location:../principal.php");

    }else{
        echo"<script>
        alert('Email ou Senha  incorretos.');
        window.location.href='../paginas/login.php';
        </script>";
       
    }
}

?>