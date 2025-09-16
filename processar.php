<?php
include 'conectar.php';

if (
    isset($_POST['nome']) &&
    isset($_POST['cpf']) &&
    isset($_POST['endereco']) &&
    isset($_POST['idade']) && // este campo agora é o ano de nascimento
    isset($_POST['email']) &&
    isset($_POST['senha'])
) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $ano_nascimento = $_POST['idade']; // ainda vindo do mesmo campo
    $email = $_POST['email'];
    $senha = md5( $_POST['senha'] );

 

    // Calcular a idade
    $idade = date('Y') - intval($ano_nascimento);

    // Verificar duplicidade de CPF
    $verificaCpf = $conexao->prepare("SELECT id FROM cadastro WHERE cpf = ?");
    $verificaCpf->bind_param("s", $cpf);
    $verificaCpf->execute();
    $verificaCpf->store_result();

    if ($verificaCpf->num_rows > 0) {
        echo "Erro: Este CPF já está cadastrado.";
    } else {
        // Verificar duplicidade de e-mail
        $verificaEmail = $conexao->prepare("SELECT id FROM cadastro WHERE email = ?");
        $verificaEmail->bind_param("s", $email);
        $verificaEmail->execute();
        $verificaEmail->store_result();

        if ($verificaEmail->num_rows > 0) {
            echo "Erro: Este e-mail já está cadastrado.";
        } else {
            // Inserir no banco
            $stmt = $conexao->prepare("INSERT INTO cadastro (nome, cpf, endereco, idade, email, senha) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param( 'ssssss',$nome, $cpf, $endereco, $ano_nascimento, $email, $senha );

            if ($stmt->execute()) {
                echo "<script> location.href='./cadastroOk.php'; </script>";
            } else {
                echo "Erro ao cadastrar: " . $stmt->error;
            }

            $stmt->close();
        }
        $verificaEmail->close();
    }

    $verificaCpf->close();
    $conexao->close();

} else {
    echo "Erro: Todos os campos são obrigatórios.";
}
?>


