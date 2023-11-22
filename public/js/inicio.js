const cargarcard = (entradas, observador) => {
    entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('visible');
            entrada.target.classList.remove('opacity-0');
        } else {
        }
    });
};

const observador = new IntersectionObserver(cargarcard, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
});

const elemento = document.getElementById('declaracion');
if (elemento) {
    observador.observe(elemento);
}
const elemento1 = document.getElementById('ubicacion');
if (elemento1) {
    observador.observe(elemento1);
}

/*
Alimentos y Bebidas:
    Semillas y Cereales
    Jugos y Leches
    Carnes Frías
    Pan
Cuidado Personal y Belleza:
    Belleza
    Higiénicos
    Desechables
    Detergentes
    Desinfectantes
Artículos para el Hogar:
    Básicos
Productos para Bebés:
    Bebé
*/