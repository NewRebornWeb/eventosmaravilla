<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eventos Maravilla | Eventos en Yelapa, México</title>
	<!-- fontawesome cdn -->
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://kit.fontawesome.com/e6a4971ebb.js" crossorigin="anonymous"></script>
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- Custom css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- css Slider-->
	<link rel="stylesheet" href="css/lightslider.css">
</head>

<body>
	<!--Botón subir -->
	<i class="ir-arriba fa-solid fa-angle-up"></i>
	<!--FINAL botón subir -->

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

	<section id="fotos-pantalla-completa" class="fotos-pantalla-completa">
		<div class="galeria-fotos-izq">
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria1.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria1.jpeg" alt="">
					</div>

				</div>
			</div>
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria2.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn2" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal2" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria2.jpeg" alt="">
					</div>

				</div>
			</div>
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria3.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn3" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal3" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria3.jpeg" alt="">
					</div>

				</div>
			</div>
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria4.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn4" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal4" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria4.jpeg" alt="">
					</div>

				</div>
			</div>
		</div>
		<div class="galeria-fotos-der">
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria5.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn5" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal5" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria5.jpeg" alt="">
					</div>

				</div>
			</div>
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria6.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn6" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal6" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria6.jpeg" alt="">
					</div>

				</div>
			</div>
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria7.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn7" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal7" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria7.jpeg" alt="">
					</div>

				</div>
			</div>
			<div class="contenedor-foto">
				<img class="foto" src="img/galeria8.jpeg" alt="">
				<div class="overlay-foto-galeria">
					<i id="myBtn8" class="fa-solid fa-up-right-and-down-left-from-center simbolo-expandir"></i>
				</div>
				<div id="myModal8" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<img class="img-modal" src="img/galeria8.jpeg" alt="">
					</div>

				</div>
			</div>
		</div>


	</section>

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
	<script src="js/irArriba.js"></script>
	<script src="js/modal.js"></script>
	<!-- slider categorias js -->
	<script src="js/lightslider.js"></script>
</body>

</html>