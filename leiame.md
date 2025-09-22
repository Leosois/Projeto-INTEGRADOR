<?php
echo '<!DOCTYPE html>';
echo '<html lang="pt-br">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>EcoBit</title>';
echo '    <link rel="stylesheet" href="src/css/menuStyle1.css">';
echo '</head>';
echo '<body>';
echo '    <header>';
echo '        <div class="principal">';
echo '            <a href="index.php" class="logo"><img src="src/img/logo.png" alt="logo-menu">EcoBit</a>';

// Formulário de busca e área de resultados
echo '            <div class="search-container">';
echo '                <form action="catalogo.php" method="GET">';
echo '                    <input type="text" id="search-box" name="q" placeholder="Digite sua pesquisa..." autocomplete="off" onkeyup="liveSearch()">';
echo '                    <button class="search-button" type="submit">Buscar</button>';
echo '                </form>';
echo '                <div id="resultados"></div>';
echo '            </div>';

echo '            <p class="login">Olá, <a href="login.php">Entre</a> ou <br><a href="cadastrar.php">Cadastre-se</a></p>';
echo '        </div>';
echo '        <nav>';
echo '            <a href="SobreNos.php">Sobre Nós</a>';
echo '            <a href="Atendimento.php">Atendimento</a>';
echo '            <a href="Sustentabilidade.php">Sustentabilidade</a>';
echo '            <a href="Promocoes.php">Promoções</a>';
echo '        </nav>';
echo '    </header>';
?>

<script>
    function liveSearch() {
        let query = document.getElementById('search-box').value;
        let resultadosDiv = document.getElementById('resultados');

        if (query.length > 0) {
            let xhr = new XMLHttpRequest();
            // Substitua 'busca.php' pelo nome do seu arquivo PHP que faz a busca
            xhr.open('GET', 'busca.php?q=' + encodeURIComponent(query), true);

            xhr.onload = function() {
                if (this.status >= 200 && this.status < 400) {
                    resultadosDiv.innerHTML = this.responseText;
                }
            };
            xhr.send();
        } else {
            resultadosDiv.innerHTML = ''; // Limpa os resultados se o campo estiver vazio
        }
    }
</script>

<?php
require_once 'conectar.php';
?>