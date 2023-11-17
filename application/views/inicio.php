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
	<header class="p-0 position-fixed">
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
						<a class="fs-5 nav-link m-0" href="<?= base_url(); ?>index.php/bienvenido/nosotros">Nosotros</a>
					</li>
					<li class="nav-item m-0">
						<a class="fs-5 nav-link m-0" href="<?= base_url(); ?>index.php/bienvenido">Inicio</a>
					</li>
				</ul>


			</ul>
		</nav>
	</header>
	<main style="margin-top: 98px;">
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
		<div class="main-elements d-flex flex-column align-items-center">
			<div class="declaracion bg-light rounded-3 mx-sm-5 my-5">
				<div class="">
					<div id="carouselExampleAutoplaying" class="carousel slide  position-relative card-main"
						data-bs-ride="carousel">
						<div class="carousel-inner w-100  p-5 pb-3">
							<div class=" carousel-item active  text-center border rounded-3 p-4">
								<div class="titulo-card h-25">
									<p class="display-4 fw-bolder m-0">Visión</p>
								</div>
								<div class="cuerpo-card h-75 d-flex flex-column align-items-center mb-3">
									<div class="rounded-circle ratio ratio-1x1 position-relative shadow my-3"
										style="width: 200px; background-color: #4FABFF;">
										<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
											style="width: 80%; height: 80%; background-color: white;">
											<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
												style="width: 95%; height: 95%; background-color: #4FABFF;">
												<svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%"
													fill="white"
													class="bi bi-graph-up-arrow position-absolute top-50 start-50 translate-middle"
													viewBox="0 0 16 16">
													<path fill-rule="evenodd"
														d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
												</svg>
											</div>
										</div>
									</div>
									<p class="h5" style="color:#00519C;">Ser la mejor opcion de compra, inversión y
										trabajo;
										logrando un desarrollo y crecimiento en cada unidad de negocio.
									</p>
								</div>
							</div>
							<div class=" carousel-item text-center border rounded-3 p-4">
								<div class="titulo-card h-25">
									<p class="display-4 fw-bolder m-0">Misión</p>
								</div>
								<div class="cuerpo-card h-75 d-flex flex-column align-items-center mb-3">
									<div class="rounded-circle ratio ratio-1x1 position-relative shadow my-3"
										style="width: 200px; background-color: #f9906C;">
										<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
											style="width: 80%; height: 80%; background-color: white;">
											<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
												style="width: 95%; height: 95%; background-color: #f9906C;">
												<svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%"
													fill="white"
													class="bi bi-pin-map-fill position-absolute top-50 start-50 translate-middle"
													viewBox="0 0 16 16">
													<path fill-rule="evenodd"
														d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
													<path fill-rule="evenodd"
														d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
												</svg>
											</div>
										</div>
									</div>
									<p class="h5" style="color:#C86F50;">Ser la satisfaccion de nuestros clientes,
										proveedores y empleados con honestidad, servicio y pasíon.
									</p>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
							data-bs-slide="prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="secondary"
								class="bi bi-chevron-left position-absolute top-0 start-0 m-2 my-3" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
							</svg>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
							data-bs-slide="next">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="secondary"
								class="bi bi-chevron-right position-absolute top-0 end-0 m-2 my-3" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
							</svg>
						</button>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<div class="row justify-content-center pb-5 px-md-0 px-5 card-main">
						<div class="titulo-card text-center">
							<p class="display-6 m-0 p-0">Valores</p>
						</div>
						<div class="carrusel-card col-md-3 text-center border rounded-3 p-4 mb-md-0 mb-5 me-md-5 me-0">
							<div class="cuerpo-card h-75 d-flex flex-column align-items-center mb-3">
								<div class="rounded-circle ratio ratio-1x1 position-relative shadow my-3 valores"
									style=" background-color: #FF4949;">
									<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
										style="width: 80%; height: 80%; background-color: white;">
										<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
											style="width: 95%; height: 95%; background-color: #FF4949;">
											<svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%"
												fill="white"
												class="bi bi-pin-map-fill position-absolute top-50 start-50 translate-middle"
												viewBox="0 0 16 16">
												<path
													d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
											</svg>
										</div>
									</div>
								</div>
								<p class="h5" style="color:#950000;">Honestidad y Confianza
								</p>
							</div>
						</div>
						<div class="carrusel-card col-md-3 text-center border rounded-3 p-4 mb-md-0 mb-5 ">
							<div class="cuerpo-card h-75 d-flex flex-column align-items-center mb-3">
								<div class="rounded-circle ratio ratio-1x1 position-relative shadow my-3 valores"
									style="background-color: #FFCF14;">
									<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
										style="width: 80%; height: 80%; background-color: white;">
										<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
											style="width: 95%; height: 95%; background-color: #FFCF14;">
											<svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%"
												fill="white"
												class="bi bi-pin-map-fill position-absolute top-50 start-50 translate-middle"
												viewBox="0 0 16 16">
												<path
													d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z" />
											</svg>
										</div>
									</div>
								</div>
								<p class="h5" style="color:#957700;">Respeto y Servicio
								</p>
							</div>
						</div>
						<div class="carrusel-card col-md-3 text-center border rounded-3 p-4 ms-md-5 ms-0">
							<div class="cuerpo-card h-75 d-flex flex-column align-items-center mb-3">
								<div class="rounded-circle ratio ratio-1x1 position-relative shadow my-3 valores"
									style="background-color: #77B04A;">
									<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
										style="width: 80%; height: 80%; background-color: white;">
										<div class="rounded-circle position-absolute top-50 start-50 translate-middle shadow"
											style="width: 95%; height: 95%; background-color: #77B04A;">
											<svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%"
												fill="white"
												class="bi bi-pin-map-fill position-absolute top-50 start-50 translate-middle"
												viewBox="0 0 16 16">
												<path fill-rule="evenodd"
													d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
											</svg>
										</div>
									</div>
								</div>
								<p class="h5" style="color: #47692c;">Compromiso y Colaboratividad
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="ubicacion">

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