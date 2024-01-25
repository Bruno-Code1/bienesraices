document.addEventListener('DOMContentLoaded', function() {
    eventListeners();

    darkMode();
});

function darkMode() {

    const botonDarkMode = document.querySelector('.dark-mode-boton');
    const prefiereDarkMode = window.matchMedia('(prefers-color-schema: dark)');


    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else { 
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else { 
            document.body.classList.remove('dark-mode');
        }
    });

    const isDarkMode = localStorage.getItem('darkMode'); // Obtener el estado

    if(isDarkMode === 'enabled') {
        document.body.classList.add('dark-mode');
    }

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');

            // Guardar el estado del modo oscuro en localStorage
    if(document.body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
    } else {
        localStorage.setItem('darkMode', 'disabled');
    }

});




}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}