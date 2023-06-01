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
            <legend><h1>Cadastro de Peças</h1></legend>
            
               
                
                Nome da Peça: <input type="text" id="nom_peca" name="nom_peca" required="required"  
                size="50" style="font-family: 'Times New Roman'; font-size: 20px; font-weight: bold;"></p>

                <p>Fornecedor: <input type="text" id="for_peca" name="for_peca" required="required"
                size="35" style="font-family: 'Times New Roman'; font-size: 20px; font-weight: bold; ">

                Valor Unitário: <input type="text" id="val_peca" name="val_peca" required="required"  size="1" style="font-family: 'Times New Roman'; font-size: 20px; font-weight: bold;">
        
                <input class="btn_submit" type="submit" value="Cadastrar" style="font-family: 'Times New Roman'"></p>        
            
            
        </form>     

    </div>
    
</body>
<?php
if($_POST){


   include "../conexoes/conexao.php";
   $nome_peca=$_POST['nom_peca'];
   $fornecedor=$_POST['for_peca'];
   $val_peca=$_POST['val_peca'];
   $sql="insert into produtos (prod_nome,prod_descricao,prod_valor_unit) values('$nome_peca','$fornecedor','$val_peca')";

   $conectar=mysqli_query($conexao,$sql);
   if($conectar){
       echo "<script>alert('sucesso!')</script>";
       
   }
}

?>
</html>