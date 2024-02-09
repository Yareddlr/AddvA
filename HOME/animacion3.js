document.addEventListener('DOMContentLoaded', function () {
    var botonesDesplazar = document.getElementsByClassName('btnDesplazar');

    for (var i = 0; i < botonesDesplazar.length; i++) {
        botonesDesplazar[i].addEventListener('click', function () {
            var seccion2 = document.getElementsByClassName('seccion2')[0];
            var posicionSeccion2 = seccion2.offsetTop;

            window.scrollTo({
                top: posicionSeccion2,
                behavior: 'smooth'
            });
        });
    }
});



