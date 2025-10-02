<?php
include 'conectar.php';

if (
    isset($_POST['nome']) &&
    isset($_POST['cpf']) &&
    isset($_POST['endereco']) &&
    isset($_POST['data_nascimento']) &&
    isset($_POST['email']) &&
    isset($_POST['senha'])
) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $data_nascimento = $_POST['data_nascimento'];

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografa a senha
    $senha_cript = md5($senha); // Em produção, use password_hash

    // Verificar duplicidade de CPF
    $verificaCpf = $conexao->prepare("SELECT id FROM cadastro WHERE cpf = ?");
    $verificaCpf->bind_param("s", $cpf);
    $verificaCpf->execute();
    $verificaCpf->store_result();

    if ($verificaCpf->num_rows > 0) {
        echo "Erro: Este CPF já está cadastrado.";
        $verificaCpf->close();
        $conexao->close();
        exit;
    }
    $verificaCpf->close();

    // Verificar duplicidade de e-mail
    $verificaEmail = $conexao->prepare("SELECT id FROM cadastro WHERE email = ?");
    $verificaEmail->bind_param("s", $email);
    $verificaEmail->execute();
    $verificaEmail->store_result();

    if ($verificaEmail->num_rows > 0) {
        echo "Erro: Este e-mail já está cadastrado.";
        $verificaEmail->close();
        $conexao->close();
        exit;
    }
    $verificaEmail->close();

    // Inserir no banco
    $stmt = $conexao->prepare("INSERT INTO cadastro (nome, cpf, endereco, data_nascimento, email, senha) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nome, $cpf, $endereco, $data_nascimento, $email, $senha_cript);

    if ($stmt->execute()) {
        header('Location: cadastroOk.php');
        exit;
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
} else {
    echo "Erro: Todos os campos são obrigatórios.";
}
?>