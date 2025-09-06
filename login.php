<?php include 'header.php'; ?>


<div class="formulario"><form action="processar.php" method="POST">
<h2>Faça seu Login</h2>
    

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

   

    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha" required><br><br>

    <input type="submit" value="Enviar">
</form>
</div>
<?php include 'footer.php'; ?>
