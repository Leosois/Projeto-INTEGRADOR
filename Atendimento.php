<?php
include 'header.php';

echo '<div class="inicio"><h2>Atendimento Ecobit</h2></div>';
echo '<div class="img1"><img src="src/img/logo.png" alt=""></div>';

echo <<<HTML
<div class="texto">
    <h3>Atendimento ao Cliente: Compromisso com Quem Faz a Diferença</h3>
    <p>Na EcoBit, acreditamos que cada cliente é único — e por isso, nosso atendimento vai muito além do suporte técnico. Ele é um reflexo do nosso compromisso com a transparência, agilidade e respeito em todas as etapas da sua jornada.</p>

    <p>Especializados na troca de computadores com desconto, nosso objetivo é garantir que você tenha uma experiência simples, segura e satisfatória do início ao fim. Seja para tirar dúvidas, entender o valor de avaliação do seu equipamento usado ou acompanhar o processo de troca, nossa equipe está sempre pronta para ajudar.</p>

    <h3>Como podemos te ajudar?</h3>
    <p>
        Avaliação rápida e justa do seu computador usado<br>
        Acompanhamento personalizado da sua solicitação<br>
        Suporte humanizado, com equipe real pronta para conversar<br>
        Respostas claras e sem burocracia<br>
        Transparência em cada etapa do processo
    </p>

    <!-- Barra de busca e botão -->
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Buscar atendimento..." />
        <button onclick="searchHandler()">Buscar</button>
    </div>

    <!-- Abas -->
    <div class="tabs">
        <div class="tab active" onclick="showTab('sugestoes')">Sugestões</div>
        <div class="tab" onclick="showTab('contatos')">Contatos</div>
        <div class="tab" onclick="showTab('reclamacoes')">Reclamações</div>
    </div>

    <!-- Conteúdo das Abas -->
    <div id="sugestoes" class="tab-content active">
        <h3>Envie suas sugestões</h3>
        <p>Tem alguma ideia para melhorar nossos serviços? Adoraríamos ouvir você!</p>
        <p>Email para sugestões: <strong>sugestoes@ecobit.com.br</strong></p>
    </div>

    <div id="contatos" class="tab-content">
        <h3>Contatos</h3>
        <p>Email: <strong>contato@ecobit.com.br</strong></p>
        <p>Telefone: <strong>(11) 4455-5678</strong></p>
        <p>Endereço: Turma TI 100 Senac, SP</p>
    </div>

    <div id="reclamacoes" class="tab-content">
        <h3>Reclamações</h3>
        <p>Sentimos muito se teve algum problema. Nossa equipe está pronta para resolver qualquer situação.</p>
        <p>Email para reclamações: <strong>reclamacoes@ecobit.com.br</strong></p>
        <p>Ou fale diretamente com nosso suporte no WhatsApp: <strong>(11) 91234-5678</strong></p>
    </div>
</div>

<script>
    function showTab(tabId) {
        document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

        document.getElementById(tabId).classList.add('active');
        document.querySelector('.tab[onclick="showTab(\\'' + tabId + '\\')"]').classList.add('active');
    }

    function searchHandler() {
        const input = document.getElementById('searchInput').value.toLowerCase();

        if (input.includes('sugest')) {
            showTab('sugestoes');
        } else if (input.includes('contato')) {
            showTab('contatos');
        } else if (input.includes('reclama')) {
            showTab('reclamacoes');
        } else {
            alert('Nenhuma correspondência encontrada.');
        }
    }
</script>
HTML;

include 'footer.php';
?>

