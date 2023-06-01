<?php
  session_start();
  if(isset($_SESSION['usuarioatual'])){
    $usuario = "Bem Vindo ".$_SESSION['usuarioatual'];
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
    header('location:loginempresa.php');
  }else if(isset($_SESSION['emp_atual'])){
    $usuario ="Área Empresa";
    $logado = "Área da Empresa";
    $sair = "Sair";
   
  }else{
    $usuario = "Login";
    $logado = "Login";
    $cadastro = "Cadastre-se";
    $sair="";
    header('location:loginempresa.php'); 
  }



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rodape.css">
    <title>Home</title>
  </head>
  <body>    
    <div style="max-width: 100%;">
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3817343c2.js" crossorigin="anonymous"></script>

    <style>
     
      body{
            font-style: normal;
            font-size: 1em; 
            font-family: "Tahoma";
            color: black;
            overflow-x: hidden;

      }

      .nav-item{
        margin:0vw 3vw;
      }
   
    </style>

  
  <div class="container-xl">
      <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="display: flex;flex-direction: row;justify-content: space-between;">
        <a class="navbar-brand" href="#">
          <img src="../imgs/titulo01.png" width="250" height="100" class="d-inline-block align-top" alt="">        
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
          </button>

    
          <div style="margin-left:20%" class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
    
              <li class="nav-item active">
                  
                  <a class="nav-link font-weight-bold active" href="../index.php">Home</a>
              
              </li>
    
          <li class="nav-item">
          <a class="nav-link" href="SobreNos.php">Sobre Nós</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="Fale_conosco.php">Fale Conosco</a>
                
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                echo $usuario;
              ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (isset($_SESSION['usuarioatual']) ){
                echo"<a class='dropdown-item' href='paginalogado.php'>Área Usuário</a>
                <a class='dropdown-item' href='logout.php'>Sair</a>";

              }else if(isset($_SESSION['emp_atual'])) {
                echo"<a class='dropdown-item' href='/configconta.php'>Configurações da Conta</a>
                <a class='dropdown-item' href='cadastrarvagas.php'>Cadastrar Vaga</a>
                <a class='dropdown-item' href='Visualizar Vagas'>Visualizar Vagas</a>
                <a class='dropdown-item' href='logout.php'>Sair</a>";
              
                

              }else {
                echo "<a class='dropdown-item' href='/login_selecionar.php'>Login</a>
                <a class='dropdown-item' href='/registrarselecionar.php'>Registrar</a>";
                

              }
            ?>
            </div>
            </li>
        
    
          </ul>
          
          </nav>
  </div>
    
    
    

    <hr><br>
<div class="container-fluid">
<!--Aqui vai começar o conteúdo da página!-->
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-0"></div>
      <div class="col-6 col-md-10">
        <form action="../conexoes/cadastrarvaga.php" method="POST">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label"for="nomevaga">Nome da Vaga:</label>
            
            <input style="min-width:600px;" type="text" class="form-control col-sm-2 col-form-label"  name="nomvaga" id="nomvaga">
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label"for="nomevaga">Cargo:</label>
              
              <input style="min-width:600px" type="text" class="col-sm-2 col-form-label form-control"  name="cargovaga" id="cargovaga">
            </div>
            <div class="form-group row">
                <label class=" col-sm-2 col-form-label" for="nomevaga">Requisitos:</label>
                <br>
                <input style="min-width:600px"  type="text" class="col-sm-2 col-form-label form-control"  name="requisitos" id="requisitos">
              </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomevaga">Cidade:</label>
            <br>
            <input style="min-width:600px"  type="text" class="form-control col-sm-2 col-form-label"  name="cidvaga" id="cidvaga">
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomevaga">Carga Horária:</label>
            <br>
            <input style="min-width:600px"  type="text" class="form-control col-sm-2 col-form-label "  name="cargahr" id="cargahr">
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomevaga">Salário:</label>
            <br>
            <input style="min-width:600px"  type="text" class="form-control col-sm-2 col-form-labell"  name="salvaga" id="salavaga">
          </div>
          <div class="form-group row" >
            <label class="col-sm-2 col-form-label" for="descrivaga">Descrição:</label>
            <br>
            <textarea style="min-width:600px"  name="descricao" class="form-control col-sm-2 col-form-label" id="exampleFormControlTextarea1" rows="5"></textarea>
          
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar Vaga">
          </div>
        </form>
      </div>
    <div class="col-6 col-md-1">PATROCINADORES</div>
  </div>
</div>
      

</body>


  </html>
















       

