const base_url = "http://localhost/Miplaza/";
var tarjetastotal;
var widthscreen;
var anchoPantalla = window.innerWidth;
var aco = 0;

function loadData() {
    $.ajax({
        url: base_url + "index.php/Admin/readData",
        dataType: "json",
        type: "post",
        data: {},
        success: function (datos, estado, jhrx) {
            if (datos.status == 'success') {
                tarjetastotal = datos;
                renderTarjetas(datos.tarjetas);
                width(); // Llama a la función width() al cargar los datos.
            }
        },
    });
}

function width() {
    anchoPantalla = window.innerWidth;
    if (anchoPantalla > 1200) {
        widthscreen = "xl";
    } else if (anchoPantalla > 992) {
        widthscreen = "lg";
    } else if (anchoPantalla > 768) {
        widthscreen = "md";
    } else {
        widthscreen = "sm";
    }
    renderTarjetas(tarjetastotal.tarjetas);
}

function renderTarjetas(datosTarjetas) {
    var contenedor = document.getElementById('list-example');
    contenedor.innerHTML = '';

    datosTarjetas.forEach(function (valor, i, array) {
        var enlace = document.createElement('a');
        enlace.className = "list-group-item list-group-item-action w-100 h-100 border border-0 rounder-0  px-0 align-middle";
        enlace.href = "#list-item-" + valor.id;
        enlace.innerHTML = "<p class='m-0 me-3'>" + valor.navtittle + "</p";
        contenedor.appendChild(enlace);
    });

    var contenedorr = document.getElementById('list');
    contenedorr.innerHTML = '';

    datosTarjetas.forEach(function (valor, i, array) {
        var tarjetaDiv = document.createElement('div');
        tarjetaDiv.className = 'conteiner w-100 shadow';
        tarjetaDiv.id = 'list-item-' + valor.id;
        tarjetaDiv.style.background = "white";
        tarjetaDiv.style.margin = '0 0 100px 0';

        var tarjetaContenido = `
            <div class="row h-100">
                ${alternarHtml(datosTarjetas.length, i)}
            </div>
        `;
        tarjetaDiv.innerHTML = tarjetaContenido;
        contenedorr.appendChild(tarjetaDiv);

        aco++;

        if (aco === datosTarjetas.length) {
            var footer = document.createElement('footer');
            footer.className = 'position-relative';
            footer.innerHTML = `
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/profile.php?id=100053143824005">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <!-- ... (código SVG de Facebook) -->
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/profile.php?id=100053143824005">
                            <svg xmlns="http://w3.org/2000/svg" width="28" height="28" fill="#795548"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <!-- ... (código SVG de WhatsApp) -->
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="line"></div>
                <p>© MiPlaza.com © 2023 - Todos los derechos reservados</p>
                <div class="position-absolute bottom-0 end-0 m-2"><a href="<?= base_url() ?>index.php/admin"><svg
                    xmlns="http://w3.org/2000/svg" width="20" height="20" fill="#795548"
                    class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                    <!-- ... (código SVG del ícono de escudo) -->
                </svg></a></div>
            `;
            contenedorr.appendChild(footer);
        }
    });
}

var it = 0;

function alternarHtml(length, i) {
    var stringFinal = "";
    var atributo;

    if (widthscreen == "xl" || widthscreen == "lg") {
        console.log(widthscreen);
        if (it == 0) {
            atributo = "position-absolute top-100 start-100 translate-middle";
        } else {
            atributo = "position-absolute top-100 start-0 translate-middle";
        }
    } else {
        atributo = "position-absolute top-100 start-50 translate-middle";
    }

    const aside1 = `
        <div class="aside1 col-lg-6 col-sm-12 position-relative h-100 p-5" >
            <div class="tittle position-relative h-75">
                <img src="${base_url}${tarjetastotal.tarjetas[i].img}" alt="" class=" object-fit-cover rounded rounded w-100 h-100 position-absolute  start-50 translate-middle-x">
                <p class="fs-2 text-wrap text-center rounder rounder-1 px-2 display-6 ${atributo} text-${determinarColor(tarjetastotal.tarjetas[i].color)}" style="background: ${tarjetastotal.tarjetas[i].color};">
                    ${tarjetastotal.tarjetas[i].tittle}
                </p>
            </div>
            <div class="descripcion h-25 mt-5 mx-auto  text-wrap" style="max-length: 150%;">
                <p class="text-dark">${tarjetastotal.tarjetas[i].descripcion}</p>
            </div>
        </div >
    `;

    const aside2 = `
        <div class="aside2 col-lg-6 col-sm-12 card-container" id="card-container-${tarjetastotal.tarjetas[i].id}" >
            <div class="card-float w-75 py-5">
                <p class="h4 h-25 text-dark">
                    Actividades
                </p>
                <ul class="h-75 list-group list-group-flush rounded rounded mx-lg-5" style="box-shadow: 0px 0px 100px #0000003e;">
                    <li class="list-group-item rounded-top border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act1}</li>
                    <li class="list-group-item border-top-1 border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act2}</li>
                    <li class="list-group-item border-top-1 border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act3}</li>
                    <li class="list-group-item border-top-1 border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act4}</li>
                    <li class="list-group-item border-top-1 rounded-bottom  border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act5}</li>
                </ul>
            </div>
        </div >
    `;

    if (widthscreen == "md" || widthscreen == "sm") {
        stringFinal = aside1 + aside2 + stringFinal;
    } else {
        if (tarjetastotal.tarjetas.length > 1) {
            it++;
        }
        if (it == 1) {
            stringFinal = aside1 + aside2 + stringFinal;
        } else {
            it = 0;
            stringFinal = aside2 + aside1 + stringFinal;
        }
    }
    return stringFinal;
}

function reducirTono(colorHex, factor) {
    const r = parseInt(colorHex.slice(1, 3), 16);
    const g = parseInt(colorHex.slice(3, 5), 16);
    const b = parseInt(colorHex.slice(5, 7), 16);

    const nuevoR = Math.max(0, r - factor);
    const nuevoG = Math.max(0, g - factor);
    const nuevoB = Math.max(0, b - factor);

    const nuevoColorHex = `#${nuevoR.toString(16).padStart(2, '0')}${nuevoG.toString(16).padStart(2, '0')}${nuevoB.toString(16).padStart(2, '0')}`;
    return nuevoColorHex;
}

function calcularLuminancia(color) {
    const r = parseInt(color.slice(1, 3), 16) / 255;
    const g = parseInt(color.slice(3, 5), 16) / 255;
    const b = parseInt(color.slice(5, 7), 16) / 255;

    return 0.299 * r + 0.587 * g + 0.114 * b;
}

function determinarColor(colorFondo) {
    const luminancia = calcularLuminancia(colorFondo);
    if (luminancia > 0.75) {
        return "black";
    } else {
        return "light";
    }
}

loadData();
