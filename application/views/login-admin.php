<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url() ?>public/img/miplaza-logo.png" type="image/x-icon">
    <title>Login - Miplaza</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/login-admin/index.css">

</head>

<body class="position-relative text-center">
    <div class="position-absolute top-50 start-50 translate-middle menu">
        <nav class="nav justify-content-center position-relative">
            <a href="<?= base_url(); ?>index.php/bienvenido"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="white"
                    class="bi bi-arrow-left position-absolute top-50 start-0 translate-middle-y" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></a>

            <li>Inicar Sesión</li>
        </nav>
        <form action="" method="post" class="conteiner">
            <label for="validationCustom05" class="form-label">Usuario:</label>
            <input type="text"
                class="form-control d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2"
                required id="user">
            <div class="invalid-feedback">
                Ingresa un usuario valido.
            </div>
            <label for="validationCustom05" class="form-label">Contraseña:</label>
            <input type="password"
                class="form-control d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2"
                required id="contrasena">
            <div class="invalid-feedback">
                Ingresa una contraseña valida.
            </div>
            <input type="button" value="Iniciar" class="btn btn-danger" onclick="loginUser();">
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>public/js/register.js"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>

</html>