<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agendamentos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
    <form method="POST">
        <p id="dig_dia">Digite o dia desejado:</p><input  required type="text" maxmaxlength="10" placeholder="dd/mm/yyyy" name="data" id="datapicker">
        <input type="submit"  value="Pesquisar">

        <div id="data_hj">
        <p id="dia_de_hoje">Dia de hoje:</p>
        <p id="data"></p>
        <p>/</p>
        <p id="mes"></p>
        <p>/</p>
        <p id="ano"></p>


        <script>
            var d = new Date();
            document.getElementById("data").innerHTML = d.getDate();
            var m = new Date();
            document.getElementById("mes").innerHTML = m.getMonth() +1;
            var y = new Date ();
            document.getElementById("ano").innerHTML = y.getFullYear();
        </script>
        </div>

        </form>
     
      <?php
      if($_POST){
                  
                $data= $_POST['data'];
                include "../conexoes/conexao.php";
                $sql= "select * from ord_de_serv where ord_de_serv_data = '$data'" ;
                $conectar = mysqli_query($conexao,$sql);
                $linha = mysqli_fetch_assoc($conectar);
                $data_banco = $linha['ord_de_serv_data'];
                if($linha['ord_de_serv_data'] == true){

                  echo" Foram encontrados registros para este dia::<br>
                  <button type='submit' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
                  Visualizar
                  </button>";
                }else{
                  echo"Não foram encontrado registros.";
                }
      }

      ?>

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
    
                
                    if($data_banco == $data){
                
                do{
                    $cli_codigo= $linha['ord_de_serv_cli_codigo'];
                    $modelo=$linha['modelo'];
                    $ano=$linha['ano'];
                    $placa1=$linha['placa_veiculo1'];
                    $placa2=$linha['placa_veiculo2'];
                    $sql2= "select cli_nome from cliente where cli_codigo = $cli_codigo";
                    $conectar2= mysqli_query($conexao,$sql2);
                    $linha2 = mysqli_fetch_assoc($conectar2);
                    $nome= $linha2['cli_nome'];
                    echo" <br><p>Neste dia houve/existe estes serviços :</p>
                    <fieldset>
                    Nome do Cliente:$nome<Br>
                    Modelo:$modelo<Br>
                    Ano: $ano<br>
                    Placa:$placa1-$placa2
                    </fieldset>";
                    
                    

                }while($linha = mysqli_fetch_assoc($conectar));
                } else{
                echo"Dia não encontrado.";
                }
            
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
    </div>
    </div>
    </div>
    </div>
    </div>
           
           
    
    



</body>
</html>