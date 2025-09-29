<?php
echo '<!DOCTYPE html>';
echo '<html lang="pt-br">';
echo '<head>';
    echo '<link rel="stylesheet" href="src/css/menuStyle1.css">';
    echo '<link rel="stylesheet" href="src/css/menuStyle2.css">';
    
echo '</head>';
include "header.php";
require_once 'conectar.php'; // AJUSTADO
echo '<div class="caixa">';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conexao->query($sql);

if ($result->num_rows == 1) {
    $produtos = $result->fetch_assoc();

    echo "<h1>" . htmlspecialchars($produtos['nome']) . "</h1>";
    echo "<img src='" . htmlspecialchars($produtos['imgProduto']) . "' width='300'><br>";
    echo "<p><strong>Preço:</strong> R$ " . number_format($produtos['preco'], 2, ',', '.') . "</p>";
    echo "<p><strong>Descrição:</strong> " . $produtos['descricao'] . "</p>";
} else {
    echo "<p>Produto não encontrado.</p>";
    echo '</div>';
}
?>

<script>
document.getElementById('search').addEventListener('keyup', function () {
    const termo = this.value.trim();

    if (termo.length === 0) {
        document.getElementById('resultados').style.display = 'none';
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'buscar.php?q=' + encodeURIComponent(termo), true);
    xhr.onload = function () {
        const resultados = document.getElementById('resultados');

        if (this.status === 200) {
            resultados.innerHTML = this.responseText;
            resultados.style.display = 'block';
        } else {
            resultados.innerHTML = '<div>Erro ao buscar</div>';
            resultados.style.display = 'block';
        }
    };
    xhr.send();
});
</script>


<?php
$conexao->close();

include "footer.php";
?>
