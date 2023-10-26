const base_url = "http://localhost/Miplaza/";
var tarjetastotal;
function loadData() {
    $.ajax({
        url: base_url + "index.php/Admin/readData",
        dataType: "json",
        type: "post",
        data: {},
        success: function (datos, estado, jhrx) {
            if (datos.status == 'success') {
                tarjetastotal = datos.Tarjetas;
                renderTarjetas(datos.tarjetas);
            }
        },
    });
}

function renderTarjetas(datosTarjetas) {
    var contenedor = document.getElementById('list-example');
    datosTarjetas.forEach(function (valor, i, array) {
        var enlace = document.createElement('a');
        enlace.className = "list-group-item list-group-item-action w-100 h-100 border border-0 rounder rounder-0";
        enlace.href = "#list-item-" + valor.id;
        enlace.innerHTML = "<p>" + valor.navtittle + "</p>";
        contenedor.appendChild(enlace);
    });

    var contenedor = document.getElementById('list');
    datosTarjetas.forEach(function (valor, i, array) {
        var tarjetaDiv = document.createElement('div');
        tarjetaDiv.className = '';
        var tarjetaContenido = `
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                class="scrollspy-example" tabindex="0">
                    <div class="conteiner w-100" id="list-item-${valor.id}">
                        ${alternarHtml(valor.id,datosTarjetas.length)}
                    </div>
                </div>
        `;
        tarjetaDiv.innerHTML = tarjetaContenido;
        contenedor.appendChild(tarjetaDiv);
    });
}

var it = 0;
var aco = 0;
var stringFinal ="";
function alternarHtml(id, length) {
    const aside1 = `<div class="aside1">
    <div class="tittle position-relative">
        <img src="" alt="" class="img-fluid">
        <p class="h2  position-absolute top-100 start-100 translate-middle">Gerente General</p>
    </div>
    <div class="descripcion">
        <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
    </div>
</div>`;
    const aside2 = `<div class="aside2" id="card-container">
    <div class="card-float" id="card-float">
        <p class="h4">
            Actividades
        </p>
            <ul class="list-group list-group-flush">
            <li class="list-group-item ">An item</li>
            <li class="list-group-item ">A second item</li>
            <li class="list-group-item ">A third item</li>
            <li class="list-group-item ">A fourth item</li>
            <li class="list-group-item ">And a fifth one</li>
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
</footer>`
    aco++;
    if (aco == length) {
        stringFinal = footer;
    }
    console.log(aco,length);
    it++;
    if (it == 1) {
        stringFinal = aside1 + aside2 + stringFinal;
    } else {
        it = 0;
        stringFinal = aside2 + aside1 + stringFinal;
    }
    return stringFinal
}
loadData();