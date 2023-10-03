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
                localStorage.setItem("user", jsonLogin.user);
                localStorage.setItem("contrasena", jsonLogin.contrasena);
                window.location.href = base_url+"index.php/admin/addcard";
            } else {
                if (jsonLogin.user == "" || jsonLogin.contrasena == "") {
                    alert('Completa todos los datos');
                } else {
                    alert('Datos Incorrectos');
                }
            }
        },
        error: function (jhrx, estado, errorA) {
            console.log(errorA);
        }
    })
}