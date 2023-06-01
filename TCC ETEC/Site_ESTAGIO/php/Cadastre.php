<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php  
   include("conexao.php");

  $nome = $_POST ["tNome"];
  $Date_Nascimento = $_POST["tDate"];
  $Cidade = $_POST["tCidade"];
  $CPF = $_POST["tCPF"];
  $Telefone = $_POST ["tTelefone"];
  $Email = $_POST ["tEmial"];
  $CNH = $_POST ["tCNH"];

  $sql = mysqli_query($conexao, "insert into usuario (nome,Date_Nascimento,Cidade,CPF,Telefone,Email,CNH)
  values ('$nome',' $Date_Nascimento','$Cidade', '$CPF','$Telefone','$Email','$CNH' )") 
  or die  ("Cadastro não inserio");


  echo("Regristo inserido");


?>


</body>
</html>














