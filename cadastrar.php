<?php include 'header.php'; ?>

<div class="formulario">
  <form action="processar.php" method="POST">
    <h2>Cadastre-se</h2>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="endereco">Endereço:</label><br>
    <textarea id="endereco" name="endereco" required></textarea><br><br>

    <label for="data_nascimento">Data de Nascimento:</label><br>
    <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>


    <label for="cpf">CPF:</label><br>
    <input type="text" id="cpf" name="cpf" required><br><br>

    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha" required><br><br>

    <input type="submit" value="Enviar">
  </form>
</div>

<?php include 'footer.php'; ?>
