<?php
$host = "localhost";
$usuario = "root";       // ou seu usuário MySQL
$senha = "";             // ou sua senha MySQL
$banco = "loja_ecobit";

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
