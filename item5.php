<?php
include "header.php";
?>



<section id="principal">

    <div class="container">

        <div class="conteudo">

            <div class="titulo">

                <h2> Intel Core i3 7100F</h2>
                
            </div>

            <div class="img">
                <img class="itemIMG" src="src/img/img6.jpg" alt="">
            </div>

           

        </div>




        <div class="painel">

            <div class="desc">
                <h2>Processador</h2>
                <p>Intel i3 7100F</p>
                <h2>Placa de Video</h2>
                <p>Nvidia Geforce Rtx 1660</p>
                <h2>Memória</h2>
                <p>DDR4 8GB</p>
                <h2>Armazenamento</h2>
                <p>SSD 512GB</p>
            </div>

            <div class="desc">
                <div class="preco-original">de R$ 2.429,00 por</div>

                <div class="preco-pix">R$ 1.214,50</div>

                <div class="desconto-info">na troca do seu usado 50% de desconto</div>

                <div class="ou">ou</div>

                <div class="preco-parcelado-container">
                    <div class="preco-parcelado">R$ 2.890,12</div>
                    <div class="parcelas-info">
                        em até 12x de <span class="parcela-valor">R$ 240,84</span><br>
                        sem juros no cartão
                    </div>
                </div>

              

                <form action="adicionar_carrinho.php" method="POST">
                <input type="hidden" name="produto_id" value="05">
                <input type="hidden" name="nome" value="PC Gamer intel Core i3 10400F">
                <input type="hidden" name="preco" value="2601.30">

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



<?php
include "footer.php";
?>