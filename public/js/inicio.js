const base_url = "http://localhost/Miplaza/";

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
var cards = [];

// Declaración de las cartas
for (var i = 1; i <= 6; i++) {
    cards.push(document.getElementById("card-grid-" + i));
}
var cardis = [];

// Declaración de las cartas
for (var i = 1; i <= 6; i++) {
    cardis.push(document.getElementById("img-grid-" + i));
}
var cardAnimation = document.getElementById("card-animation");
function agrega_cards(categoria) {
    cardAnimation.classList.remove("card-animation");
    cardAnimation.classList.add("card-animation-active");
    switch (categoria) {
        case "ArtH":
            cardis[0].src = base_url + "public/img/referencia.jpg";
            cardis[1].src = base_url + "public/img/referencia.jpg";
            cardis[2].src = base_url + "public/img/referencia.jpg";
            cardis[3].src = base_url + "public/img/referencia.jpg";
            cardis[4].src = base_url + "public/img/referencia.jpg";
            cardis[5].src = base_url + "public/img/referencia.jpg";
            break;
        case "ProB":
            cardis[0].src = base_url + "public/img/referencia1.jpg";
            cardis[1].src = base_url + "public/img/referencia1.jpg";
            cardis[2].src = base_url + "public/img/referencia1.jpg";
            cardis[3].src = base_url + "public/img/referencia1.jpg";
            cardis[4].src = base_url + "public/img/referencia1.jpg";
            cardis[5].src = base_url + "public/img/referencia1.jpg";
            break;
        case "AliB":
            cardis[0].src = base_url + "public/img/referencia.jpg";
            cardis[1].src = base_url + "public/img/referencia.jpg";
            cardis[2].src = base_url + "public/img/referencia.jpg";
            cardis[3].src = base_url + "public/img/referencia.jpg";
            cardis[4].src = base_url + "public/img/referencia.jpg";
            cardis[5].src = base_url + "public/img/referencia.jpg";
            break;
        case "CuiB":
            cardis[0].src = base_url + "public/img/referencia.jpg";
            cardis[1].src = base_url + "public/img/referencia.jpg";
            cardis[2].src = base_url + "public/img/referencia.jpg";
            cardis[3].src = base_url + "public/img/referencia.jpg";
            cardis[4].src = base_url + "public/img/referencia.jpg";
            cardis[5].src = base_url + "public/img/referencia.jpg";
            break;
        default:
            break;
    }
    cardAnimation.classList.remove("card-animation-active")
    cardAnimation.classList.add("card-animation");
}
agrega_cards("AliB");
cards[0].addEventListener("click", function () {
    agrega_cards("AliB");
});
cards[1].addEventListener("click", function () {
    agrega_cards("CuiB");
});
cards[2].addEventListener("click", function () {
    agrega_cards("ArtH");
});
cards[3].addEventListener("click", function () {
    agrega_cards("ProB");
});
