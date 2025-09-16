<?php
include "header.php";
if (isset($_POST['enviar'])) {

    include 'conectar.php';

    $senhaForm = md5($_POST['senha']);
    $emailForm = $_POST['email'];

    $sql = "SELECT senha, email FROM cadastro WHERE senha = ? AND email = ?";
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $senhaForm, $emailForm); 

        // precisa executar antes de pegar o resultado
        $stmt->execute();

        $resultado = $stmt->get_result();

        if ($resultado && $resultado->num_rows > 0) {
            echo "<script> location.href='./painel.php'; </script>";
        } else {
            echo "<h5>Login ou Senha Incorretos</h5>";
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da query: " . $conexao->error;
    }
}
?>
<section class="login1">
    <div class="formulario">
        <form action="login.php" method="POST">
            <h2>Faça seu Login</h2>


            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>



            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>