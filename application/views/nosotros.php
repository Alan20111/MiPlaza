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
        <nav>
            <ul class="nav nav-underline h-100">
                <img src="<?= base_url() ?>public/img/miplaza-logo.png" alt="" class="img-fluid" id="icon-nav">
                <ul class="navbar nav justify-content-center">
                    <li class="nav-item m-0">
                        <a class="fs-5 nav-link" href="<?= base_url(); ?>index.php/bienvenido/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item m-0">
                        <a class="fs-5 nav-link" href="<?= base_url(); ?>index.php/bienvenido">Inicio</a>
                    </li>
                </ul>


            </ul>
        </nav>
    </header>
    <main>
        <div class="tittle backtittle position-relative text-light" style="height:70vh; width: 100%;">
            <img src="<?= base_url() ?>public/img/nosotros.jpg" alt=""
                class="img-fluid object-fit-cover  w-100 h-100 img-post">

            <div
                class="px-3 block-text text-center  position-absolute top-50 start-50 translate-middle rounded-3">
                <p class="display-1 mb-1">Nosotros
                </p>
                <div class="line w-75 bg-light" style="height:3px;"></div>

            </div>
            <div class="fondo position-absolute bottom-0 start-50 translate-middle-x w-100 d-flex justify-content-center text-center p-3"
                style="background: rgba(255, 255, 255, 0.253)">
                <p class="lorem  m-0 w-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis repudiandae
                    debitis
                    optio eligendi distinctio voluptatum excepturi quis sapiente asperiores molestiae quasi deleniti est
                    fuga perferendis, consequuntur esse mollitia. Perferendis, velit necessitatibus praesentium fuga
                    sapiente odit consequuntur nobis quibusdam atque quae maxime expedita excepturi aut enim accusantium
                    delectus, id, quia error repellat? Tempore doloribus voluptate dolor tempora earum sequi? Esse,
                    necessitatibus nesciunt. Non, ipsum qui quam asperiores modi nemo autem saepe unde adipisci. Hic,
                    eum commodi.
                </p>
            </div>

        </div>
        <nav class="navbar sticky-top overflow-x-auto overflow-y-hidden shadow p-0 justify-content-center"
            style="height:98px; background: white;" id="list-jods">
            <ul class="navbar flex-row flex-nowrap w-100  px-5 mx-5" id="list-example" style="height:98px;">
            </ul>
        </nav>
        <a href="<?= base_url(); ?>index.php/bienvenido/nosotros" class="sticky-top" style="top:40px">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white"
                class="bi bi-arrow-up m-2 p-1 rounded-circle" style="background: #70B34D;" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
            </svg>
        </a>

        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example  p-3 d-flex flex-column align-items-center"
            tabindex="0" id="list"></div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>public/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/nosotros.js"></script>

</html>