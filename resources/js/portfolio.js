document.addEventListener('DOMContentLoaded', () => {
    function activarLinkActual() {
    const links = document.querySelectorAll('.nav-link');
    const secciones = document.querySelectorAll('section[id]');
    const navHeight = document.querySelector('nav')?.offsetHeight || 70;

    window.addEventListener('scroll', () => {
        let seccionActiva = null;

        secciones.forEach(section => {
            const rect = section.getBoundingClientRect();
            const topVisible = rect.top >= navHeight && rect.top < window.innerHeight / 2;
            const middleVisible = rect.top < navHeight && rect.bottom > navHeight;

            if (topVisible || middleVisible) {
                seccionActiva = section.id;
            }
        });

        if (seccionActiva) {
            links.forEach(link => {
                link.classList.remove('font-bold', 'text-black');
                if (link.dataset.link === seccionActiva) {
                    link.classList.add('font-bold', 'text-black');
                }
            });
        }
    });
}

activarLinkActual();
});
