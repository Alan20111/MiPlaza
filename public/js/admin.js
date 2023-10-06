const base_url = "http://localhost/Miplaza/";
loginUser();
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
                window.location.href = base_url + "index.php/bienvenido/";
            }else{
                console.log(datos);
            }
        },
        error: function (jhrx, estado, errorA) {
            console.log(errorA);
        }
    })
}
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX//
// Obtén una referencia al elemento input y al elemento img de vista previa
const fileInput = document.getElementById('formFile');
const imagePreview = document.getElementById('imagePreview');
const bgColorInput = document.getElementById('bg-color');
const principalDiv = document.getElementById('principal-color');
const secundarioDiv = document.getElementById('secundario-color');

// Agrega un evento 'change' al input para detectar cuando se selecciona un archivo
fileInput.addEventListener('change', function () {
    // Verifica si se seleccionó un archivo
    if (fileInput.files.length > 0) {
        // Obtén el primer archivo seleccionado
        const file = fileInput.files[0];

        // Verifica si el archivo es una imagen (puedes agregar más validaciones aquí)
        if (file.type.startsWith('image/')) {
            // Crea un objeto URL para mostrar la imagen
            const imageUrl = URL.createObjectURL(file);

            // Asigna la URL de la imagen al src del elemento img de vista previa
            imagePreview.src = imageUrl;
        } else {
            alert('Por favor, selecciona un archivo de imagen válido.');
        }
    } else {
        // Restaura la imagen de referencia si no se seleccionó ningún archivo
        imagePreview.src = '<?= base_url() ?>public/img/referencia.jpg';
    }
});
// Agrega un evento 'input' al input de color
bgColorInput.addEventListener('input', function () {
    // Obtiene el valor del color seleccionado
    const selectedColor = bgColorInput.value;
    const colordegrade = (reducirTono(selectedColor, 50));
    // Aplica el color de fondo al div "Principal"
    principalDiv.style.backgroundColor = selectedColor;
    secundarioDiv.style.background = colordegrade;

    // Calcula el color del texto en función del color de fondo
    determinarColorTexto(selectedColor, colordegrade);

    // Aplica el color de texto al div "Principal"
    principalDiv.style.color = colorTexto;
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
        // Si el fondo es claro, el texto será negro
        principalDiv.classList.remove("text-light");
        principalDiv.classList.add("text-dark");
        secundarioDiv.classList.remove("text-light");
        secundarioDiv.classList.add("text-dark");
    } else {
        // Si el fondo es oscuro, el texto será blanco
        principalDiv.classList.remove("text-dark");
        principalDiv.classList.add("text-light");
        secundarioDiv.classList.remove("text-dark");
        secundarioDiv.classList.add("text-light");
    }
    if (oscurancia > 0.5) {
        // Si el fondo es claro, el texto será negro
        secundarioDiv.classList.remove("text-light");
        secundarioDiv.classList.add("text-dark");
    } else {
        // Si el fondo es oscuro, el texto será blanco
        secundarioDiv.classList.remove("text-dark");
        secundarioDiv.classList.add("text-light");
    }
}
function reducirTono(colorHex, factor) {
    // Obtén los valores RGB del color hexadecimal
    const r = parseInt(colorHex.slice(1, 3), 16);
    const g = parseInt(colorHex.slice(3, 5), 16);
    const b = parseInt(colorHex.slice(5, 7), 16);

    // Reduce el tono de cada componente RGB
    const nuevoR = Math.max(0, r - factor);
    const nuevoG = Math.max(0, g - factor);
    const nuevoB = Math.max(0, b - factor);

    // Convierte los nuevos valores RGB en un color hexadecimal
    const nuevoColorHex = `#${nuevoR.toString(16).padStart(2, '0')}${nuevoG.toString(16).padStart(2, '0')}${nuevoB.toString(16).padStart(2, '0')}`;

    return nuevoColorHex;
}