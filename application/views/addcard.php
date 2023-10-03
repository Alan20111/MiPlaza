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

<body>
    <ul class="nav justify-content-center position-relative bg-danger p-2">
        <img src="<?= base_url() ?>public/img/miplaza-logo.png" alt=""
            class="img-fluid position-absolute top-50 start-0 translate-middle-y mx-2" id="icon-nav" style="width:45px">
        <li class="nav-item">
            <p class="fw-low fs-4 m-1 text-light">Administrador</p>
        </li>
    </ul>
    <ul class="nav justify-content-center position-relative bg-light">
        <li class="nav-item">
            <a href="" class="nav-link py-2 text-danger">Targetas</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link py-2 text-danger">Organigrama</a>
        </li>
    </ul>
    <div class="conteiner m-4 p-4 w-auto bg-light bg-opacity-75 rounded shadow  text-light"
        style="height: calc(100vh - 140px);">
        <div class="w-100 h-100 row">
            <div class="col-6 bg-danger h-100 shadow rounded p-3">
                <p class="fs-3 badge bg-light text-wrap text-danger">Formulario para agregar targetas de personal</p>
                <div class="row">
                    <div class="col w-50 h-100">
                        <div class="mb-3">
                            <label for="formFile" class="form-label fw-medium">Imagen de personal:</label>
                            <img class="img-fluid w-100 h-100  rounded-top"
                                src="<?= base_url() ?>public/img/referencia.jpg" alt="">
                            <input class="form-control focus-ring focus-ring-light rounded-0 rounded-bottom border "
                                type="file" id="formFile">
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="" class="form-label text-light fw-medium">Actividades del puesto de
                                trabajo:</label>
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Act1:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Act2:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Act3:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Act4:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-1">
                                <span class="input-group-text" id="basic-addon1">Act5:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col w-50 h-100">
                        <div class="m-0">
                            <label for="tittle" class="form-label">Titulo principal:</label>
                            <input type="text" class="form-control focus-ring focus-ring-light border border-0 rounded-1"
                                id="tittle" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label for="tittle-nav" class="form-label">Titulo en navegador:</label>
                            <input type="text" class="form-control focus-ring focus-ring-light border border-0 rounded-1"
                                id="tittle-nav" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label for="descrip" class="form-label">Example textarea</label>
                            <textarea class="form-control rounded-1" id="descrip" rows="10"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6 h-100 bg-light">
                .col-6
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>

</html>