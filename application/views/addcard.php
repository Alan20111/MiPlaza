<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/addcard/index.css">
</head>

<body class="overflow-y-auto">
    <header class="shadow">
        <ul class="nav justify-content-center position-relative bg-danger p-2">
            <a href="<?= base_url() ?>index.php/bienvenido/"><img src="<?= base_url() ?>public/img/miplaza-logo.png"
                    alt="" class="img-fluid position-absolute top-50 start-0 translate-middle-y mx-2" id="icon-nav"
                    style="width:45px"></a>
            <li class="nav-item">
                <p class="fw-low fs-4 m-1 text-light">Administrador</p>
            </li>
        </ul>
        <ul class="nav justify-content-center position-relative bg-light">
            <a class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-danger position-absolute top-50 start-0 translate-middle-y mx-2"
                style="--bs-icon-link-transform: translate3d(-2.5px,0, 0);" href="<?= base_url() ?>index.php/Admin/"
                onclick="cleanstorage();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 14 14">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                <span class="d-none d-sm-block">
                    Cerrar sesión
                </span>

            </a>

            <li class="nav-item">
                <a href="" class="nav-link py-2 text-danger">Targetas</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link py-2 text-danger">Organigrama</a>
            </li>
        </ul>
    </header>
    <div class="conteiner m-md-4 p-md-4 m-sm-0 p-sm-4 w-auto h-auto bg-light bg-opacity-75 rounded shadow  text-light">
        <div class="row w-100 h-100 m-0">
            <div class="col-lg-6 col-sm-12 bg-danger shadow p-3 text-center rounded-1"
                style="min-height:calc(100vh - 150px);">
                <p class="fs-3 badge bg-light text-wrap text-danger">Formulario para agregar tarjetas de personal</p>
                <form class="row" id="formData">
                    <div class="col-md-6 col-sm-12 h-100">
                        <div class="mb-3">
                            <label for="formFile" class="form-label fw-medium mb-0">Imagen de personal:<img
                                    class="img-fluid w-100 h-100 rounded-top" for="formFile"
                                    src="<?= base_url() ?>public/img/imagenDefault.jpg" alt=""
                                    id="imagePreview"></label>

                            <input class="form-control focus-ring focus-ring-light rounded-0 rounded-bottom border"
                                type="file" id="formFile" name="formFile" onchange="previewImage(this)">
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="" class="form-label text-light fw-medium">Actividades del puesto de
                                trabajo:</label>
                            <!-- Campos de actividades laborales -->
                            <!-- Act1 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="formAct1">Act1:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="formAct1" name="formAct1" placeholder="">
                            </div>
                            <!-- Act2 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="formAct2">Act2:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="formAct2" name="formAct2" placeholder="">
                            </div>
                            <!-- Act3 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="formAct3">Act3:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="formAct3" name="formAct3" placeholder="">
                            </div>
                            <!-- Act4 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="formAct4">Act4:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="formAct4" name="formAct4" placeholder="">
                            </div>
                            <!-- Act5 -->
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="formAct5">Act5:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="formAct5" name="formAct5" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 h-100">
                        <!-- Título principal -->
                        <div class="mb-3">
                            <label for="formTittle" class="form-label fw-medium">Título principal:</label>
                            <input type="text"
                                class="form-control focus-ring focus-ring-light border border-0 rounded-1"
                                id="formTittle" name="formTittle" placeholder="">
                        </div>
                        <!-- Título en navegador -->
                        <div class="mb-4">
                            <label for="formTittle-nav" class="form-label fw-medium">Título en navegador:</label>
                            <input type="text"
                                class="form-control focus-ring focus-ring-light border border-0 rounded-1"
                                id="formTittle-nav" name="formTittle-nav" placeholder="">
                        </div>
                        <!-- Descripción del personal -->
                        <div class="mb-4">
                            <label for="formArea" class="form-label fw-medium">Descripción del personal:</label>
                            <textarea
                                class="form-control rounded-1 focus-ring focus-ring-light border border-0 rounded-1"
                                id="formArea" name="formArea" rows="10"></textarea>
                        </div>
                        <!-- Color de fondo -->
                        <div class="mb-4 row px-3">
                            <label for="formColor" class="form-label fw-medium">Color de fondo:</label>
                            <input type="color"
                                class="form-control form-control-color col-5 border border-0 rounded-0 rounded-start w-25 focus-ring focus-ring-light"
                                id="formColor" name="formColor" value="#dc3545" title="Choose your color">
                            <div class="bg-light col-6 w-75 rounded-end">
                                <div class="row h-100">
                                    <!-- Principal Color -->
                                    <div class="col-6 text-dark p-1 fw-medium" id="principal-color">Título</div>
                                    <!-- Secundario Color -->
                                    <div class="col-6 text-dark p-1 fw-medium" id="secundario-color">Fondo</div>
                                </div>
                            </div>
                        </div>
                        <!-- Botones -->
                        <div class="row text-center">
                            <!-- Botón Borrar -->
                            <button type="button" class="btn btn-outline-light col-5 m-auto fw-medium"
                                onclick="cleanInputs()">Borrar</button>
                            <!-- Botón Guardar -->
                            <button type="button" class="btn btn-outline-light col-5 m-auto fw-medium"
                                onclick="saveData()">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-sm-12  overflow-y-auto  rounded-1" id="contenedor"
                style="height:calc(100vh - 150px); ">
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/admin.js"></script>


</html>