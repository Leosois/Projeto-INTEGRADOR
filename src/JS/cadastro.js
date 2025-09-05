cadastro.js
 
document.addEventListener('DOMContentLoaded', () => {
    const cadastroForm = document.getElementById('cadastroForm');
 
    cadastroForm.addEventListener('submit', (event) => {
        event.preventDefault();
 
        const nome = document.getElementById('nome').value.trim();
        const email = document.getElementById('email').value.trim().toLowerCase();
        const senha = document.getElementById('senha').value;
        const confirmaSenha = document.getElementById('confirmaSenha').value;
 
        // Verifica se as senhas são iguais
        if (senha !== confirmaSenha) {
            alert('As senhas não coincidem. Por favor, tente novamente.');
            return; // Interrompe a execução do script
        }
       
        // Busca usuários existentes
        const usuarios = JSON.parse(localStorage.getItem('usuarios')) || [];
 
        // Verifica se o email já está cadastrado
        const emailExiste = usuarios.find(user => user.email === email);
 
        if (emailExiste) {
            alert('Este email já está cadastrado.');
            return;
        }
 
        // Cria o novo usuário
        const novoUsuario = { nome: nome, email: email, senha: senha };
 
        // Adiciona o novo usuário à lista
        usuarios.push(novoUsuario);
 
        // Salva a lista atualizada no localStorage
        localStorage.setItem('usuarios', JSON.stringify(usuarios));
 
        alert('Cadastro realizado com sucesso! Agora você pode fazer login.');
        window.location.href = 'index.html';
    });
});