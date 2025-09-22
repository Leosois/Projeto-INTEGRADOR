<?php
require_once 'conectar.php';

$termo = isset($_GET['q']) ? $conexao->real_escape_string($_GET['q']) : '';

if ($termo !== '') {
    $sql = "SELECT id, nome FROM produtos WHERE nome LIKE '%$termo%' LIMIT 10";
    $res = $conexao->query($sql);

    if ($res && $res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo "<div onclick=\"window.location.href='produto.php?id=" . htmlspecialchars($row['id']) . "'\"
                    style=\"cursor:pointer; padding: 10px; border-bottom: 1px solid #eee;\">
                    " . htmlspecialchars($row['nome']) . "
                  </div>";
        }
    } else {
        echo "<div style='padding:10px;'>Nenhum resultado encontrado.</div>";
    }
}
$conexao->close();
?>