<?php
require_once 'conectar.php'; // AJUSTADO

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $produto = $result->fetch_assoc();
    echo "<h1>" . htmlspecialchars($produto['nome']) . "</h1>";
    echo "<img src='" . htmlspecialchars($produto['imagem']) . "' width='300'><br>";
    echo "<p><strong>Preço:</strong> R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
    echo "<p><strong>Descrição:</strong> " . $produto['descricao'] . "</p>";
    echo "<p><strong>Processador:</strong> " . $produto['processador'] . "</p>";
    echo "<p><strong>Placa de Vídeo:</strong> " . $produto['placa_video'] . "</p>";
    echo "<p><strong>Memória:</strong> " . $produto['memoria'] . "</p>";
    echo "<p><strong>Armazenamento:</strong> " . $produto['armazenamento'] . "</p>";
} else {
    echo "<p>Produto não encontrado.</p>";
}

$conn->close();
?>
