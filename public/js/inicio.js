window.addEventListener('scroll',function() {
    let animacion = document.getElementById('carouselExampleAutoplaying');
    let posicion = animacion.getBoundingClientRect().top;
    if (posicion<window.innerHeight) {
        animacion.style.animation = 'mover 600ms ease-out'
    }
 });