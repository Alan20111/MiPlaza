const base_url = "http://localhost/Miplaza/";
var tarjetastotal;
var aco = 0;
var anchoPantalla = window.innerWidth;
window.addEventListener("resize", function () {
    anchoPantalla = window.innerWidth;
    renderTarjetas(tarjetastotal.tarjetas);
});



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

function renderTarjetas(datosTarjetas) {
    var contenedor = document.getElementById('list-example');
    contenedor.innerHTML = '';

    datosTarjetas.forEach(function (valor, i, array) {
        // Crear el elemento li
        var listItem = document.createElement('li');
        listItem.className = "nav-item p-0 rounded-5 list-nav m-1 w-100";
    
        // Crear el elemento a
        var enlace = document.createElement('a');
        enlace.className = "nav-link list-group-item list-group-item-action px-0  align-middle"
        enlace.href = "#list-item-" + valor.id;
        enlace.innerHTML = "<p class='m-0 px-2 py-1' style='color: #70B34D; min-width:150px;'>" + valor.navtittle + "</p>";
    
        // Agregar el elemento a como hijo del elemento li
        listItem.appendChild(enlace);
    
        // Agregar el elemento li al contenedor
        contenedor.appendChild(listItem);
    });
    ``
    

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
            footer.className = 'position-relative pt-5';
            footer.innerHTML = `
            <ul class="nav justify-content-center">
        </ul>
        <div class="line"></div>
        <p>© MiPlaza.com © 2023 - Todos los derechos reservados</p>
        <div class="position-absolute bottom-0 end-0 m-2"><a href="../admin">
            <svg
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#795548"
            class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
            </svg></a></div>
            `;
            contenedorr.appendChild(footer);

        }
    });
}

var it = 0;
function alternarHtml(length, i) {
    var stringFinal = "";
    const aside1 = `
        <div class="aside1 col-lg-6 col-sm-12 position-relative h-100 p-5" >
            <div class="tittle position-relative h-75">
                <img src="${base_url}${tarjetastotal.tarjetas[i].img}" alt="" class=" object-fit-cover rounded rounded w-100 h-100 position-absolute  start-50 translate-middle-x">
                <p class=" fs-2 text-wrap text-center rounder rounder-1 px-2 display-6 position-absolute top-100 start-50 translate-middle text-${determinarColor(tarjetastotal.tarjetas[i].color)}" style="background: ${tarjetastotal.tarjetas[i].color};">
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
            <div class="card-float w-75 py-5 px-5">
                <p class="h4 h-25 text-dark">
                    Actividades
                </p>
                <ul class="h-75 list-group list-group-flush rounded rounded " style="box-shadow: 0px 0px 100px #0000003e;">
                    <li class="list-group-item rounded-top border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act1}</li>
                    <li class="list-group-item border-top-1 border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act2}</li>
                    <li class="list-group-item border-top-1 border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act3}</li>
                    <li class="list-group-item border-top-1 border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act4}</li>
                    <li class="list-group-item border-top-1 rounded-bottom  border-${determinarColor(tarjetastotal.tarjetas[i].sombra)} text-${determinarColor(tarjetastotal.tarjetas[i].sombra)}" style="background: ${tarjetastotal.tarjetas[i].sombra};">${tarjetastotal.tarjetas[i].act5}</li>
                </ul>
            </div>
        </div >
    `;
    it++;
    if (anchoPantalla <= 992) {
        stringFinal = aside1 + aside2 + stringFinal;
    } else {
        if (it == 1) {
            stringFinal = aside1 + aside2 + stringFinal;
            console.log("a")
        } else {
            it = 0;
            stringFinal = aside2 + aside1 + stringFinal;
            console.log("b")
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
// Selecciona el enlace que tiene la clase 'nav-link'
var enlace = document.querySelector('.nav-link');

// Crea una instancia de MutationObserver con una función de devolución de llamada
var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        // Verifica si la clase 'active' ha sido agregada al enlace
        if (mutation.attributeName === 'class' && enlace.classList.contains('active')) {
            // Ejecuta tu código aquí
            console.log('La clase "active" ha sido agregada al enlace.');
        }
    });
});

// Configura el observer para observar cambios en atributos y clases
observer.observe(enlace, { attributes: true });

// Simulación de agregar la clase 'active' al enlace después de un tiempo (puedes omitir esto en tu código real)
setTimeout(function() {
    enlace.classList.add('active');
}, 2000);
