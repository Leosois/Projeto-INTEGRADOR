<?php
include "header.php";
?>



<section id="principal">

    <div class="container">

        <div class="conteudo">

            <div class="titulo">

                <h2> PC Gamer T-Gamer Hawk intel i5 10400F</h2>

            </div>

            <div class="img">
                <img class="itemIMG" src="src/img/img10.jpg" alt="">
            </div>



        </div>




        <div class="painel">

            <div class="desc">
                <h2>Processador</h2>
                <p>Intel i5 10400F</p>
                <h2>Placa de Video</h2>
                <p>Nvidia Geforce Rtx 3060</p>
                <h2>Memória</h2>
                <p>DDR4 8GB</p>
                <h2>Armazenamento</h2>
                <p>SSD 250GB</p>
            </div>

            <div class="desc" data-nome="Produto Exemplo" data-id="1234">
                <div class="preco-original">de R$ 4.601,30 por</div>

                <div class="preco-pix">R$ 2.300,65</div>

                <div class="desconto-info">na troca do seu usado 50% de desconto</div>

                <div class="ou">ou</div>

                <div class="preco-parcelado-container">
                    <div class="preco-parcelado">R$ 3.529,40</div>
                    <div class="parcelas-info">
                        em até 12x de <span class="parcela-valor">R$ 294,12</span><br>
                        sem juros no cartão
                    </div>
                </div>

                <form action="adicionar_carrinho.php" method="POST">
                <input type="hidden" name="produto_id" value="01">
                <input type="hidden" name="nome" value="PC Gamer T-Gamer Hawk intel i5 10400F">
                <input type="hidden" name="preco" value="4601.30">
                <input type="hidden" name="quantidade" value="1">
                

                <button type="submit" class="pagamento-button comprar-button">
                    <div style="display: flex; align-items: center;">
                    <h4 class="comprar1">Comprar</h4>
                    </div>
                    
                </button>
            </form>
            </div>




        </div>
</section>

</div>

<script>
document.getElementById('search').addEventListener('keyup', function() {
    const termo = this.value;

    if (termo.length === 0) {
        document.getElementById('resultados').style.display = 'none';
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'buscar.php?q=' + encodeURIComponent(termo), true);
    xhr.onload = function() {
        if (this.status === 200) {
            const resultados = document.getElementById('resultados');
            resultados.innerHTML = this.responseText;
            resultados.style.display = 'block';
        }
    };
    xhr.send();
});
</script>

<?php
include "footer.php";
?>