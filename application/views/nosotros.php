<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - MiPlaza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/header.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/nosotros/index.css">
    <link rel="icon" href="<?= base_url() ?>public/img/miplaza-logo.png" type="image/x-icon">

</head>

<body>
    <header>
        <nav class="top">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="https://www.facebook.com/profile.php?id=100053143824005">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="white"
                            class="bi bi-facebook nav-link" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul class="nav nav-underline">
                <img src="<?= base_url() ?>public/img/miplaza-logo.png" alt="" class="img-fluid" id="icon-nav">
                <ul class="navbar nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>index.php/bienvenido/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url(); ?>index.php/bienvenido">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>index.php/bienvenido/ubicacion">Ubicación</a>
                    </li>
                </ul>


            </ul>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">
                        <p>Gte. General</p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">
                        <p>Administrativo</p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">
                        <p>Tienda</p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">
                        <p>Almacen</p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-5">
                        <p>Cajero</p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-6">
                        <p>Carnaes Frias</p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-7">
                        <p>Verdulero</p>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                    class="scrollspy-example" tabindex="0">
                    <div class="conteiner" id="list-item-1">
                        <div class="aside1">
                            <div class="tittle position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2 position-absolute top-100 start-100 translate-middle">Gerente General</p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>

                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="conteiner" id="list-item-2">
                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item icon-link-hover" style=" --bs-icon-link-transform: translate3d(0,
                                        -.170rem, 0);">
                                        Control de asistencia
                                    </li>
                                    <li class="list-group-item icon-link-hover" style=" --bs-icon-link-transform: translate3d(0,
                                        -.170rem, 0);">
                                        Control de uniformes
                                    </li>
                                    <li class="list-group-item icon-link-hover" style=" --bs-icon-link-transform: translate3d(0,
                                        -.170rem, 0);">
                                        Gestión de inventario
                                    </li>
                                    <li class="list-group-item icon-link-hover" style=" --bs-icon-link-transform: translate3d(0,
                                        -.170rem, 0);">
                                        Gestión de finanzas
                                    </li>
                                    <li class="list-group-item icon-link-hover" style=" --bs-icon-link-transform: translate3d(0,
                                        -.170rem, 0);">
                                        Supervisión general
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="aside1">
                            <div class="tittle  dos position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2  position-absolute top-100 start-0 translate-middle">Gerente
                                    Administrativo
                                </p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>
                    </div>
                    <div class="conteiner" id="list-item-3">
                        <div class="aside1">
                            <div class="tittle position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2 position-absolute top-100 start-100 translate-middle">Gerente General</p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>

                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="conteiner" id="list-item-4">
                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>
                        <div class="aside1">
                            <div class="tittle  dos position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2  position-absolute top-100 start-0 translate-middle">Gerente
                                    Administrativo
                                </p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>
                    </div>
                    <div class="conteiner" id="list-item-5">
                        <div class="aside1">
                            <div class="tittle position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2 position-absolute top-100 start-100 translate-middle">Gerente General</p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>

                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="conteiner" id="list-item-6">
                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>
                        <div class="aside1">
                            <div class="tittle  dos position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2  position-absolute top-100 start-0 translate-middle">Gerente
                                    Administrativo
                                </p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>
                    </div>
                    <div class="conteiner" id="list-item-7">
                        <div class="aside1">
                            <div class="tittle position-relative">
                                <img src="" alt="" class="img-fluid">
                                <p class="h2 position-absolute top-100 start-100 translate-middle">Gerente General</p>
                            </div>
                            <div class="descripcion">
                                <p>Descripcion de actividades asdasaufbuvbruvbrhvsefijsafieabifwbeifbsweifbeiab</p>
                            </div>
                        </div>

                        <div class="aside2" id="card-container">
                            <div class="card-float" id="card-float">
                                <p class="h4">
                                    Actividades
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <footer>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="https://www.facebook.com/profile.php?id=100053143824005">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548"
                                        class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>index.php/admin"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="28" height="28" fill="#795548" class="bi bi-shield-lock-fill"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.facebook.com/profile.php?id=100053143824005">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548"
                                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="line"></div>
                        <p>© MiPlaza.com © 2023 - Todos los derechos reservados</p>
                    </footer>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
<script src="<?= base_url() ?>public/js/float-conteiner.js"></script>

</html>