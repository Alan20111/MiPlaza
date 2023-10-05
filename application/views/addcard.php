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
            <img src="<?= base_url() ?>public/img/miplaza-logo.png" alt=""
                class="img-fluid position-absolute top-50 start-0 translate-middle-y mx-2" id="icon-nav"
                style="width:45px">
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
    </header>
    <div class="conteiner m-md-4 p-md-4 m-sm-0 p-sm-4 w-auto h-auto bg-light bg-opacity-75 rounded shadow  text-light">
        <div class="row w-100 h-100 m-0">
            <div class="col-lg-6 col-sm-12 bg-danger h-100 shadow p-3 text-center  rounded-1">
                <p class="fs-3 badge bg-light text-wrap text-danger">Formulario para agregar targetas de personal</p>
                <div class="row">
                    <div class="col-md-6 col-sm-12  h-100">
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
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">Act1:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">Act2:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">Act3:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">Act4:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">Act5:</span>
                                <input type="text"
                                    class="form-control focus-ring focus-ring-light rounded-0 border border-1 rounded-end"
                                    id="floatingInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 h-100">
                        <div class="m-0">
                            <label for="tittle" class="form-label fw-medium">Titulo principal:</label>
                            <input type="text"
                                class="form-control focus-ring focus-ring-light border border-0 rounded-1" id="tittle"
                                placeholder="">
                        </div>
                        <div class="mb-4">
                            <label for="tittle-nav" class="form-label fw-medium">Titulo en navegador:</label>
                            <input type="text"
                                class="form-control focus-ring focus-ring-light border border-0 rounded-1"
                                id="tittle-nav" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label for="descrip" class="form-label fw-medium">Example textarea</label>
                            <textarea
                                class="form-control rounded-1 focus-ring focus-ring-light border border-0 rounded-1"
                                id="descrip" rows="10"></textarea>
                        </div>
                        <div class="mb-4 row px-3">
                            <label for="exampleColorInput" class="form-label fw-medium">Color de fondo:</label>
                            <input type="color"
                                class="form-control form-control-color col-5 border border-0 rounded-0 rounded-start w-25 focus-ring focus-ring-light"
                                id="exampleColorInput" value="#dc3545" title="Choose your color">
                            <div class="bg-light col-6 w-75 rounded-end">
                                <div class="row">
                                    <div class="col-6 text-dark p-1 fw-medium">Principal</div>
                                    <div class="col-6 text-dark p-1 fw-medium">Secudario</div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <button type="button" class="btn btn-outline-light col-5 m-auto fw-medium">Borrar</button>
                            <button type="button" class="btn btn-outline-light col-5 m-auto fw-medium">Guardar</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12 h-100 py-5 py-lg-0 px-sm-5 px-lg-4 overflow-y-auto overflow-x-hidden">
                <div class="row w-auto h-auto">
                    <div class="col-md-6 col-sm-12 p-0 z-2 img-list">
                        <img src="<?= base_url() ?>public/img/referencia.jpg"
                            class="w-100 h-100 img-fluid object-fit-cover rounded-start-pill shadow" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 text-center bg-danger shadow  z-2">
                        <p class="fs-5 badge bg-light text-wrap text-danger rounded-1 mt-3 mb-0 shadow z-1">Formulario
                            para agregar targetas
                            de
                            personal
                        </p>
                        <p class="fs-6 fw-normal badge text-light text-wrap text-danger rounded-0 m-0 w-10 text-start"
                            >
                            Descripcion larga
                            Xxxxxx xxxxx
                            xxxxxxxxxxx xxxxx xxxxx x xxx xxxxxxxxx xxxxxxx xxxxx xxxxxxxxx xxxxxxxxxx xxxxxxxx xxx
                            xxxxxxxxxx
                        </p>
                    </div>
                    <div class="d-flex align-items-end flex-column w-100 p-0">
                        <div class="conteiner w-75 p-0">
                            <button class="btn btn-outline-danger w-100 px-0 me-2 rounded-0" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">
                                Mas. . .
                            </button>
                            <div class="collapse text-light bg-danger p-0 " id="collapseExample"
                                data-bs-target="id">
                                <div class="row  card-body" id="id">
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush  bg-light text-danger">
                                            <p class="my-0 mx-2">Actividades:</p>
                                            <li class="list-group-item bg-danger text-light">An item</li>
                                            <li class="list-group-item bg-danger text-light">A second item</li>
                                            <li class="list-group-item bg-danger text-light">A third item</li>
                                            <li class="list-group-item bg-danger text-light">A fourth item</li>
                                            <li class="list-group-item bg-danger text-light">And a fifth one</li>
                                        </ul>
                                    </div>
                                    <div class="col-6 position-relative">
                                        <ul class="list-group list-group-flush  bg-light text-danger">
                                            <p class="my-0 mx-2">Titulo de navegador:</p>
                                            <li class="list-group-item bg-danger text-light">Titulo cortoo</li>
                                        </ul>
                                        <button type="button"
                                            class="btn btn-outline-light m-auto fw-medium position-absolute bottom-0 start-50 translate-middle w-75">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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