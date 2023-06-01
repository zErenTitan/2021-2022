<?php
session_start();
if(isset( $_SESSION['funcionario_atual'])){

}else{
  echo "<script>window.location.href='paginas/login.php'</script>";
}
?>
<!DOCTYPE html>
<html5 lang = "pt-br">
<head>
<meta charset="UTF-8"/>
    <title>Tela Principal</title>
    <link rel="stylesheet" type="text/css" href="css/estilo_index.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<title>menu_top</title>
        <link rel="stylesheet" type="text/css" href="estilo_menutop.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    <style>

body{
        background-image: url(imgs/img_index.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: fixed;
        overflow-x: hidden;
        overflow-y:hidden;

        
    }
    
 

    </style>


    
        
            <div class="reposicionado">

                <?php
                    if (isset($_POST['btn_nova_os'])) {

                      echo"<iframe src='paginas/nova_ordem.php'  ></iframe>";
                        

                    }else if(isset($_POST['btn_consultar_os'])){
                        echo"<iframe src='paginas/consul_ord_de_serv.php'  ></iframe>";

                    }else if (isset($_POST['btn_home'])){

                        echo"<iframes  ></iframe>";


                    }else if(isset($_POST['btn_add_novo_cli'])){


                        echo"<iframe src='paginas/cad_cliente.php '  ></iframe>";

                    }else if(isset($_POST['btn_add_prod'])){

                        echo"<iframe src='paginas/cad_peca.php '  ></iframe>";

                    }else if(isset($_POST['btn_consultar_prod'])){

                        echo"<iframe src='paginas/consulta_peca.php '  ></iframe>";

                    }else if(isset($_POST['btn_consultar_cli'])){

                        echo"<iframe src='paginas/consulta_cli.php '  ></iframe>";

                    }else if(isset($_POST['btn_add_novo_serv'])){

                        echo"<iframe src='paginas/novo_serv.php '  ></iframe>";
                    }else if(isset($_POST['btn_consult_serv'])){

                        echo"<iframe src='paginas/consulta_serv.php'  ></iframe>";

                    }else if(isset($_POST['btn_agendamentos'])){

                        echo"<iframe src='paginas/agendamentos.php'  ></iframe>";
                    
                    }else if(isset($_POST['btn_perfil'])){

                        echo"<iframe src='paginas/adm_perfil.php'  ></iframe>";

                    }else if(isset($_POST['btn_add_funci'])){

                        echo"<iframe src='paginas/cadastro.php'  ></iframe>";
                        
                    }else if(isset($_POST['btn_sair'])){

                        echo"<iframe src='conexoes/sair.php'  ></iframe>";

                    }
                ?>
        
                </div>
    <body >
              
        <div class="container-fluid " id="tudo">
            
              <!-- LOGO TIPO  -->
                  <section class="grid grid-template gap"> 
            
                    <div class="item_logo"><img id="logo" src="imgs/logo.png"></div>
            <br>
            <!-- BOTÃO DE NAVEGAÇÃO SAIR CANTO SUPERIOR DIREITO -->


                <div class=" menu  dropdown">
                    <a class="btn btn-secondary btn-lg dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrador
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <form method="POST">
                        <button class="menu-list dropdown-item" name='btn_perfil'>Perfil</button></li>
                        <li>  <button id= "add_funci"class="menu-list dropdown-item" name='btn_add_funci'>Adicionar Funcionário</button></li>
                        <li>  <button class="menu-list dropdown-item" name='btn_sair'>Sair</button></li>
                    </form>
                    </div>

                 </div>
          

        
        <!-- MENU DE NAVEGAÇÃO-->
        
            
            <nav class="navigation">
                <form method="POST">
                    <ul class="mainmenu">
                    

                        <li><button  type="submit" name="btn_home" class="btn-lg "><span class="fa fa-home">&#xe238; Home</span></button></li>
                        
                        <li><button type="submit"   class="btn-lg"  disabled><span  class="fa fa-car">&#xe238; Ordem de serviço</span> </button>
                        <ul class="submenu">
                        <li><button type="submit" name="btn_nova_os"  class="btn-lg dentro" ><span style="font-weight: bold;" class="fas fa-file-signature">&#xe238; Nova OS</span ></li></button>
                        <li><button type="submit" name="btn_consultar_os" class="btn-lg  dentro"><span style="font-weight: bold;" class="fas fa-search">&#xe238; Editar OS</span> </li></button>
                        </li>
                        </ul>
                        

                        <li><button   class="btn-lg" disabled><span class="fa fa-users">&#xe238;  Cliente</span></button>
                            <ul class="submenu">
                                <button type="submit" name="btn_add_novo_cli" class="btn-lg dentro"><span class="fa fa-user-plus" style="font-size:1.1vw;">&#xe238; Adicionar novo cliente</span>
                                <button type="submit" name="btn_consultar_cli" class="btn-lg dentro"><span class="fas fa-search">&#xe238; Consultar Cliente</span></button> </li>
                            </ul>
                        </li>
                    
                    
                        <li><button disabled  class="btn-lg"><span style="font-weight: bold; "class="glyphicon">&#xe238;  Produtos</span></button>
                        
                            <ul class="submenu">
                                <button type="submit" name="btn_add_prod" class="btn-lg dentro"><span class="fas fa-plus">&#xe238; Adicionar Produtos</span>
                                <button type="submit" name="btn_consultar_prod" class="btn-lg dentro"><span class="fas fa-search">&#xe238; Consultar Produtos</span></button> </li>
                            </ul>
                        </li>

                
                        <li><button disabled  class="btn-lg"><span class="fas fa-wrench">&#xe238; Serviços</span></button>
                            <ul class="submenu">
                                
                                <button type="submit" name="btn_add_novo_serv" class="btn-lg dentro"><span class="fas fa-screwdriver" style="font-size:1.1vw;">&#xe238; Adicionar Novo Serviço</span></button>
                                <button type="submit" name="btn_consult_serv" class="btn-lg dentro"><span  class="fas fa-search">&#xe238; Consultar Serviço</span></button>
                        </ul>
                        </li>
                        
                        <li><button  type="submit" name="btn_agendamentos" class="btn-lg "><span class="fas fa-calendar-alt">&#xe238; Agendamentos</span></button></li>
                    
                     
    
        
                    </ul>
                </form>
            </nav>
        
           

                    
                
        </div>
    </body>


</html5>