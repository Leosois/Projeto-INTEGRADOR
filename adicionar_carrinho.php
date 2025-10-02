<?php
session_start();

// Cria o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$produto_id = $_POST['produto_id'];
$nome       = $_POST['nome'];
$preco      = $_POST['preco'];
$quantidade = (int) $_POST['quantidade'];

// Produto no formato correto
$produto = [
    'id'         => $produto_id,
    'nome'       => $nome,
    'preco'      => $preco,
    'quantidade' => $quantidade,
];

// Se o produto já existe, incrementa quantidade
if (isset($_SESSION['carrinho'][$produto_id])) {
    $_SESSION['carrinho'][$produto_id]['quantidade'] += $quantidade;
} else {
    // Caso contrário, adiciona novo
    $_SESSION['carrinho'][$produto_id] = $produto;
}

// Redireciona para o carrinho
header("Location: carrinho.php");
exit;

?>
