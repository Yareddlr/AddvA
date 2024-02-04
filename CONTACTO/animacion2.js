document.addEventListener('DOMContentLoaded', function () {
    const iconHamburguer = document.querySelector('.iconhamburguer');
    const sidebar = document.querySelector('.sidebar');
    const closeBtn = document.querySelector('.close-btn');

    // Función para abrir la barra lateral
    function openSidebar() {
        sidebar.style.width = '250px';
        sidebar.style.height = '100vh';
    }

    // Función para cerrar la barra lateral
    function closeSidebar() {
        sidebar.style.width = '0';
    }

    // Evento al hacer clic en el icono de hamburguesa
    iconHamburguer.addEventListener('click', openSidebar);

    // Evento al hacer clic en el botón de cierre de la barra lateral
    closeBtn.addEventListener('click', closeSidebar);
});
