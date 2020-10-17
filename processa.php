<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(isset($_POST['Entrar'])){
  //$usuario = $_POST['usuario'];
  //$senha = $_POST['senha'];
  if($usuario == "admin" && $senha == "admin"){
    header("Location: home.html");
    exit();
  }else{
    echo "<script>
	alert('Usuário e senha incorretos!'); location= './index.html';
	</script>";
    //unset($_POST['Entrar']);
    //echo '<script>alert("Usuário e senha incorretos!")</script>';

  }
}
