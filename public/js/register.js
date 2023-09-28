const base_url = "http://localhost/Miplaza/";

function loginUser() {
    var user = $("#user").val();
    var contrasena = $("#contrasena").val();

    var jsonLogin = {
        user: user,
        contrasena: contrasena
    }
    console.log(jsonLogin)
    checkLogin(jsonLogin);
}

function checkLogin(jsonLogin) {
    $.ajax({
        url: base_url + "index.php/Admin/login",
        dataType: "json",
        type: "post",
        data: jsonLogin,
        success: function (datos, estado, jhrx) {
            console.log(datos);

            if (datos.status == "true") {
                alert = "todos salio bien"
                // window.location.href = base_url + "index.php/admin/tarjetas";
            } else {
                alert('Datos Incorrectos');
            }

        },
        error: function (jhrx, estado, errorA) {
            console.log(errorA);
        }
    })
}