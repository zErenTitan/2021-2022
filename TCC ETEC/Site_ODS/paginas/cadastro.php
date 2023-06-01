<!DOCTYPE html>
<HTML5>

<head>
  <meta charset="UTF-8"/>
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <link rel="stylesheet" type="text/css" href="../css/cadastro.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <!--FORMULÁRIO DE CADASTRO-->

    <div class="content">      
      <div id="cadastro">
        <form method="POST" action="../conexoes/cadastrar.php"> 
          <p id= "titulo">Cadastro de Funcionários</p> 
           
          <p style="color: red;">Favor digitar sem os traços.</p>
          <p> 
            <label for="nome_cad"> Nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome completo" />
          </p>
    
          <p> 
            <label for="rg_cad">RG:</label>
            <input id="rg_cad" name="rg_cad" type="text" required="required" class="form-control cpf-mask" />
          </p>

          <p> 
            <label for="cpf_cad">CPF:</label>
            <input id="cpf_cad" name="cpf_cad" type="text" required="required" class="form-control cpf-mask" />
          </p>
           
          <p> 
            <label for="email_cad">e-mail</label>
            <input id="email_cad" name="email_cad" type="text" required="required" type="email" placeholder="ex.joseluiz@gmail.com"/> 
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
           
          </p>

           
         
        </form>
      </div>
    </div>
    </div>
</body>
</head>
</HTML5>
