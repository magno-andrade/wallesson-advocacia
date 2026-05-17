<?php

session_start();

include("conexao.php");

$email = $_POST['email'];

$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
WHERE email='$email'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

$usuario = $resultado->fetch_assoc();

if(
password_verify(
$senha,
$usuario['senha']
)
){

$_SESSION['usuario'] =
$usuario['nome'];

header("Location: painel.php");

}else{

echo "Senha incorreta";

}

}else{

echo "Usuário não encontrado";

}

?>