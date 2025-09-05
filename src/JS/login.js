login.js
 
function login(event) {
    event.preventDefault();
 
    const email = document.getElementById('email').value.trim().toLowerCase();
    const senha = document.getElementById('senha').value;
 
    // Busca usuários cadastrados
    const usuarios = JSON.parse(localStorage.getItem('usuarios')) || [];
 
    // Verifica se o usuário existe e a senha confere
    const usuarioValido = usuarios.find(user => user.email === email && user.senha === senha);
 
    if (usuarioValido) {
        // Salva o estado de login (exemplo: salvar o email do usuário logado)
        localStorage.setItem('usuarioLogado', JSON.stringify(usuarioValido));
 
        // Redireciona para o dashboard
        window.location.href = 'dashboard.html';
    } else {
        alert('Email ou senha inválidos. Por favor, tente novamente.');
    }
}