<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rosa aperlado</title>
	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- Custom css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- css Slider-->
	<link rel="stylesheet" href="css/lightslider.css">
</head>

<body class="Mesa_postres__body">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white py-4 ">
		<div class="container">
			<a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
				<img style="filter: invert(0.4) sepia(1) hue-rotate(20deg) saturate(1000%);" src="https://img.icons8.com/pastel-glyph/64/000000/surf-and-palm.png" />
				<span class="font-icono">Eventos Maravilla</span>
			</a>

			<div class="order-lg-2" style="margin: 15px;">
				<a href="#"><i class="fab fa-facebook" style="margin: 10px; color: black;"></i></a>
				<a href="#"><i class="fab fa-instagram" style="margin: 10px; color: black;"></i></a>
				<a href="#"><i class="fab fa-whatsapp" style="margin: 10px; color: black;"></i></a>
			</div>

			<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse order-lg-1" id="navMenu">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="index.php">Inicio</a>
					</li>
					<li class="nav-item dropdown px-2 py-2">
						<a class="nav-link dropdown-toggle text-uppercase text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Eventos
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="paquetes.php"><i class="fa-solid fa-umbrella-beach"></i> Paquetes</a></li>
							<li><a class="dropdown-item" href="agendar-evento.php"><i class="fa-solid fa-book"></i> Agendar evento</a></li>
							<li><a class="dropdown-item" href="calendario-reservas.php"><i class="fa-solid fa-calendar-days"></i> Calendario de reservas</a></li>
						</ul>
					</li>
					<li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="galeria.php">Galería fotográfica</a>
					</li>
					<li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="contactanos.php">Contáctanos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- FINAL Navbar -->

	<!-- MESA DE POSTRES -->

	<section id="MesaPostres" class="MesaPostres">
		<div class="imgMP"></div>
		<div class="contenedor_MP">
			<div class="titleMP">Ordena tu mesa de postres</div>
			<form class="form_MP" action="#">
				<div class="postre-detalles">
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Nombre completo</span>
						<input id="nombre" type="text" placeholder="Ingrese su nombre" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">WhatsApp</span>
						<input id="telefono" type="text" placeholder="Ingrese tu número celular" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Dirección del evento</span>
						<input id="direccion" type="text" placeholder="Ingrese dirección del evento" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Tipo de evento</span>
						<select id="tipo_evento">
							<option selected disabled value>- selecciona un evento -</option>
							<option>Boda</option>
							<option>Bautizo</option>
							<option>Quinceañera</option>
							<option>Primera comunión</option>
							<option>Cumpleaños</option>
						</select>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Fecha del evento</span>
						<input id="fecha_evento" type="date" placeholder="Ingrese su nombre" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Decoración de la mesa</span>
						<select id="decoracion_MP" name="decoracion_mesa">
							<option selected disabled value>- selecciona una decoración -</option>
							<option>Flores de papel</option>
							<option>Medio arco con flores</option>
							<option>Medio arco con globos</option>
						</select>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Color mobiliario</span>
						<select id="color_mobiliario" name="color_mobiliario">
							<option selected disabled value>- selecciona un color -</option>
							<option>Color blanco</option>
							<option>Color nogal</option>
						</select>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Cantidad de postres</span>
						<select id="cantidad_MP" name="cantidad_postres">
							<option selected disabled value>- selecciona cantidad -</option>
							<option>150</option>
							<option>210</option>
							<option>300</option>
							<option>450</option>
						</select>
					</div>
					<!-- FIN DE LOS INPUT BOX-->
				</div>
				<div class="btnMP">
					<input id="enviarMP" type="submit" name="" value="Enviar">
				</div>
			</form>
		</div>

	</section>
	<!-- FINAL MESA DE POSTRES -->

	<!-- Footer -->
	<footer class="bg-dark py-5">
		<div class="container">
			<div class="row text-white g-4">
				<div class="col-md-6 col-lg-3">
					<a class="text-uppercase text-decoration-none brand text-white" href="index.php">Eventos Maravilla</a>
					<p class="text-white text-muted mt-3">Los mejores eventos, en la mejor isla</p>
					<img style="filter: invert(0.4) sepia(1) hue-rotate(20deg) saturate(1000%);" src="https://img.icons8.com/pastel-glyph/100/000000/surf-and-palm.png" class="iconoFooter" />
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light">Links</h5>
					<ul class="list-unstyled">
						<li class="my-3">
							<a href="index.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Inicio
							</a>
						</li>
						<li class="my-3">
							<a href="paquetes.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Paquetes
							</a>
						</li>
						<li class="my-3">
							<a href="agendar-evento.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Agendar evento
							</a>
						</li>
						<li class="my-3">
							<a href="calendario-reservas.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Calendario de reservas
							</a>
						</li>
						<li class="my-3">
							<a href="galeria.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Galería fotográfica
							</a>
						</li>
						<li class="my-3">
							<a href="contactanos.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Contáctanos
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light mb-3">Encuéntranos</h5>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-map-marked-alt"></i>
						</span>
						<span class="fw-light">
							<a href="https://goo.gl/maps/WNzS6p7qwZBbmEHz8" target="_blank" class="fw-light" style="text-decoration: none;color: #666f77;">Yelapa, Jalisco, México</a>
						</span>
					</div>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-envelope"></i>
						</span>
						<span class="fw-light">
							<a href="mailto:eventosmaravilla@gmail.com" target="_blank" class="fw-light" style="text-decoration: none;color: #666f77;">eventosmaravilla@gmail.com</a>
						</span>
					</div>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-phone-alt"></i>
						</span>
						<span class="fw-light">
							<a href="tel:+1 (661) 522 2473" class="fw-light" style="text-decoration: none;color: #666f77;">+1 (661) 522-2473</a>
						</span>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light mb-3">Síguenos</h5>
					<div>
						<ul class="list-unstyled d-flex">
							<li>
								<a href="#" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send?phone=6615222473" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FINAL footer-->

	<!-- Jquery -->
	<script src="js/jquery-3.6.0.js"></script>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- custom js -->
	<script src="js/script.js"></script>
	<script src="js/script-MP.js"></script>
	<!-- slider categorias js -->
	<script src="js/lightslider.js"></script>

</body>

</html>