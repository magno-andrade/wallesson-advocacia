<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "usuarios_cliente_db";

$conn = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco
);

if($conn->connect_error){
    die("Erro de conexão");
}

?>