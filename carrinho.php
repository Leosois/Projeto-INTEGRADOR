<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Carrinho</title>
</head>
<body>

<h2>Seu Carrinho</h2>

<?php if (empty($carrinho)): ?>
  <p>Seu carrinho está vazio.</p>
<?php else: ?>
  <table border="1" cellpadding="10">
    <tr>
      <th>Produto</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Total</th>
    </tr>
    <?php
    $total = 0;
    foreach ($carrinho as $item):
      $subtotal = $item['preco'] * $item['quantidade'];
      $total += $subtotal;
    ?>
      <tr>
        <td><?= htmlspecialchars($item['nome']) ?></td>
        <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
        <td><?= $item['quantidade'] ?></td>
        <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3"><strong>Total Geral:</strong></td>
      <td><strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></td>
    </tr>
  </table>
<?php endif; ?>

<a href="produto.php">← Continuar comprando</a>

</body>
</html>

