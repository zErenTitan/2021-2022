<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adm_perfil.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<style>
    body{
    background-color:transparent;
}

</style>
<body>
    <div id="area_adm">
    <p>Perfil do Administrador</p>
    <?php
        include "../conexoes/conexao.php";
        $sql = "select * from administrador";
        $conectar = mysqli_query($conexao,$sql);
        $linha= mysqli_fetch_assoc($conectar);
        $email = $linha['adm_email'];
        $senha = $linha['adm_senha'];
        echo "  <form method='POST'>
    
        Email: <input type='text' id='email' name='email_novo' value='$email'>
        <br><br>
        Senha: <input type='text' id='senha' name='senha_nova' value='$senha'>
        <br><br>
        <input type='submit' id='btn' class='btn btn-success' value='Atualizar'>




    </form>";
    if($_POST){
        $novo_email = $_POST['email_novo'];
        $nova_senha = $_POST['senha_nova'];
        $sql2 = "update administrador set adm_email = '$novo_email', adm_senha = '$nova_senha' where cod_adm = 1";
        $conectar2 = mysqli_query($conexao,$sql2);
        echo" <script>window.history.back();</script>";

    }
    ?>
  
  </div>
</body>
</html>