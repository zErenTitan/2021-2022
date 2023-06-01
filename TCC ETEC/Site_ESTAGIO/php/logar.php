<?php
    include("conexao.php");
    //Trazer a variável tipo de usuário do frmLogin


    //Variáveis para validar o login
    $Login = $_POST["txtUsuario"];
    $Senha = $_POST["txtSenha"];

    $sql = "select * from usuario";


    //Se validou fecha <meta http-equiv="refresh" content="1; URL='../paginas/index.html'"/>

    //Else atualiza e avisa login inválido!
?>
 