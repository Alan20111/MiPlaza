const base_url = "http://localhost/Miplaza/";
var tarjetastotal;
var widthscreen;
var anchoPantalla = window.innerWidth;
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
            }
        },
    });
}
widther();
function widther() {
    anchoPantalla = window.innerWidth;
    if (anchoPantalla >= 1200) {
        widthscreen = "xl";
    } else if (anchoPantalla >= 992) {
        widthscreen = "lg";
    } else if (anchoPantalla >= 768) {
        widthscreen = "md";
    } else {
        widthscreen = "sm";
    }
}
function width() {
    anchoPantalla = window.innerWidth;
    if (anchoPantalla >= 1200) {
        widthscreen = "xl";
    } else if (anchoPantalla >= 992) {
        widthscreen = "lg";
    } else if (anchoPantalla >= 768) {
        widthscreen = "md";
    } else {
        widthscreen = "sm";
    }
    console.log(widthscreen)
    renderTarjetas(tarjetastotal.tarjetas);
}
window.addEventListener("resize", width);
function renderTarjetas(datosTarjetas) {
    var contenedor = document.getElementById('list-example');

    contenedor.innerHTML = '';
    datosTarjetas.forEach(function (valor, i, array) {
        var enlace = document.createElement('a');
        enlace.className = "list-group-item list-group-item-action w-100 h-100 border border-0 rounder-0";
        enlace.href = "#list-item-" + valor.id;
        enlace.innerHTML = "<p class='m-0'>" + valor.navtittle + "</p>";
        contenedor.appendChild(enlace);
    });

    var contenedorr = document.getElementById('list');

    // Borrar el contenido existente del contenedor
    contenedorr.innerHTML = '';

    datosTarjetas.forEach(function (valor, i, array) {
        var tarjetaDiv = document.createElement('div');
        tarjetaDiv.className = 'conteiner w-100';
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
    });
}


var it = 0;
var aco = 0;
function alternarHtml(length, i) {
    var stringFinal = "";
    var atributo;
    if (widthscreen == "xl" || widthscreen == "lg") {
        if (it == 0) {
            atributo = "position-absolute top-100 start-100 translate-middle";

        } else {
            atributo = "position-absolute top-100 start-0 translate-middle";
        }
    } else {
        atributo = "position-absolute top-100 start-50 translate-middle";
    }

    const aside1 = `
    <div class="aside1 col-lg-6 col-sm-12 position-relative h-100">
        <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 p-5">
            <div class="tittle position-relative h-75">
                <img src="`+ base_url + tarjetastotal.tarjetas[i].img + `" alt="" class="object-fit-cover rounded rounded w-100 h-100 position-absolute  start-50 translate-middle-x">
                <p class="fs-3 badge text-wrap rounder-1 px-2 `+ atributo + ` text-` + determinarColor(tarjetastotal.tarjetas[i].color) + `" style="background: ` + tarjetastotal.tarjetas[i].color + `;">
                    `+ tarjetastotal.tarjetas[i].tittle + `
                </p>
            </div>
            <div class="descripcion h-25 mt-4">
                <p class="text-dark">`+ tarjetastotal.tarjetas[i].descripcion + `</p>
            </div>
        </div>
    </div>
    `;
    const aside2 = `
    <div class="aside2 col-lg-6 col-sm-12 card-container" id="card-container-`+ tarjetastotal.tarjetas[i].id + `">
        <div class="card-float sticky-top w-75 z-2 pt-5">
            <p class="h4 h-25 text-dark">
                Actividades
            </p>
            <ul class="h-75 list-group list-group-flush rounded rounded mx-lg-5" style="box-shadow: 0px 0px 100px #0000003e;">
                <li class="list-group-item rounded-top border-light text-`+ determinarColor(tarjetastotal.tarjetas[i].sombra) + `" style="background: ` + tarjetastotal.tarjetas[i].sombra + `;">` + tarjetastotal.tarjetas[i].act1 + `</li>
                <li class="list-group-item border-top-1 border-light text-`+ determinarColor(tarjetastotal.tarjetas[i].sombra) + `" style="background: ` + tarjetastotal.tarjetas[i].sombra + `;">` + tarjetastotal.tarjetas[i].act2 + `</li>
                <li class="list-group-item border-top-1 border-light text-`+ determinarColor(tarjetastotal.tarjetas[i].sombra) + `" style="background: ` + tarjetastotal.tarjetas[i].sombra + `;">` + tarjetastotal.tarjetas[i].act3 + `</li>
                <li class="list-group-item border-top-1 border-light text-`+ determinarColor(tarjetastotal.tarjetas[i].sombra) + `" style="background: ` + tarjetastotal.tarjetas[i].sombra + `;">` + tarjetastotal.tarjetas[i].act4 + `</li>
                <li class="list-group-item border-top-1 rounded-bottom  border-`+ determinarColor(tarjetastotal.tarjetas[i].sombra) + ` text-` + determinarColor(tarjetastotal.tarjetas[i].sombra) + `" style="background: ` + tarjetastotal.tarjetas[i].sombra + `;">` + tarjetastotal.tarjetas[i].act5 + `</li>
            </ul>
        </div>
    </div>`;
    const footer = `<footer class="position-relative">
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a href="https://www.facebook.com/profile.php?id=100053143824005">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
        </a>
    </li>
    <li class="nav-item">
        <a href="https://www.facebook.com/profile.php?id=100053143824005">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548" class="bi bi-whatsapp"
                viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
        </a>
    </li>
</ul>
<div class="line"></div>
<p>© MiPlaza.com © 2023 - Todos los derechos reservados</p>
<div class="position-absolute bottom-0 end-0 m-2"><a href="<?= base_url() ?>index.php/admin"><svg
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#795548"
            class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
        </svg></a></div>
</footer>`;
    aco++;
    if (aco == length) {
        stringFinal = footer;
    }
    if (widthscreen == "md" || widthscreen == "sm") {
        stringFinal = aside1 + aside2 + stringFinal;
    } else {
        it++;
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
    if (luminancia > 0.8) {
        return "black";
    } else {
        return "white";
    }
}
loadData();
