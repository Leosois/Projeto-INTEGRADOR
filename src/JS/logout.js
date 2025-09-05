logout.js
 
// O script deve ser incluído na página do dashboard
 
const logoutBtn = document.getElementById('btnLogout');
 
// Verifica se o botão de logout existe antes de adicionar o evento
if (logoutBtn) {
    logoutBtn.addEventListener('click', () => {
        // Limpa o item 'usuarioLogado' do localStorage
        localStorage.removeItem('usuarioLogado');
       
        // Redireciona para a página de login
       
        window.location.href = 'index.html';
    });
}