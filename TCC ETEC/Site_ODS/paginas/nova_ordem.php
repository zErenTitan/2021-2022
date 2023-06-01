<!DOCTYPE html>
<html lang="pt-br">

    
    <head>
    <link rel="stylesheet" href="../css/ordem_de_serv.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
    </script>
        <title>Nova OS</title>
        
        
        
    </head>
    <style>
        body{
             
            background-color:white;
        }
       
       
    </style>
    
    <body>
    
  
        <div class="nova_os ">

          
        
               
                
                    <P>
                        <h1>Ordem de Serviço:</h1>                        
                    <hr>
                    </p>
                    <?php 
                    include "../conexoes/conexao.php";
                    $sql_fund= "SELECT * from ord_de_serv";
                    $conexao_fund = mysqli_query($conexao,$sql_fund);
                    $contagem = mysqli_num_rows($conexao_fund);
                    $real=$contagem + 1;
                    
                   
            
                    if($_GET){

                        include "../conexoes/conexao.php";
                        $cpf=$_GET['cli_cpf'];
                        $sql="select * from cliente where cpf = $cpf";
                        $consultar=mysqli_query($conexao,$sql);
                        $linha= mysqli_fetch_assoc($consultar);
                       
                        if(mysqli_num_rows($consultar)>0){
                        
                     
                   

                          
                                do{

                                    $codigo = $linha['cli_codigo'];
                                    $nome=$linha['cli_nome'];
                                    $data_de_nascimento = $linha['cli_nascimento'];
                                    $cpf2=$linha['cpf'];
                                    $cnpj=$linha['cli_cnpj'];
                                    $celular=$linha['cli_cel'];
                                    $tel_fixo=$linha['cli_tel_fixo'];
                                    $cep=$linha['cep'];
                                    $endereco=$linha['cli_rua'];
                                    $cidade=$linha['cidade'];
                                    $uf=$linha['uf'];
                                    $bairro=$linha['cli_bairro'];
                                    $numero=$linha['cli_numero_casa'];
                                    $rg=$linha['cli_rg'];
                                    echo"
                                    <form method='POST'>
                                   Codigo da ODS: <input type='text'  value='$real' name='ord_codigo'>
                                    Nome: <input type='text' name='nome'  autocomplete='off' disabled required='required' id='nome' value='$nome' > 
                            
                                    Data de Nascimento: <input type='date' name='nascimento' disabled value='$data_de_nascimento' id='dt_nasc' >
                                    </p>
                                    <p>
                                
            
                                    
                                    CPF: <input type='text' maxlength='14' disabled value='$cpf2' name='cpf'  placeholder='000.000.000-00' required='required' autocomplete='off'  id='cpf'>
                                    

                                    RG: <input type='text' value='$rg' disabled name='rg'  placeholder=' 000.000.000-0' required='required' autocomplete='off'  id='rg'>
                                    

                                        CNPJ: <input type='text' disabled name='cli_cnpj' value='$cnpj' ' placeholder =' 99.999.999/9999-99' autocomplete='off' maxlength='18' id='cnpj'>
                                        
                                        <br>
                                            
                                        Celular: <input type='text' disabled value='$celular' name='celular' placeholder='(99)99999-9999'  class='cli_cel' autocomplete='off' id='cli_cel'>
                                        
                                                
                                        Telefone Fixo:<input type='text' disabled value='$tel_fixo' name='telefone'   placeholder='(99)9999-9999' maxlength='13' autocomplete='off' maxlength='13' id='telefone'>
                                    
                                    </P>
                                    
                                    <P>
            
                                        CEP:<input type='text' disabled name='cep' value='$cep' placeholder=' 00000-000' maxlength='9'autocomplete='off' id='cep'>
                                    
                                        
                                        Endereço: <input type='text' disabled name='endereco' value='$endereco'  id='endereco'>
                                        
                
                                        Cidade: <input type='text' name='cidade'  disabled  value='$cidade' id='cidade'>
                                    
                                        
                                        <Br>UF: <input type='text' name='uf' disabled value='$uf' id='uf'>
                            
                                        
                                        Bairro: <input type='text' disabled name='bairro' value='$bairro' id='bairro'>
                                    
                                        
                                        Número: <input type='text' disabled name='num_endereco' value='$numero'  id='numero'>
                                    
                                        
                                        
                                                
                                    </P>
                                    <p>

                                    Marca da Moto: 
                                      <input type='text' name='marca' >                                           
                                    </select>


                                                    

                                    Modelo: <input type='text' id='mod' name='modelo'>    
                                    
                                    Ano: <input type='text' id='am' name='ano'   maxlength='4'>    
                                    
                                    <br>Placa: <input type='text' id='placa' name='placa1'  maxlength='3'>
                                    - <input type='text'  maxlength='4' 
                                    id='placa2' name='placa2'>   <br><br>
                                    <div id='final'>
                                    Data de Entrada: <input type='text' name='entrada' id='entrada' style='font-family: 'Times New Roman'; font-size: 20px; font-weight: bold; '>
                                    
                                    <input type='submit' value='Salvar'>
                                    </div>
                                    </form>
                                    ";
                                    
                                }while($linha= mysqli_fetch_assoc($consultar));
                            }
                    }else {
                          echo"
                          <form method='GET'  >
                    <p style='color: red;'>Favor digitar sem os traços.</p>
                    <p>Digite o CPF do cliente para continuar.</p>
                    <input type='text' name='cli_cpf' id='cpf'>
                    <input type='submit' value='Buscar'>";
                    
                    }


                    if($_POST){
                        
                      
                        
                        $marca= $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $ano = $_POST['ano'];
                        $placa1= $_POST['placa1'];
                        $placa2=$_POST['placa2'];
                        $dta_entrada = $_POST['entrada'];
                        $sql2 = "INSERT INTO ord_de_serv (ord_de_serv_cli_codigo,marca,modelo,ano,placa_veiculo1,placa_veiculo2,ord_de_serv_data) VALUES($codigo,'$marca','$modelo','$ano','$placa1','$placa2','$dta_entrada')" ;
                        $lancar= mysqli_query($conexao,$sql2);
                        echo"<script>
                        alert('Ordem de Serviço Cadastrada com Sucesso!!!');
                        window.location.href='../paginas/nova_ordem.php';
                        </script>";
                      
                    }
                    
                    ?>
                </form>
            </div>
    </body>
</html>         
                           