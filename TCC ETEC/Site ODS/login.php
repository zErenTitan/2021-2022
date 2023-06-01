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

    <!--FORMULÁRIO DE LOGIN-->
     
    <div class="content">      
      <div id="login">
        <form method="post" action="conexoes/logar.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu Email</label>
            <input id="nome_login" name="email_login" required="required" type="text" placeholder="ex. jose.luiz@gmail.com"/>
        </p>
           
          <p> 
            <label for="email_login">Sua Senha</label>
            <input id="email_login" name="senha_login" type="password" placeholder="ex. senha" /> 
        </p>
                      
          <p> 
            <input type="submit" value="Logar" /> 
        </p>
           
          <p class="link">
         
          <a href="cadastro.php"> Cadastrar Funcionário</a>
          </p>
        </form>
      </div>      
    </div>
  </div>  
</body>
</HTML5>