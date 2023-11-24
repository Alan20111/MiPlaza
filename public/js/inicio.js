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
var p_cards = [];

// Declaración de las cartas
for (var i = 1; i <= 6; i++) {
    p_cards.push(document.getElementById("p-grid-" + i));
}

var cards = [];

// Declaración de las cartas
for (var i = 1; i <= 5; i++) {
    cards.push(document.getElementById("card-grid-" + i));
    console.log("card-grid-" + i);
}
var cardis = [];

// Declaración de las cartas
for (var i = 1; i <= 6; i++) {
    cardis.push(document.getElementById("img-grid-" + i));
}
var cardAnimation = document.getElementById("card-animation");
function agrega_cards(categoria) {
    cardAnimation.classList.add("card-animation");

    switch (categoria) {
        case "ArtH":
            cardis[0].src = base_url + "public/img/referencia.jpg";
            p_cards[0].textContent = "Aromatizantes";
            cardis[1].src = base_url + "public/img/referencia.jpg";
            p_cards[1].textContent = "Detergentes para Ropa";
            cardis[2].src = base_url + "public/img/referencia.jpg";
            p_cards[2].textContent = "Suavisantes";
            cardis[3].src = base_url + "public/img/referencia.jpg";
            p_cards[3].textContent = "Detergentes para Cocina";
            cardis[4].src = base_url + "public/img/referencia.jpg";
            p_cards[4].textContent = "Insecticidas";
            cardis[5].src = base_url + "public/img/referencia.jpg";
            p_cards[5].textContent = "Limpieza de Baños";
            break;
        case "ProB":
            cardis[0].src = base_url + "public/img/referencia1.jpg";
            p_cards[0].textContent = "Pañales";
            cardis[1].src = base_url + "public/img/referencia1.jpg";
            p_cards[1].textContent = "Fórmula para bebés";
            cardis[2].src = base_url + "public/img/referencia1.jpg";
            p_cards[2].textContent = "Toallitas húmedas";
            cardis[3].src = base_url + "public/img/referencia1.jpg";
            p_cards[3].textContent = "Lociones para bebés";
            cardis[4].src = base_url + "public/img/referencia1.jpg";
            p_cards[4].textContent = "Shampoo para bebés";
            cardis[5].src = base_url + "public/img/referencia1.jpg";
            p_cards[5].textContent = "Accesorios";
            break;
        case "AliB":
            cardis[0].src = base_url + "public/img/grid-harinas.jpg";
            p_cards[0].textContent = "Harinas y cereales";
            cardis[1].src = base_url + "public/img/captura1.jpg";
            p_cards[1].textContent = "Lateria";
            cardis[2].src = base_url + "public/img/captura1.jpg";
            p_cards[2].textContent = "Bebidas";
            cardis[3].src = base_url + "public/img/captura1.jpg";
            p_cards[3].textContent = "Carnes frias";
            cardis[4].src = base_url + "public/img/grid-basicos.jpg";
            p_cards[4].textContent = "Basicos";
            cardis[5].src = base_url + "public/img/captura1.jpg";
            p_cards[5].textContent = "Botanas";
            break;
        case "CuiB":
            cardis[0].src = base_url + "public/img/referencia.jpg";
            p_cards[0].textContent = "Crema facial";
            cardis[1].src = base_url + "public/img/referencia.jpg";
            p_cards[1].textContent = "Crema corporal";
            cardis[2].src = base_url + "public/img/referencia.jpg";
            p_cards[2].textContent = "Jabón corporal";
            cardis[3].src = base_url + "public/img/referencia.jpg";
            p_cards[3].textContent = "Desodorantes";
            cardis[4].src = base_url + "public/img/referencia.jpg";
            p_cards[4].textContent = "Shampoo y Acondicionadores";
            cardis[5].src = base_url + "public/img/referencia.jpg";
            p_cards[5].textContent = "Higiene bucal";
            break;
        case "HigD":
            cardis[0].src = base_url + "public/img/referencia.jpg";
            p_cards[0].textContent = "Bolsas plasticas";
            cardis[1].src = base_url + "public/img/referencia.jpg";
            p_cards[1].textContent = "Papel alumínio";
            cardis[2].src = base_url + "public/img/referencia.jpg";
            p_cards[2].textContent = "Papel higienico";
            cardis[3].src = base_url + "public/img/referencia.jpg";
            p_cards[3].textContent = "Higiene Femenina";
            cardis[4].src = base_url + "public/img/referencia.jpg";
            p_cards[4].textContent = "Desechables";
            cardis[5].src = base_url + "public/img/referencia.jpg";
            p_cards[5].textContent = "Pañales Adulto";
            break;
        default:
            break;
    }
    setTimeout(function () { cardAnimation.classList.remove("card-animation"); }, 700); // Ajusta el tiempo según la duración de tu animación
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
cards[4].addEventListener("click", function () {
    agrega_cards("HigD");
});
