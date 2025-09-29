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
      $preco= $item['preco'];
      $subtotal = $preco * $item['quantidade'];
       
      $total += $subtotal;
    ?>
      <tr>
        <td><?php echo htmlspecialchars($item['nome']); ?></td>
        <td><?php echo $item['preco']; ?></td>
        <td><?php echo $item['quantidade']; ?></td>
       
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3"><strong>Total Geral:</strong></td>
      <td><strong>R$ <?php echo $subtotal; ?></strong></td>
    </tr>
  </table>
<?php endif; ?>

<a href="index.php">← Continuar comprando</a>

</body>
</html>

