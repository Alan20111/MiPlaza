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
	<footer>
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a href="https://www.facebook.com/profile.php?id=100053143824005">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548" class="bi bi-facebook"
						viewBox="0 0 16 16">
						<path
							d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
					</svg>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url() ?>index.php/admin"><svg xmlns="http://www.w3.org/2000/svg" width="28"
						height="28" fill="#795548" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
						<path fill-rule="evenodd"
							d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
					</svg></a>
			</li>
			<li class="nav-item">
				<a href="https://www.facebook.com/profile.php?id=100053143824005">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#795548" class="bi bi-whatsapp"
						viewBox="0 0 16 16">
						<path
							d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
					</svg>
				</a>
			</li>
		</ul>
		<div class="line"></div>
		<p>© MiPlaza.com © 2023 - Todos los derechos reservados</p>
	</footer>
</body>

</html>