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
    <header class="p-0">
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
        <div class="row m-0">
            <div class="col-xl-2 col-lg-12 list-jods p-0">
                <div id="list-example" class="list-group shadow"></div>
            </div>
            <div class="col-xl-10 col-lg-12 p-0">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                    class="scrollspy-example overflow-y-auto" tabindex="0" id="list">
                </div>
            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/nosotros.js"></script>

</html>