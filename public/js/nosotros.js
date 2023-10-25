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
    console.log(valor);
    var enlace = document.createElement('a');
    enlace.className = "list-group-item list-group-item-action w-100 h-100 d-xl-block d-inline-flex border border-0 rounder rounder-0 shadow";
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
                    <div class="conteiner" id="list-item-${valor.id}">
                        ${alternarHtml(valor.id)}
                    </div>


                </div>
        `;
        tarjetaDiv.innerHTML = tarjetaContenido;
        contenedor.appendChild(tarjetaDiv);
    });
}

var it=0;
function alternarHtml(id) {
    const aside1 = `<div class="aside1">
    <div class="tittle position-relative">
        <img src="" alt="" class="img-fluid">
        <p class="h2 position-absolute top-100 start-100 translate-middle">Gerente General</p>
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
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
        </ul>
    </div>

</div>`;
    it++;
    if (it == 1) {
        return aside1 + aside2;
    } else{
        it = 0;
        return aside2 + aside1;
    }
}
loadData();