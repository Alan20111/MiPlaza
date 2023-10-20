const base_url = "http://localhost/Miplaza";
function loadData() {
    $.ajax({
        url: base_url + "index.php/Admin/readData",
        dataType: "json",
        type: "post",
        data: {},
        success: function (datos, estado, jhrx) {
            if (datos.status == 'success') {
                renderTarjetasvar = datos.tarjetas;
                renderTarjetas(datos.tarjetas);
            }
        },
        error: function (jhrx, estado, error) { },
    });
}
function renderTarjetas(datosTarjetas) {
    var contenedor = document.getElementById('contenedor');
    datosTarjetas.forEach(function (valor, i, array) {
        console.log(valor.id);
        var tarjetaDiv = document.createElement('div');
        tarjetaDiv.className = 'py-5 py-lg-4 px-sm-5 px-lg-4';
        var tarjetaContenido = `
            <div class="row w-auto h-auto">
                <div class="col-md-6 col-sm-12 p-0 z-2 img-list shadow rounded m-auto rounded-start-pill">
                    <img src="${base_url + valor.img}"img-list  class="w-100 h-100 img-fluid object-fit-cover rounded m-auto rounded-start-pill" alt="" style="max-height: 300px; min-height: 250px;">
                </div>
                <div class="col-md-6 col-sm-12 text-center shadow z-2 cardadd h-auto" style="background: ${valor.color};">
                    <p class="fs-5 badge text-wrap rounded-1 mt-3 mb-0 shadow z-1" style="color: ${valor.color}; background: ${determinarColor(valor.color)};">${valor.tittle}</p>
                    <p class="fs-6 fw-normal badge text-wrap  rounded-0 m-0 w-100 text-start d-inline-block text-truncate" style="color:${determinarColor(valor.color)}">${valor.descripcion}</p>
                </div>
                <div class="d-flex flex-column col-12 p-0 ms-auto me-0 w-75">
                    <div class="container w-100 p-0 nav-item m-0">
                        <button class="btn w-100 px-0 me-2 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample${i}" aria-expanded="false" aria-controls="collapseExample${i}" style="border: solid 1px ${valor.sombra};" onmouseover="this.style.backgroundColor = '${valor.sombra}';"onmouseout="this.style.backgroundColor = 'transparent';" >
                            Mas. . .
                        </button>
                        <div class="collapse text-light p-0 " id="collapseExample${i}" data-bs-target="id" style="background: ${valor.sombra};">
                            <div class="row card-body" id="id">
                                <div class="col-6">
                                    <ul class="list-group list-group-flush  bg-light" style="color:${reducirTono(valor.sombra, 100)};">
                                        <p class="my-0 mx-2">Actividades:</p>
                                        <li class="list-group-item " style="background: ${valor.sombra}; color:${determinarColor(valor.sombra)};">${valor.act1}</li>
                                        <li class="list-group-item " style="background: ${valor.sombra}; color:${determinarColor(valor.sombra)};">${valor.act2}</li>
                                        <li class="list-group-item " style="background: ${valor.sombra}; color:${determinarColor(valor.sombra)};">${valor.act3}</li>
                                        <li class="list-group-item " style="background: ${valor.sombra}; color:${determinarColor(valor.sombra)};">${valor.act4}</li>
                                        <li class="list-group-item " style="background: ${valor.sombra}; color:${determinarColor(valor.sombra)};">${valor.act5}</li>
                                    </ul>
                                </div>
                                <div class="col-6 position-relative">
                                    <ul class="list-group list-group-flush  bg-light" style="color:${reducirTono(valor.sombra, 100)};">
                                        <p class="my-0 mx-2">Titulo de navegador:</p>
                                        <li class="list-group-item " style="background: ${valor.sombra}; color:${determinarColor(valor.sombra)};">${valor.navtittle}</li>
                                    </ul>
                                    <button type="button" class="btn btn-outline-light m-auto fw-medium position-absolute bottom-0 start-50 translate-middle w-75" onclick="sendEditCard(${valor.id});">Editar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        tarjetaDiv.innerHTML = tarjetaContenido;
        contenedor.appendChild(tarjetaDiv);
    });
}
