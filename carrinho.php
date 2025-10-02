<?php
include "header.php";
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Carrinho</title>
  <link rel="stylesheet" href="src/css/pagamento.css">
  
</head>
<body>

<h2>Seu Carrinho</h2>

<?php if (empty($carrinho)): ?>
  <p>Seu carrinho está vazio.</p>
<?php else: ?>
  <table>
    <tr>
      <th>Produto</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Total</th>
    </tr>
    <?php
    $total = 0;
    foreach ($carrinho as $item):
      $preco = (float)$item['preco'];
      $subtotal = $preco * $item['quantidade'];
      $total += $subtotal;
    ?>
      <tr>
        <td><?= htmlspecialchars($item['nome']) ?></td>
        <td>R$ <?= number_format($preco, 2, ',', '.') ?></td>
        <td><?= $item['quantidade'] ?></td>
        <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3"><strong>Total Geral:</strong></td>
      <td><strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></td>
    </tr>
  </table>
<?php endif; ?> <div class="butao">
<button><a href="index.php">Continuar comprando</button>
<button><a href="pagamento.php">Finalizar Compra</button></div>

<?php
include "footer.php";
?>
</body>

</html>


