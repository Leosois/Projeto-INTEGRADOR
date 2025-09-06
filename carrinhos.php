<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Produto</title>
  <link rel="stylesheet" href="src/css/menuStyle1.css">
</head>
<body>

  <div class="produto-card">
    <div class="preco-de">de R$ 2.601,30 por</div>
    <div class="preco-pix">R$ 2.120,99</div>
    <div class="desconto">no PIX com 15% de desconto</div>
    <div class="ou">ou</div>
    <div class="preco-cartao">R$ 3.200,20</div>
    <div class="parcelas">
      em até 12x de <span class="parcela-valor">R$ 266,68</span><br>
      sem juros no cartão
    </div>

    <!-- FORMULÁRIO COMPRAR -->
    <form method="post" action="adicionar_carrinho.php">
      <input type="hidden" name="produto_id" value="1">
      <input type="hidden" name="nome" value="Produto Exemplo">
      <input type="hidden" name="preco" value="3200.20">
      <button type="submit" class="botao-comprar">🛒 COMPRAR</button>
    </form>
  </div>

</body>
</html>
