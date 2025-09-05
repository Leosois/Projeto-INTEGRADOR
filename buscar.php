<?php
require_once 'conectar.php';

$termo = isset($_GET['q']) ? $conn->real_escape_string($_GET['q']) : '';

if ($termo !== '') {
    $sql = "SELECT id, nome, preco, pagina_produto FROM produtos WHERE nome LIKE '%$termo%' LIMIT 10";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo "<div onclick=\"window.location.href='" . htmlspecialchars($row['pagina_produto']) . "'\">";
            echo "<strong>" . htmlspecialchars($row['nome']) . "</strong><br>";
            echo "R$ " . number_format($row['preco'], 2, ',', '.');
            echo "</div>";
        }
    } else {
        echo "<div>Nenhum resultado encontrado.</div>";
    }
}
$conn->close();
?>
