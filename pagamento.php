<?php
include "header.php";

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $pagamento = htmlspecialchars($_POST['pagamento']);

    echo "<div class='sucesso'>
            Obrigado, <strong>$nome</strong>!<br>
            Sua compra foi finalizada com a forma de pagamento: <strong>$pagamento</strong>.
          </div>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Compra</title>
    <link rel="stylesheet" href="src/css/pagamento.css">
</head>
<body>

<div class="container">
    

    <form method="POST" action="checkout.php" class="form-checkout">
        <h2>Dados do Cliente</h2>

        <label for="nome">Nome Completo:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <label for="endereco">Endereço de Entrega:</label>
        <textarea name="endereco" id="endereco" rows="4" required></textarea>

        <label for="pagamento">Forma de Pagamento:</label>
        <select name="pagamento" id="pagamento" required>
            <option value="">Selecione</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Boleto">Boleto</option>
            <option value="Pix">Pix</option>
        </select>

        <button href="pagamento.php">Finalizar Compra</button>
        <button href="cancelarCompra.php">Cancelar Compra</button>
    </form>
</div>

</body>
</html>
<?php
include "footer.php";
?>
