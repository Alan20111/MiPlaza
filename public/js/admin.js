const base_url = "http://localhost/Miplaza/";
var colorChange = false;
var imgChange = false;
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

    // Si todo está bien, envía los datos al servidor.
    sendData(formDatajson);
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
//Trabajar con imagenes
const fileInput = document.getElementById('formFile');
const imagePreview = document.getElementById('imagePreview');
const bgColorInput = document.getElementById('formColor');
const principalDiv = document.getElementById('principal-color');
const secundarioDiv = document.getElementById('secundario-color');
const formData = new FormData();

fileInput.addEventListener('change', function () {
    imgChange = true;
    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];

        if (file.type.startsWith('image/')) {
            const imageUrl = URL.createObjectURL(file);

            imagePreview.src = imageUrl;
        } else {
            alert('Por favor, selecciona un archivo de imagen válido.');
        }
    } else {
        imagePreview.src = '<?= base_url() ?>public/img/referencia.jpg';
    }
});


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