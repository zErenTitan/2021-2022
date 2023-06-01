<?php
include "conexao.php";

$nome=$_POST['nome_cad'];
$email=$_POST['email_cad'];
$senha=$_POST['senha_cad'];
$rg= $_POST['rg_cad'];
$cpf = $_POST ['cpf_cad'];
$introduzir = "insert into funcionario(funci_nome,funci_email,funci_rg,funci_cpf) values('$nome','$email','$rg','$cpf') " or die();
mysqli_query($conexao,$introduzir);
echo"<script>
alert('Cadastro Realizado Com Sucesso!!!');
window.location.href='../paginas/cadastro.php';
</script>";

?>