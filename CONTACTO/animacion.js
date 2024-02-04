document.addEventListener("DOMContentLoaded", function() {
    var fadeElements = document.querySelectorAll('.fade-in');

    function checkVisibility() {
        fadeElements.forEach(function(element) {
            var elementTop = element.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;

            if (elementTop < windowHeight * 0.70) {
                element.classList.add('visible');
            }
        });
    }

    // Verifica la visibilidad cuando se carga la página
    checkVisibility();

    // Verifica la visibilidad al hacer scroll
    window.addEventListener('scroll', checkVisibility);
});
