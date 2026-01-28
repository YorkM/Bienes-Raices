document.addEventListener('DOMContentLoaded', function () {
    eventListener();
    darkMode();
});

const darkMode = () => {
    const prefiereDark = window.matchMedia('(prefers-color-scheme: dark)');
    prefiereDark.matches ? document.body.classList.add('dark-mode') : document.body.classList.remove('dark-mode');
    
    prefiereDark.addEventListener('change', function () {
        prefiereDark.matches ? document.body.classList.add('dark-mode') : document.body.classList.remove('dark-mode');
    });
 

    const btnDarkMode = document.querySelector('.dark-mode-boton');
    btnDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    });
}

const eventListener = () => {
    const mobileMenu = document.querySelector('.menu-mobile');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

const navegacionResponsive = () => {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}