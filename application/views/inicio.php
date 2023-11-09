<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio - MiPlaza</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/header.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/inicio/index.css">
	<link rel="stylesheet" href="<?= base_url() ?>public/css/inicio/card1.css">
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
						<a class="nav-link" href="<?= base_url(); ?>index.php/bienvenido/ubicacion">Ubicación</a>
					</li>
				</ul>


			</ul>
		</nav>
	</header>
	<main style="display:block;">
		<div class="encabezado">
			<div id="carouselExampleSlidesOnly" class="carousel slide logo position-relative" data-bs-ride="carousel">
				<div class="carousel-inner main">
					<div class="carousel-item active">
						<img src="<?= base_url() ?>public/img/referencia.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>public/img/referencia1.jpg" class="d-block w-100" alt="...">

					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>public/img/referencia1.jpg" class="d-block w-100" alt="...">

					</div>
				</div>
				<img src="<?= base_url() ?>public/img/miplaza.png"
					class="img-fluid position-absolute top-50 start-50 translate-middle" alt="" id="logo">
			</div>
			<div class="descripcion text-center">
				<p class="d-inline-flex gap-1">
					<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
						aria-expanded="false" aria-controls="collapseExample">
						Lo que nos representa
					</button>
				</p>
				<div class="collapse" id="collapseExample">
					<div class="card card-body">
						Some placeholder content for the collapse component. This panel is hidden by default but
						revealed when the user activates the relevant trigger.


					</div>
				</div>
			</div>
		</div>

		<div class="carrusel">
			<h2>Declaración de Misión, Visión y Valores</h2>
			<div class="linea-valores">
			</div>
			<div id="carouselExampleAutoplaying" class="carousel slide MVV-conteiner" data-bs-ride="carousel">
				<div class="carousel-inner MVV-conteiner">
					<div class="carousel-item active">
						<div class="card1">
							<div class="rededor-nrj">
								<ul class="nav justify-content-center">
									<li class="nav-item">
										<div class="cabeza">Valores</div>
									</li>
								</ul>
								<div class="tabla-MVV nav justify-content-center">
									<div class="col-30 nav-item">
										<div class="icono-MVV position-relative">
											<div class="circulo1 position-absolute top-50 start-50 translate-middle"
												style="background:#C73636;">
												<div
													class="circulo2 position-absolute top-50 start-50 translate-middle">
													<div class="circulo3 position-relative top-50 start-50 translate-middle"
														style="background:#ff4f4f;">
														<img src="<?= base_url() ?>public/img/honesto_1.png" alt=""
															class="position-absolute top-50 start-50 translate-middle">
													</div>
												</div>
											</div>
										</div>
										<div class="parrafo" style="color: #9B0000;">Honestidad y Confianza
											<div class="parrafo-sub">qwertyuiopasdfghjklñxcvbnazaxwsxcfrvtbyb7yn8nim9
											</div>
										</div>

									</div>
									<div class="col-30 nav-item">
										<div class="icono-MVV position-relative">
											<div class="circulo1 position-absolute top-50 start-50 translate-middle"
												style="background: #CEA509;">
												<div
													class="circulo2 position-absolute top-50 start-50 translate-middle">
													<div class="circulo3 position-relative top-50 start-50 translate-middle"
														style="background: #FDCB0A;">
														<img src="<?= base_url() ?>public/img/respeto_1.png" alt=""
															class="position-absolute top-50 start-50 translate-middle">
													</div>
												</div>
											</div>
										</div>
										<div class="parrafo" style="color: #9B7B00;">Respeto y Servicio al cliente<div
												class="parrafo-sub">qwertyuiopasdfghjklñxcvbnazaxwsxcfrvtbyb7yn8nim9
											</div>
										</div>
									</div>
									<div class="col-30 nav-item">
										<div class="icono-MVV position-relative">
											<div class="circulo1 position-absolute top-50 start-50 translate-middle">
												<div
													class="circulo2 position-absolute top-50 start-50 translate-middle">
													<div
														class="circulo3 position-relative top-50 start-50 translate-middle">
														<img src="<?= base_url() ?>public/img/unido_1.png" alt=""
															style="margin:10px;">
													</div>
												</div>
											</div>
										</div>
										<div class="parrafo" style="color: #123500;">Compromiso y Colaboratividad<div
												class="parrafo-sub">qwertyuiopasdfghjklñxcvbnazaxwsxcfrvtbyb7yn8nim9
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="carousel-item">
						<div class="card1">
							<div class="rededor-nrj">
								<ul class="nav justify-content-center">
									<li class="nav-item">
										<div class="cabeza">Visión</div>
									</li>
								</ul>
								<div class="tabla-MVV nav justify-content-center">
									<div class="col-30 nav-item" style="width: 80%;">
										<div class="icono-MVV position-relative">
											<div class="circulo1 position-absolute top-50 start-50 translate-middle"
												style="background:#4FABFF;">
												<div
													class="circulo2 position-absolute top-50 start-50 translate-middle">
													<div class="circulo3 position-relative top-50 start-50 translate-middle"
														style="background:#4FABFF;">
														<img src="<?= base_url() ?>public/img/vision_1.png" alt=""
															class="position-absolute top-50 start-50 translate-middle">
													</div>
												</div>
											</div>
										</div>
										<div class="parrafo" style="color: #00519C;">Ser la mejor opcion de compra,
											inversión y trabajo; logrando un desarrollo y crecimiento en cada unidad de
											negocio.
										</div>

									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="carousel-item">
						<div class="card1">
							<div class="rededor-nrj">
								<ul class="nav justify-content-center">
									<li class="nav-item">
										<div class="cabeza">Misión</div>
									</li>
								</ul>
								<div class="tabla-MVV nav justify-content-center">
									<div class="col-30 nav-item" style="width: 80%;">
										<div class="icono-MVV position-relative">
											<div class="circulo1 position-absolute top-50 start-50 translate-middle"
												style="background:#F9906C;">
												<div
													class="circulo2 position-absolute top-50 start-50 translate-middle">
													<div class="circulo3 position-relative top-50 start-50 translate-middle"
														style="background:#F9906C;">
														<img src="<?= base_url() ?>public/img/mision_1.png" alt=""
															class="position-absolute top-50 start-50 translate-middle">
													</div>
												</div>
											</div>
										</div>
										<div class="parrafo" style="color: #C86F50;">Ser la satisfaccion de nuestros
											clientes, proveedores y empleados con honestidad, servicio y pasíon.
										</div>

									</div>

								</div>
							</div>

						</div>
					</div>
					<button class="carousel-control-prev d-flex align-items-start px-5" type="button" data-bs-target="#carouselExampleAutoplaying" style="top:25px;"
						data-bs-slide="prev">
						<div class="bg-btn position-relative">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
								class="bi bi-chevron-bar-right carousel-control-prev-icon position-absolute top-50 start-50 translate-middle"
								viewBox="0 0 16 16" aria-hidden="true">
								<path fill-rule="evenodd"
									d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
							</svg>
							<span class="visually-hidden">Previous</span>
						</div>
					</button>
					<button class="carousel-control-next d-flex align-items-start px-5" type="button" data-bs-target="#carouselExampleAutoplaying" style="top:25px;"
						data-bs-slide="next">
						<div class="bg-btn position-relative">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
								class="bi bi-chevron-bar-right carousel-control-next-icon position-absolute top-50 start-50 translate-middle"
								viewBox="0 0 16 16" aria-hidden="true">
								<path fill-rule="evenodd"
									d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
							</svg>
							<span class="visually-hidden">Next</span>
						</div>
					</button>

				</div>

			</div>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="<?= base_url(); ?>public/js/inicio.js"></script>

</body>

</html>