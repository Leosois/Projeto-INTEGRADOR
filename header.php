<?php
echo '<html lang="pt-br">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Cadastre-se</title>';
echo '    <link rel="stylesheet" href="src/css/menuStyle1.css">';
echo '</head>';
echo '<body>';
echo '    <header>';
echo '          <div class="principal">';
echo '              <a href="index.php" class="logo"><img src="src/img/logo.png" alt="logo-menu">Descarte Consciente</a>';
echo '              <div class="search-container">';
echo '                    <input type="text" placeholder="Digite sua pesquisa..." />';
echo '                    <button type="submit">Buscar</button>';
echo '              </div>';
echo '              <nav class="btn">';           
echo '                    <p class="login">Olá, <a href="cadastrar.php">Entre</a> ou <br><a href="cadastrar.php">Cadastre-se</a></p>';
echo '              </nav>';
echo '          </div>';
echo'           <nav>';
echo'               <a href="ImpactoSocial.php">Impacto Social</a>';
echo'               <a href="TrocasComDescontos.php">Trocas com Descontos</a>';
echo'               <a href="Sustentabilidade.php">Sustentabilidade</a>';
echo'               <a href="Produtos.php">Produtos</a>';
echo'           </nav>';
echo '    </header>';
?>