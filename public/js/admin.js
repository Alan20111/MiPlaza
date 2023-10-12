const base_url = "http://localhost/Miplaza/";
var colorChange = false;
var imgChange = false;

const fileInput = document.getElementById('formFile');
const bgColorInput = document.getElementById('formColor');
const principalDiv = document.getElementById('principal-color');
const secundarioDiv = document.getElementById('secundario-color');

const formData = new FormData();
//Face de verifiacion de datos en localStorage
function loginUser() {
    var user = localStorage.getItem('user');
    var contrasena = localStorage.getItem('contrasena');

    var jsonLogin = {
        user: user,
        contrasena: contrasena
    }
    checkLogin(jsonLogin);
}
function checkLogin(jsonLogin) {
    $.ajax({
        url: base_url + "index.php/Admin/login",
        dataType: "json",
        type: "post",
        data: jsonLogin,
        success: function (datos, estado, jhrx) {
            if (datos.Status == "False") {
                window.location.href = base_url + "index.php/Admin/";
            } else {
            }
        },
        error: function (jhrx, estado, errorA) {
        }
    })
}
function cleanstorage() {
    localStorage.clear();
}
//Face de subida de datos del formulario
function saveData() {
    var formDatajson = new FormData($("#formData")[0]);
    formDatajson.append("formShadow", reducirTono(formDatajson.get("formColor"), 50));

    if (!imgChange) {
        alert("Debes seleccionar una imagen.");
        return;
    }
    if (!formDatajson.get("formAct1")) {
        alert("Debes completar el campo Act1.");
        return;
    }
    if (!formDatajson.get("formAct2")) {
        alert("Debes completar el campo Act2.");
        return;
    }
    if (!formDatajson.get("formAct3")) {
        alert("Debes completar el campo Act3.");
        return;
    }
    if (!formDatajson.get("formAct4")) {
        alert("Debes completar el campo Act4.");
        return;
    }
    if (!formDatajson.get("formAct5")) {
        alert("Debes completar el campo Act5.");
        return;
    }
    if (!formDatajson.get("formTittle")) {
        alert("Debes completar el campo Título principal.");
        return;
    }
    if (!formDatajson.get("formTittle-nav")) {
        alert("Debes completar el campo Título en navegador.");
        return;
    }
    if (!formDatajson.get("formArea")) {
        alert("Debes completar el campo Descripción del personal.");
        return;
    }
    if (!colorChange) {
        alert("Debes seleccionar un color de fondo.");
        return;
    }

    sendData(formDatajson);
    cleanInputs();
    location.reload();
}

function sendData(jsonTarjeta) {
    $.ajax({
        url: base_url + "index.php/Admin/uploadData",
        dataType: "json",
        type: "post",
        data: jsonTarjeta,
        contentType: false,
        processData: false,
        success: function (datos, estado, jhrx) {
        },
        error: function (jhrx, estado, error) { },
    });
}
function cleanInputs() {
    var inputs = document.querySelectorAll('input');
    var area = document.getElementById('formArea');
    area.value = '';
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = '';
    }
    clearFileInput();
}
function clearFileInput() {
    var image = document.getElementById('imagePreview');

    fileInput.value = '';

    image.src = base_url + "public/img/imagenDefault.jpg";
}
function previewImage(input) {
    imgChange = true;
    var image = document.getElementById('imagePreview');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onload = function (e) {
        image.src = e.target.result;
    };

    if (file) {
        reader.readAsDataURL(file);
    }
}

//Insertar tarjetas

function loadData() {
    $.ajax({
        url: base_url + "index.php/Admin/readData",
        dataType: "json",
        type: "post",
        data: {},
        success: function (datos, estado, jhrx) {
            console.log(datos.status);
            if (datos.status == 'success') {
                renderTarjetas(datos.tarjetas);
            }
        },
        error: function (jhrx, estado, error) { },
    });
}
function renderTarjetas(datosTarjetas) {
    var contenedor = document.getElementById('contenedor');

    datosTarjetas.forEach(function (valor, i, array) {
        var tarjetaDiv = document.createElement('div');
        tarjetaDiv.className = 'col-lg-6 col-sm-12 h-100 py-5 py-lg-0 px-sm-5 px-lg-4 overflow-y-auto overflow-x-hidden';

        tarjetaDiv.innerHTML = `
            <div class="row w-auto h-auto">
                <div class="col-md-6 col-sm-12 p-0 z-2 img-list shadow rounded m-auto rounded-start-pill">
                    <img src="${base_url + valor.img}" class="w-100 h-100 img-fluid object-fit-cover rounded m-auto rounded-start-pill" alt="" style="max-height: 400px; min-height: 250px;">
                </div>
                <div class="col-md-6 col-sm-12 text-center bg-danger shadow z-2">
                    <p class="fs-5 badge bg-light text-wrap text-danger rounded-1 mt-3 mb-0 shadow z-1">${valor.tittle}</p>
                    <p class="fs-6 fw-normal badge text-light  text-danger rounded-0 m-0 w-100 my-2">${valor.descripcion}</p>
                </div>
                <div class=" d-flex flex-column col-12 p-0  ms-auto me-0 w-75">
                    <div class="container w-100 p-0 nav-item m-0">
                        <button class="btn btn-outline-danger w-100 px-0 me-2 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample${i}" aria-expanded="false" aria-controls="collapseExample${i}">
                            Mas. . .
                        </button>
                        <div class="collapse text-light bg-danger p-0 " id="collapseExample${i}" data-bs-target="id">
                            <div class="row card-body" id="id">
                                <div class="col-6">
                                    <ul class="list-group list-group-flush  bg-light text-danger">
                                        <p class="my-0 mx-2">Actividades:</p>
                                        <li class="list-group-item bg-danger text-light">${valor.act1}</li>
                                        <li class="list-group-item bg-danger text-light">${valor.act2}</li>
                                        <li class="list-group-item bg-danger text-light">${valor.act3}</li>
                                        <li class="list-group-item bg-danger text-light">${valor.act4}</li>
                                        <li class="list-group-item bg-danger text-light">${valor.act5}</li>
                                    </ul>
                                </div>
                                <div class="col-6 position-relative">
                                    <ul class="list-group list-group-flush  bg-light text-danger">
                                        <p class="my-0 mx-2">Titulo de navegador:</p>
                                        <li class="list-group-item bg-danger text-light">${valor.navtittle}</li>
                                    </ul>
                                    <button type="button" class="btn btn-outline-light m-auto fw-medium position-absolute bottom-0 start-50 translate-middle w-75">Editar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        contenedor.appendChild(tarjetaDiv);
    });
}

//Face para editar color
bgColorInput.addEventListener('input', function () {
    colorChange = true;
    const selectedColor = bgColorInput.value;
    const colordegrade = (reducirTono(selectedColor, 50));

    principalDiv.style.backgroundColor = selectedColor;
    secundarioDiv.style.background = colordegrade;

    determinarColorTexto(selectedColor, colordegrade);
});
function calcularLuminancia(color) {
    const r = parseInt(color.slice(1, 3), 16) / 255;
    const g = parseInt(color.slice(3, 5), 16) / 255;
    const b = parseInt(color.slice(5, 7), 16) / 255;

    return 0.299 * r + 0.587 * g + 0.114 * b;
}

function determinarColorTexto(colorFondo, colorDegrade) {
    const luminancia = calcularLuminancia(colorFondo);
    const oscurancia = calcularLuminancia(colorDegrade);

    if (luminancia > 0.5) {
        principalDiv.classList.remove("text-light");
        principalDiv.classList.add("text-dark");
        secundarioDiv.classList.remove("text-light");
        secundarioDiv.classList.add("text-dark");
    } else {
        principalDiv.classList.remove("text-dark");
        principalDiv.classList.add("text-light");
        secundarioDiv.classList.remove("text-dark");
        secundarioDiv.classList.add("text-light");
    }
    if (oscurancia > 0.5) {
        secundarioDiv.classList.remove("text-light");
        secundarioDiv.classList.add("text-dark");
    } else {
        secundarioDiv.classList.remove("text-dark");
        secundarioDiv.classList.add("text-light");
    }
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
//Face ejecutar funciones
loginUser();
loadData();