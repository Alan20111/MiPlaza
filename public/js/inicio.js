const cargarcard = (entradas, observador) => {
    entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
            console.log("vi");

            entrada.target.classList.add('visible');
            entrada.target.classList.remove('opacity-0');
        } else {
            entrada.target.classList.remove("visible");
            console.log("invi");
        }
    });
};

const observador = new IntersectionObserver(cargarcard, {
    root: null,
    rootMargin: '0px',
    threshold: 0.45
});

const elemento = document.getElementById('declaracion');
if (elemento) {
    // Agrega la clase inicial si el elemento ya está en la pantalla al cargar la página
    if (elemento.getBoundingClientRect().top < window.innerHeight) {
        elemento.classList.add('visible');
        elemento.classList.remove('opacity-0');
    }

    // Observa el elemento
    observador.observe(elemento);
}
