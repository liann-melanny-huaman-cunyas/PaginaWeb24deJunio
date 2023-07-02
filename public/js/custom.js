// public/js/custom.js
document.addEventListener("DOMContentLoaded", function() {
    const toggleNavButton = document.getElementById("toggleNavButton");
    const mobileNav = document.getElementById("mobileNav");
    const mobileNavMenu = document.getElementById("mobileNavMenu");
    const desktopNav = document.getElementById("desktopNav");

    toggleNavButton.addEventListener("click", function() {
        mobileNav.classList.toggle("hidden");
    });

    // Cierra el menú móvil cuando se hace clic en un enlace
    const mobileNavLinks = mobileNavMenu.querySelectorAll("a");
    mobileNavLinks.forEach(function(link) {
        link.addEventListener("click", function() {
            mobileNav.classList.add("hidden");
        });
    });

    // Muestra u oculta el menú de escritorio según el tamaño de la ventana
    function toggleDesktopNav() {
        if (window.innerWidth < 1024) {
            desktopNav.classList.add("hidden");
        } else {
            desktopNav.classList.remove("hidden");
        }
    }

    // Llama a la función toggleDesktopNav en la carga inicial y en cada cambio de tamaño de ventana
    toggleDesktopNav();
    window.addEventListener("resize", toggleDesktopNav);
});
