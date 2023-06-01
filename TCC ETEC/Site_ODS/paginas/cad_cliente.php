<!DOCTYPE html>
<html lang="pt-br">

    <head>
        
        <title>Cadastro de Cliente</title>
        <link rel="stylesheet" type="text/css" href="../css/cadastrar_cli.css" />
    </head>
    <body>
       
  
        <div class="area_cad_cliente">  
            <h1>Adicionar Novo Cliente</h1>
            <hr>
            <form method="POST" >


              
                                
                    <p> 
                    <p style="color: red;">Favor digitar sem os traços.</p>
                     <p class="paragrafos">*Nome:</p>
                        <div class="divs">

                            

                            
                            <input type="text" name="cli_nome" widht="80" class="cli_nome" autocomplete="off" required="required" id="nome"   
                            style="font-family: 'Times New Roman';">
                         </div>
                         
                         <p class="paragrafos">*Celular:</p>
                         <p class="paragrafos2">Telefone Fixo:</p>
                         
                        <div class="divs">
                            <input type="text" name="celular"  maxlength="13" class="cli_cel" required="required" autocomplete="off" id="cli_cel"
                            style="font-family: 'Times New Roman';">
                        
                            <input type="text" name="telefone"   maxlength="12" id="cli_tel_fixo" autocomplete="off" maxlength="13" id="telefone-1"
                            style="font-family: 'Times New Roman';">
                          
                        </div>
                    
                        <p class="paragrafos">*CEP:</p>
                        
                        <p class="paragrafos3">*Endereço:</p>
                        
                        <div class="divs">
                            
                        <input type="text" name="cep"  required="required" maxlength="9"autocomplete="off" id="cep"
                            style="font-family: 'Times New Roman';">
                             <input type="text" name="endereco" required="required"  maxlength="255" id="endereco"
                            style="font-family: 'Times New Roman';">
                            
                            
                         </div>
                         
                         <p class="paragrafos">*Cidade</p>
                         <p class="paragrafosuf">*UF</p>
                         <div class="divs">
                         
                            <input type="text" name="cidade" required="required"  maxlength="255" id="cidade"
                            style="font-family: 'Times New Roman';">
                            <input type="text" name="uf" required="required"  maxlength="2" id="uf"
                            style="font-family: 'Times New Roman';">

                        </div>
                        <p class="paragrafos">Bairro:</p>
                         <p class="paragrafos4">*Número:</p>
                        
                         <div class="divs">
                         </label><input type="text" name="bairro"  maxlength="255" id="bairro"
                            style="font-family: 'Times New Roman';">
                         <input type="text" name="numero"  required="required" id="num-endereco"
                            style="font-family: 'Times New Roman';">
                        
                         
                        </div>  
                        <p class="paragrafos">*Data de nascimento:</p>
                        <p class="paragrafos5">*CPF:</p>
                        <div class="divs">
                            <input type="date" name="nascimento" required="required" id="dt_nasc"
                            style="font-family: 'Times New Roman';">
                        
                            </label><input type="text" name="cpf" required="required" class="form-control cpf-mask"  autocomplete="off"  id="cpf"
                            style="font-family: 'Times New Roman';">    
                            </div>  
                            <p class="paragrafos">*RG:</p>
                            <p class="paragrafos6">CNPJ:</p>
                        <div class="divs">
                       </label><input type="text" name="rg" class="form-control rg-mask" required="required" autocomplete="off"  id="rg"
                            style="font-family: 'Times New Roman';">    
                                
                            </label><input type="text" name="cli_cnpj" class="form-control cnpj-mask"  autocomplete="off"  id="cnpj"
                            style="font-family: 'Times New Roman';">
                            <button id="btn_submit" type="submit">Cadastrar</button>  
                        </div>
                         
                    </p>        

                             
                </form>            
            </div>
                <?php
                    if($_POST){


                    $cli_nome= $_POST['cli_nome'];

                    $celular=$_POST['celular'];

                    $telefone=$_POST['telefone'];

                    $cep=$_POST['cep'];

                    $endereco=$_POST['endereco'];

                    $numero=$_POST['numero'];

                    $bairro=$_POST['bairro'];

                    $dt_nasci=$_POST['nascimento'];

                    $cpf=$_POST['cpf'];

                    $rg=$_POST['rg'];

                    $cnpj=$_POST['cli_cnpj'];

                    $uf=$_POST['uf'];

                    $cidade=$_POST['cidade'];

                    $sql="insert into cliente (cli_nome,cli_nascimento,cpf,cli_rg,cli_cnpj,cli_cel,cli_tel_fixo,cep,cli_rua,uf,cli_numero_casa,cli_bairro,cidade) 
                    values('$cli_nome','$dt_nasci','$cpf','$rg','$cnpj','$celular','$telefone','$cep','$endereco','$uf','$numero','$bairro','$cidade')";

                    include "../conexoes/conexao.php";
                    $sql2=mysqli_query($conexao,$sql);



                }
                    ?>
    </body>


    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>
			/*
			 * Para efeito de demonstração, o JavaScript foi
			 * incorporado no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			
			// Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
			// quando o usuário sair do campo "cep"
			$("#cep").blur(function(){
				// Remove tudo o que não é número para fazer a pesquisa
				var cep = this.value.replace(/[^0-9]/, "");
				
				// Validação do CEP; caso o CEP não possua 8 números, então cancela
				// a consulta
				if(cep.length != 8){
					return false;
				}
				
				// A url de pesquisa consiste no endereço do webservice + o cep que
				// o usuário informou + o tipo de retorno desejado (entre "json",
				// "jsonp", "xml", "piped" ou "querty")
				var url = "https://viacep.com.br/ws/"+cep+"/json/";
				
				// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
				// caso ocorra algum erro (o cep pode não existir, por exemplo) a
				// usabilidade não seja afetada, assim o usuário pode continuar//
				// preenchendo os campos normalmente
				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#endereco").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});
		</script>
</html>