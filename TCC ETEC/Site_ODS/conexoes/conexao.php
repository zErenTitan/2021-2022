<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco = "ordem_de_servico";
$conexao=mysqli_connect($servidor,$usuario,$senha,$banco) or die ("Não foi possível conectar ao servidor MYSQL.");
mysqli_set_charset($conexao, "utf8");

?>