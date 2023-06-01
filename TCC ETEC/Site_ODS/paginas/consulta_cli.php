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
    Lista de Clientes
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
        include "../conexoes/conexao.php";
        $sql="select * from cliente";
        $conectar=mysqli_query($conexao,$sql);
        $listar= mysqli_fetch_assoc($conectar);
        echo"
        <table border='1'>
        <tr>
        <td width='200'>Nome</td>
        <td>Data de Nascimento:</td>
        <td widht='200'>CPF</td>
        </tr>";
        do{

            $cli_nome= $listar['cli_nome'];
            $dta_de_nasci = $listar['cli_nascimento'];
            $cpf=$listar['cpf'];
            echo"<tr>
            <td>$cli_nome</td>
            <td>$dta_de_nasci</td>
            <td>$cpf</td>
         
            
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
    
            <legend><h3>Consulta de Clientes</h3></legend>
            <p style="color: red;">Favor digitar sem os traços.</p>
            <p>CPF: <input type="text" required id="cpf" name="cpf_busca" size='9'>

            

            <input  type="submit" value="Consultar" style="font-family: 'Times New Roman'"></p>  
        </form>
    </div>
    <div id="busca">
                <?php
                
                if($_GET ){ 
                
                  $cpf_busca=$_GET['cpf_busca'];
                  $sql2="select * from cliente where cpf=$cpf_busca";
                  $conectar2=mysqli_query($conexao,$sql2);
                  if(mysqli_num_rows($conectar2)>0){
                    $linha = mysqli_fetch_assoc($conectar2);
                    $codigo_da_busca=$linha['cli_codigo'];
                    $cli_nome_buscado= $linha['cli_nome'];
                    $cli_dta_nasci=$linha['cli_nascimento'];
                    $cpf_buscado=$linha['cpf'];
                    $cli_rg = $linha['cli_rg'];
                    $cli_cnpj = $linha['cli_cnpj'];
                    $cli_cel = $linha['cli_cel'];
                    $cli_tel_fixo = $linha['cli_tel_fixo'];
                    $cli_cep = $linha['cep'];
                    $cli_rua = $linha['cli_rua'];
                    $cli_numero_casa = $linha['cli_numero_casa'];
                    $cli_bairro = $linha['cli_bairro'];
                    $cli_cidade= $linha['cidade'];
                    $cli_uf=$linha['uf'];

                    echo"<br><br>
                    <div id='resultado_busca'>
                    <form method='POST'>
                    <input name='codigo_anterior' hidden size='1' value='$codigo_da_busca' >
                    Nome do Cliente: <input type='text' name='novo_nome'size='60vw'  value='$cli_nome_buscado' >
                    Data de Nascimento: <input type='date' name='nova_dta'  value='$cli_dta_nasci' >
                    CPF: <input type='text' name='novo_cpf' size='9'  value='$cpf_buscado' >
                    <br><br>
                    RG: <input type='text' name='novo_rg' size='10' value = '$cli_rg'>
                    CNPJ: <input type='text' name='novo_cnpj'size='20' value = '$cli_cnpj'>
                    Celular: <input type='text' name='novo_cel' size='12' value = '$cli_cel'>
                    Telefone Fixo: <input type='text' size='10' name='novo_tel_fixo' value = '$cli_tel_fixo'>
                    CEP: <input type='text' name='novo_cep' size='10' value = '$cli_cep'>
                    <br><br>
                    Rua: <input type='text' name='nova_rua' size='60' value = '$cli_rua'>
                    Número: <input type='text' name='novo_numero' size='2' value = '$cli_numero_casa'>
                    Bairro: <input type='text' name='novo_bairro' size=25 value = '$cli_bairro'>
                    <br><br>
                    Cidade: <input type='text' name='nova_cidade' value = '$cli_cidade'>
                
                    UF: <input type='text' name='nova_uf'size ='1' value = '$cli_uf'>
                    
                    <input type='submit' class='btn btn-success' value='Atualizar'>
                    </form>
                    
                    ";
                  }else{
                    echo "Produto não encontrado.";
                  }
                }
                 if($_POST){
                   
                 
                  $novo_nome = $_POST['novo_nome'];
                  $nova_dta= $_POST['nova_dta'];
                  $novo_cpf= $_POST['novo_cpf']; 
                  $novo_rg = $_POST['novo_rg'];
                  $novo_cnpj = $_POST['novo_cnpj'];
                  $novo_cel = $_POST['novo_cel'];
                  $novo_tel_fixo = $_POST['novo_tel_fixo'];
                  $novo_cep = $_POST['novo_cep'];
                  $nova_rua = $_POST['nova_rua'];
                  $novo_numero = $_POST['novo_numero'];
                  $novo_bairro = $_POST['novo_bairro'];
                  $nova_cidade = $_POST['nova_cidade'];
                  $nova_uf = $_POST['nova_uf'];



                   $sql3 = "update cliente SET cli_nome = '$novo_nome' ,  cli_nascimento= '$nova_dta ', cpf='$novo_cpf' , cli_rg =' $novo_rg' , cli_cnpj = '$novo_cnpj' ,  cli_cel = '$novo_cel', cli_tel_fixo = '$novo_tel_fixo' , cep = '$novo_cep' , cli_rua = '$nova_rua ', cli_numero_casa = '$novo_numero' , cli_bairro = '$novo_bairro' , cidade = '$nova_cidade' , uf= '$nova_uf' where cli_codigo = $codigo_da_busca ";
                   $atualizar = mysqli_query($conexao,$sql3);
                  echo" <script>window.history.back();</script>
                  ";

                 }
               
                ?>
            
            </div>

     
          

    


    
</body>
</html>