<!DOCTYPE html>
<HTML5>
<head>
  <meta charset="UTF-8"/>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
  <div class="tudo" >

    <p id='titulo'>Seja Bem Vindo!!!</p>
    <!--FORMULÁRIO DE LOGIN-->
     
    <div >      
      <div id="login">
        <form method="post" action="../conexoes/logar.php"> 
          <p id="titulo_login">Faça login para continuar</h1> 
          <p> 
            <br>
            <label for="nome_login">Email:</label>
            <br>
            <input id="nome_login" name="email_login" required="required" type="text" placeholder="ex. jose.luiz@gmail.com"/>
        </p>
         
          <p> 
            <label for="email_login">Senha:</label>
            <Br>
            <input id="email_login" name="senha_login" type="password" placeholder="ex. senha" /> 
        </p>
                      
          <p> 
            <input type="submit" value="Logar" /> 
        </p>
           
        
        </form>
      </div>      
    </div>
  </div>  
</body>
</HTML5>