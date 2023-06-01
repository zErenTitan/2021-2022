<!DOCTYPE html>
<HTML5>
<head>
  <meta charset="UTF-8"/>
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <!--FORMULÁRIO DE CADASTRO-->

    <div class="content">      
      <div id="cadastro">
        <form method="POST" action="conexoes/cadastrar.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome completo" />
          </p>
           
          <p> 
            <label for="rg_cad">RG:</label>
            <input id="rg_cad" name="rg_cad" required="required" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00"/>
          </p>

          <p> 
            <label for="cpf_cad">CPF:</label>
            <input id="cpf_cad" name="cpf_cad" required="required" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00""/>
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="ex.joseluiz@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
           
          </p>

           
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
    </div>
</body>
</head>
</HTML5>
