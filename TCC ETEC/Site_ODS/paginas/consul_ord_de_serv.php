<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consul_ordem_de_serv.css">
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
<body>
   



<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de OS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
        include "../conexoes/conexao.php";
        $sql="select * from ord_de_serv";
        $conectar10=mysqli_query($conexao,$sql);
        $listar10= mysqli_fetch_assoc($conectar10);
        echo"
        <table border='1'>
        <tr>
        <td width='100'>Código</td>
        <td>Placa</td>
        <td widht='200'>Data Entrada</td>
        </tr>";
        do{

            $os_codigo= $listar10['ord_de_serv_codigo'];
            $pl1=$listar10['placa_veiculo1'];
            $pl2=$listar10['placa_veiculo2'];
            $entrada=$listar10['ord_de_serv_data'];
            echo"<tr>
            <td>$os_codigo</td>
            <td>$pl1-$pl2</td>
            <td>$entrada</td>
         
            
            </tr>
            
            
            
            ";

        }while($listar10= mysqli_fetch_assoc($conectar10));

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
    <div class="nova_os">   
    <h1>Editar Ordem de Serviço</h1>

    <?php
      
        if($_GET){
            $codigo_ods=$_GET['codigo_ordem'];
            $cli_cpf = $_GET['cli_cpf'];
            
            

                        include "../conexoes/conexao.php";
                       
                        $sql1="SELECT ord.*,cli.* from cliente as cli inner join ord_de_serv as ord where ord.ord_de_serv_codigo = $codigo_ods and cli.cpf = $cli_cpf";
                        $consultar=mysqli_query($conexao,$sql1);
                      
                        $linha= mysqli_fetch_assoc($consultar);
                      
                        if(mysqli_num_rows($consultar)){
                        
                            $consultar=mysqli_query($conexao,$sql1);
                   

                          
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
                                    <form method='POST' >
                                    <input type='text' hidden value='$codigo' name='cli_codigo'>
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
                                    <p>";
                                  
                                    $marca=$linha['marca'];
                                    $modelo = $linha['modelo'];
                                    $ano=$linha['ano'];
                                    $placa1= $linha['placa_veiculo1'];
                                    $placa2= $linha['placa_veiculo2'];
                                    $data_entrada= $linha['ord_de_serv_data'];
                                    echo"
                                    Marca da Moto: 
                                    <input type='text' name='marca' value='$marca'>
                                        
                                                                                    
                                    </select>
                                
                                    

                                                    
                                    
                                    Modelo: <input type='text' id='modelo' value='$modelo' name='modelo'>    
                                    
                                    Ano: <input type='text' id='ano' value='$ano' name='ano'   maxlength='4'>    
                                    
                                    <br>Placa: <input type='text' id='placa' value='$placa1'name='placa1'  maxlength='3'>
                                    <input type='text'  maxlength='4' id='placa' name='placa2' value='$placa2'>   <br><br>
                                    <div id='final'>
                                    Data de Entrada: <input type='text' value='$data_entrada' name='entrada' id='entrada' style='font-family: 'Times New Roman'; font-size: 20px; font-weight: bold; '>
                                    
                                    Data de Saída:
                                     <input type='text' name='saida' id='saida' style='font-family: 'Times New Roman'; font-size: 20px; font-weight: bold; '>
                                    </div>
                                   
                                    ";
                                    
                                }while($linha= mysqli_fetch_assoc($consultar)== 1);
                            
                    
            



        echo"

                                  <table cellspacing='15' style='font-size: 20px;'>
                                        <tr>
                                        <td> Análise do Mecânico: <br> <textarea style='resize: none' rows='5' name='ana_mec' 
                                            cols='50' maxlength='600'  style='font-family: 'Times New Roman'; font-size: 20px;'></textarea>
                                        </td>

                                       
                                    </table>
                                </p>
                                <hr>

                        <h3>Peças</h3>
                        
                        

                        
                            
                            
                        <!-- Button trigger modal -->
                        <button type='button'  class='btn btn-primary' data-toggle='modal' data-target='#staticBackdrop'>
                         Editar/Selecionar Produto
                        </button>
                        <div class='prods_list'>
                            <div class='header_list'>
                                <p class='prods_nome'>Nome</p>
                                <p class='prods_marca'>Marca</p>
                                <p class='prods_valor'>Valor Un.</p>
                                <p class='prods_unit'>Quantidade</p>
                                <p class='prods_total'>Total Prod.</p>
                            </div>
                        </div>
                        <div class='total_pecas'>
                            <p class='total' value='0'>Total: R$ 00.00</p>
                        </div>
                        <!-- Modal -->
                        <div class='modal fade' style='position:absolute;' id='staticBackdrop' data-backdrop='static' data-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h5 class='modal-title' id='staticBackdropLabel'>Selecionar Produto</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body prod_itens'>
                              
                              ";
                              include "../conexoes/conexao.php";
                               $sql2="select * from produtos";
                               
                               $prods_nome = array();
                               $prods_marca= array();
                               $prods_v_unit= array();
                               $conectar=mysqli_query($conexao,$sql2);
                               $numprods=mysqli_num_rows($conectar);
                               $linha2=mysqli_fetch_assoc($conectar);
                               $id=1;
                                
                               do{  
                                        array_push($prods_nome,$linha2['prod_nome']);
                                        array_push($prods_marca,$linha2['prod_descricao']);
                                        array_push($prods_v_unit,$linha2['prod_valor_unit']);
                                        

                                        $id=$linha2['prod_codigo'];
                                        $nome_do_produto = $linha2['prod_nome'];
                                        $prod_marca = $linha2['prod_descricao'];
                                        $valor_unit= $linha2['prod_valor_unit'];
                                        echo"<div class='peca'>
                                        $nome_do_produto
                                        $prod_marca
                                        $valor_unit
                                        

                                        
                                        <input type='checkbox' onclick='add_peca($id)' class='selecionar' name='$id'><br>
                                        </div>";
                                    

                                    }while($linha2=mysqli_fetch_assoc($conectar));
                                    
                                    
                                    echo" </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-success' onclick='ShowProd()'  data-dismiss='modal'>Adicionar</button>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                                

                                    
                                
                                
                                    
                                

                            
                        <br><hr>

                                <h3>Serviços</h3>
                                <button type='button'  class='btn btn-primary' data-toggle='modal' data-target='#staticBackdrop2'>
                                Editar/Selecionar Produto
                            </button>

                            <div class='serv_list'>
                                <div class='header_serv'>
                                    <p class='serv_nome'>Nome</p>
                                    <p class='serv_descricao'>Descricao</p>
                                    <p class='serv_valor'>Preço Serv.</p>
                                </div>
                            </div>
                            <div class='total_serv'>
                                <p class='total2' value='0'>Total: R$ 00.00</p>
                            </div>

                                <div class='modal fade' style='position:absolute;' id='staticBackdrop2' data-backdrop='static' data-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <h5 class='modal-title' id='staticBackdropLabel'>Selecionar Produto</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                    </div>
                                    <div class='modal-body servicos'>";
                                    
                                    include "../conexoes/conexao.php";
                                    $sql3 = "select * from servicos";
                                    
                                    $serv_nome = array();
                                    $serv_descricao= array();
                                    $serv_valor =array();
                                    $conectar2=mysqli_query($conexao,$sql3);
                                    $num_servs=mysqli_num_rows($conectar2);
                                    $linha3=mysqli_fetch_assoc($conectar2);
                                    $id2=1;
                                    
                                    do{  
                                    array_push($serv_nome,$linha3['serv_nome']);
                                    array_push($serv_descricao,$linha3['serv_descricao']);
                                    array_push($serv_valor,$linha3['serv_valor']);
                                    

                                    $id2=$linha3['serv_codigo'];
                                    $nome_do_servico = $linha3['serv_nome'];
                                    $servico_descricao = $linha3['serv_descricao'];
                                    $servico_valor= $linha3['serv_valor'];
                                    echo"<div class='serv'>
                                    $nome_do_servico
                                    $servico_descricao 
                                    $servico_valor
                                    

                                    
                                    <input type='checkbox' onclick='add_serv($id2)' class='selecionar' name='$id2'><br>
                                    </div>
                                
                                </div>";
                                }while($linha3=mysqli_fetch_assoc($conectar2)); 
                                echo" 
                                    <div class='modal-footer'>
                                    <button type='button' class='btn btn-success' onclick='ShowServs()'  data-dismiss='modal'>Adicionar</button>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>

                                <br><hr>

                                    <p>
                                    ";
                                        $sql4 = "select * from funcionario";
                                        $conectar3= mysqli_query($conexao,$sql4);
                                        $linha4 = mysqli_fetch_assoc($conectar3);
                                        echo"
                                        Profissional: <select name='funcionario' id='funcionario' 
                                        style='font-family: 'Times New Roman'; font-size: 20px;'>  

                                            ";
                                           
                                        do{
                                            $funcionario = $linha4['funci_nome'];
                                            $funci_codigo = $linha4['funci_codigo'];
                                            echo"
                                            <option value=' $funci_codigo'>$funcionario </option>";
                                        
                                        }while($linha4 = mysqli_fetch_assoc($conectar3));



                                            echo"
                                            </select>
                                

                                        Valor Total: <input type='text' name='val_final'  maxlength='255' id='valor_serv'
                                        size='3' style='font-family: 'Times New Roman'; font-size: 20px; font-weight: bold; '>  

                                    </p><br>
                                    <p>
                                

                                    <table cellspacing='15' id='fim' style='font-size: 20px;'>
                                        <tr>
                                        <td> Garantia:<br> <textarea  style='resize: none'  rows='3' required' 
                                            cols='45' maxlength='600' name ='garantia'style='font-family: 'Times New Roman'; font-size: 20px;'></textarea>
                                        </td>

                                        <td> Observação: <br><textarea style='resize: none'  rows='3'  name='obs' cols='45' maxlength='600' 
                                            style='font-family: 'Times New Roman'; font-size: 20px;'></textarea>
                                        </td>

                                        <td>  <button class='btn_submit'  onclick='somaTotal()' type='submit'>Salvar</button>
                                     
                                        </td>
                                    </table>
                                
                                        </fieldset>
                                        </form>
                                    ";
                                    
                          
                            
                            

                                }else{
                                    echo"
                                    <button type='button' class='botoes btn btn-primary' data-toggle='modal' data-target='#modal'>
                                        Lista OS
                                    </button>
                                    Nenhum Resultado Encontrado.
                                    <form method='GET'>
                                    Código ODS:<input name='codigo_ordem' required type='text'>
                                    CPF:<input type ='text' name='cli_cpf'>
                                        <input type='submit'   value='consultar' >
                                    </form>
                                    <br><br>
                                    </p>
                                    <p>";
                            }
                    }else{
                       
                        echo"<button type='button' class='botoes btn btn-primary' data-toggle='modal' data-target='#modal'>
                        Lista OS
                    </button>
                        <p style='color:red;'> Digite o codigo da ODS para continuar:</p>
                        <form method='GET'>
                        Código ODS:<input name='codigo_ordem' required type='text'>
                        CPF:<input type ='text' name='cli_cpf'>
                        <input type='submit'   value='consultar' >
                        </form>
                        <br><br>
                    </p>
                     <p>";
                    
                    }
                
                        ?>


                       
                    
            </form>
        </div>


                

        </div>

</body>
<script>
    function somaTotal(){
    var tot = parseFloat(document.getElementsByClassName("total2")[0].getAttribute('value')) + parseFloat(document.getElementsByClassName("total")[0].getAttribute('value'));
    document.getElementById('valor_serv').setAttribute('value',""+tot+"");
   
}
</script>
<script src="../js/peca.js" type="text/javascript">


</script>
<script src="../js/servicos.js" type="text/javascript">
</script>
<script>
var prod_nome = <?php echo json_encode($prods_nome);?>;
var prod_marca = <?php echo json_encode($prods_marca);?>;
var prod_v_unit= <?php echo json_encode($prods_v_unit);?>;
var numprods = <?php echo json_encode($numprods);?>;

var serv_nome = <?php echo json_encode($serv_nome);?>;
var serv_descricao = <?php echo json_encode($serv_descricao);?>;
var serv_valor = <?php echo json_encode($serv_valor);?>;


</script>


    
</body>
</html>
<?php
if($_POST){
    
    $cli_codigo = $_POST['cli_codigo'];
    $nova_marca= $_POST['marca'];
    $novo_modelo = $_POST['modelo'];
    $novo_ano = $_POST['ano'];
    $nova_placa1= $_POST['placa1'];
    $nova_placa2= $_POST['placa2'];
    $nova_dta_entrada = $_POST['entrada'];
    $saida=$_POST['saida'];
    $analise_mec = $_POST['ana_mec'];
    $garantia = $_POST['garantia'];
    $obs=$_POST['obs'];
    $profissional = $_POST['funcionario'];
    $valor_final = $_POST['val_final'];
    $sql7 = "UPDATE ord_de_serv SET ord_de_serv_funci_codigo ='$profissional', ord_de_serv_cod_entrada = '$valor_final',ord_de_serv_data = '$nova_dta_entrada',ord_de_serv_data_saida='$saida',placa_veiculo1 = '$nova_placa1',placa_veiculo2= '$nova_placa2',
    modelo='$novo_modelo',marca = '$nova_marca',ano='$novo_ano',ana_mec='$analise_mec',garantia='$garantia',observacoes='$obs' WHERE ord_de_serv_codigo = $codigo  ";
    if(mysqli_query($conexao,$sql7)){
        echo"<script>alert('sucesso')</script>";
    }else {
        $conexao->error;
        echo"<script>alert('DFD')</script>";
    }
    


}
?>