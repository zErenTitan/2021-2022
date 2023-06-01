<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <title>cadastro de peças</title>
    <link rel="stylesheet" type="text/css" href="../css/consulta_peca.css"/>
</head>
<style>

    body{
        background-color:white;
    }
</style>
<body>
    <div class="novo_serv">
        <form method="POST" autocomplete="off">
            <legend><h1>Cadastro de Serviços:</h1></legend>
            
             
                
                Nome do Serviço: <input type="text" id="nome_serv" name="nome_serv" required  
                size="50" style="font-family: 'Times New Roman'; font-size: 20px; font-weight: bold;"></p>

                <p>Descrição: <input type="text" id="descricao" name="descricao" 
                size="35" style="font-family: 'Times New Roman'; font-size: 20px; font-weight: bold; ">

                Valor: <input type="text" id="valor" name="valor" required  size="1" style="font-family: 'Times New Roman'; font-size: 20px; font-weight: bold;">
        
                <input class="btn_submit" type="submit" value="Cadastrar" style="font-family: 'Times New Roman'"></p>        
            
            
        </form>     

    </div>
    
</body>
<?php
if($_POST){


   include "../conexoes/conexao.php";
   $nome_serv=$_POST['nome_serv'];
   $descricao=$_POST['descricao'];
   $valor=$_POST['valor'];
   $sql="insert into servicos (serv_nome,serv_descricao,serv_valor) values('$nome_serv','$descricao',$valor)";

   $conectar=mysqli_query($conexao,$sql);
   if($conectar){
       echo "<script>alert('sucesso!')</script>";
       
   }
}

?>
</html>