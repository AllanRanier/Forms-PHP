<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(isset($_POST['Entrar'])){
  if($usuario == "admin" && $senha == "admin"){
    header("Location: home.html");
    exit();
  }else{
    //unset($_POST['Entrar']);
    echo '<script>alert("Usuário e senha incorretos!")</script>';
  }
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <title>Login</title>
  </head>
  <body> 
    <div id="central-login">
    <div class="content" align="center">
        <form method="POST" class="col-sm-5">
            <!-- Input do Usuario -->
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" require><br>
            </div>
            <!-- Input da Senha -->
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" name="senha" class="form-control" placeholder="Senha" require><br>
            </div>
            <input type="submit" name="Entrar" class="btn btn-outline-primary btn-lg btn-block">
        </form>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>


