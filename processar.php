<?php
 include 'conectar.php';

 $nome = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $endereco = $_POST['endereco'];
 $idade= $_POST['idade'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];

 // Inserir ao banco
 $sql = "INSERT INTO LOGIN (nome, cpf, endereco, idade, email, senha) VALUES ('$nome', '$cpf', '$endereco', '$idade', '$email', '$senha')";

 if ($conexao->query($sql) === TRUE) {
    echo "login realizado com sucesso!";
 } else {
    echo "Erro." . $conexao->error;
 }

 $conexao->close();
?>