<?php
session_start();

$produto_id = $_POST['produto_id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$produto = [
    'id' => $produto_id,
    'nome' => $nome,
    'preco' => $preco,
    'quantidade' => 1
];

// Cria o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Verifica se já tem o produto no carrinho
$existe = false;
foreach ($_SESSION['carrinho'] as &$item) {
    if ($item['id'] == $produto_id) {
        $item['quantidade']++;
        $existe = true;
        break;
    }
}

if (!$existe) {
    $_SESSION['carrinho'][] = $produto;
}

// Redireciona para o carrinho
header("Location: carrinho.php");
exit; 
?>
