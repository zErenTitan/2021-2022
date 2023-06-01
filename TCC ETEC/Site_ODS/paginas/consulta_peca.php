<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consulta_peca.css">
    <link rel="stylesheet" type="text/css" href="estilo_menutop.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body >
<div id="botao">
      
    
  
    <div class="container" id="tabela" >
    <button type="button" class="botoes btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Lista de Produtos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
        include "../conexoes/conexao.php";
        $sql="select * from produtos";
        $conectar=mysqli_query($conexao,$sql);
        $listar= mysqli_fetch_assoc($conectar);
        echo"
        <table border='1'>
        <tr>
        <td>Código</td>
        <td width='300'>Nome</td>
        <td width='200'>Descrição</td>
        <td>Quantidade</td>
        <td>Valor Unitário</td>
        </tr>";
        do{
            $cod_prod=$listar['prod_codigo'];
            $prod_nome= $listar['prod_nome'];
            $prod_descr=$listar['prod_descricao'];
            $prod_qtd=$listar['prod_qtd'];
            $valor_unit = $listar['prod_valor_unit'];
            echo"<tr>
            <td>$cod_prod</td>
            <td>$prod_nome</td>
            <td>$prod_descr</td>
            <td>$prod_qtd</td>
            <td>$valor_unit</td>
            
            </tr>
            
            
            
            ";

        }while($listar= mysqli_fetch_assoc($conectar));

        echo"
        
        </table>"


        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
    </div>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <div id="consulta_prod">
        <form method="GET" autocomplete="off">
            <legend><h3>Consulta de Produtos e Peças </h3></legend>

            <p>Código: <input type="text" required id="cad_cod" name="codigo_busca" size='1'>

            

            <input class="btn_submit" type="submit" value="Consultar" style="font-family: 'Times New Roman'"></p>  
        </form>
    </div>
    <div id="busca">
                <?php
                
                 if($_GET ){ 
                $codigo_busca=$_GET['codigo_busca'];
                $sql2="select *  from produtos where prod_codigo=$codigo_busca";
                $conectar2=mysqli_query($conexao,$sql2) ;
                if(mysqli_num_rows($conectar2)>0){
                $linha = mysqli_fetch_assoc($conectar2);
                $codigo_da_busca=$linha['prod_codigo'];
                $prod_nome_buscado= $linha['prod_nome'];
                $prod_descr_buscado=$linha['prod_descricao'];
                $prod_qtd_buscado=$linha['prod_qtd'];
                $prod_valor_buscado = $linha['prod_valor_unit'];
                echo"<br><br>
                <div id='resultado_busca'>
                <form method='POST'>
                Código: <input type='text' name='codigo_anterior' disabled size='1' value='$codigo_da_busca' >
                Nome do Produto: <input type='text' name='novo_nome'size='60vw'  value='$prod_nome_buscado' >
                Descrição do Produto: <input type='text' name='nova_descri'  value='$prod_descr_buscado' >
                <br><br>
                Quantidade: <input type='text' name='nova_qtd'  value='$prod_qtd_buscado' >
                Valor Unidade: <input type='test' name='novo_valor' value = '$prod_valor_buscado'>

                <input type='submit' class='btn btn-success' value='Atualizar'>
                </form>
                
                ";
              }else{
                echo "Serviço não encontrado.";
              }
                 }
                 if($_POST ){
                   
                   $codigo_anterior = $codigo_da_busca;
                   $novo_nome = $_POST['novo_nome'];
                   $nova_descri= $_POST['nova_descri'];
                   $nova_qtd=$_POST['nova_qtd'];
                   $novo_valor= $_POST['novo_valor'];
                   $sql3 = "update produtos set prod_nome='$novo_nome' , prod_descricao = '$nova_descri', prod_qtd = $nova_qtd ,  prod_valor_unit = $novo_valor where prod_codigo = $codigo_anterior";
                   $atualizar = mysqli_query($conexao,$sql3);
                  echo" <script>window.history.back();</script>
                  ";

                 }
                ?>
            
            </div>

     
          

    


    
</body>
</html>