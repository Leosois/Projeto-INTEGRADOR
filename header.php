<?php
echo '<html lang="pt-br">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Cadastre-se</title>';
echo '    <link rel="stylesheet" href="src/css/menuStyle1.css">'; // CSS externo
echo '</head>';
echo '<body>';
echo '    <header>';
echo '        <div class="principal">';
echo '            <a href="index.php" class="logo"><img src="src/img/logo.png" alt="logo-menu">EcoBit</a>';
echo '            <div class="search-container">'; // nova classe CSS
echo '                <input type="text" id="search" placeholder="Digite sua pesquisa..." autocomplete="off">';
echo '                <div id="resultados"></div>';

echo '            </div>';           
echo '                <p class="login">Olá, <a href="login.php">Entre</a> ou <br><a href="cadastrar.php">Cadastre-se</a></p>';
echo '        </div>';
echo '        <nav>';
echo '            <a href="ImpactoSocial.php">Impacto Social</a>';
echo '            <a href="TrocasComDescontos.php">Trocas com Descontos</a>';
echo '            <a href="Sustentabilidade.php">Sustentabilidade</a>';
echo '            <a href="Produtos.php">Produtos</a>';
echo '        </nav>';
require_once 'conectar.php';
echo '    </header>';
?>