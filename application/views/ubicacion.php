<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubicación - MiPlaza</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/header.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/ubicacion/index.css">
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
		<div style="width: 100%;
	height: calc(100vh - 98px);
	position: relative;">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.5767338143348!2d-100.7554414303732!3d20.28755869882393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cc92a7f8e2a35%3A0xd13f587978adef70!2sC.%20Bravo%2032%2C%20Zona%20Centro%2C%2038700%20Tarimoro%2C%20Gto.!5e0!3m2!1ses!2smx!4v1695395055411!5m2!1ses!2smx"
				width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</main>
	<footer class="position-relative pt-5">
		<ul class="nav justify-content-center">
		</ul>
		<div class="line"></div>
		<p>© MiPlaza.com © 2023 - Todos los derechos reservados</p>
		<div class="position-absolute bottom-0 end-0 m-2"><a href="<?= base_url() ?>index.php/admin"><svg
					xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#795548"
					class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
					<path fill-rule="evenodd"
						d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
				</svg></a></div>
	</footer>
</body>

</html>