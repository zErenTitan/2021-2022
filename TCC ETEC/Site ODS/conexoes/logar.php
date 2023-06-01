<?php
include "conexao.php";
$email = $_POST['email_login'];
$senha=$_POST['senha_login'];
$sql= "select * from funcionario";
$queryselect = mysqli_query($conexao,$sql);

while($dados=mysqli_fetch_array($queryselect)) {
    if($dados['funci_email'] == $email && $dados['funci_senha'] == $senha){
        $_SESSION['funcionario_atual']=$dados['funci_nome'];
        $_SESSION['funcionario_id']=$dados['funci_codigo'];
            
    header("location:../principal.html");

    }else{
        echo"<script>
        alert('Email ou Senha  incorretos.');
        window.location.href='../login.php';
        </script>";
       
    }
}

?>