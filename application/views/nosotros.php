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
    <header class="p-0 sticky-top" id="navheader">
        <nav class="top">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="https://www.facebook.com/profile.php?id=100053143824005">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="white"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <nav >
            <ul class="nav nav-underline h-100">
                <img src="<?= base_url() ?>public/img/miplaza-logo.png" alt="" class="img-fluid" id="icon-nav">
                <ul class="navbar nav justify-content-center">
                    <li class="nav-item">
                        <a class="fs-5 nav-link" href="<?= base_url(); ?>index.php/bienvenido/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-5 nav-link" href="<?= base_url(); ?>index.php/bienvenido">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-5 nav-link" href="<?= base_url() ?>index.php/bienvenido/ubicacion">Ubicación</a>
                    </li>
                </ul>


            </ul>
        </nav>
    </header>
    <main>
        <div class="tittle" style="height:70vh; width: 100%;">
            <img src="<?= base_url() ?>public/img/referencia.jpg" alt=""
                class="img-fluid object-fit-cover  w-100 h-100">
        </div>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#70B34D"
                class="bi bi-chevron-double-up  position-absolute bottom-0 end-0 m-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
                <path fill-rule="evenodd"
                    d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
        </a>
        <nav class="navbar sticky-top overflow-x-auto overflow-y-hidden shadow p-0" style="height:98px; background: white;">
            <ul class="navbar flex-row flex-nowrap w-auto justify-content-center px-4" id="list-example" style="height:98px;">
            </ul>
        </nav>
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example  p-3 rounded-2" tabindex="0" id="list"></div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/nosotros.js"></script>

</html>