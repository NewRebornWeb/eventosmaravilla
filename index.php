<?php
include("controllers/suscribirse.php");
include("controllers/arrayTopVentas.php");
?>

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

	<!-- Headear-->
	<header id="header" class="vh-100">
		<div class="container h-100 d-flex align-items-center justify-content-left">
			<div class="text-center itemBanner">
				<h2 class="text-capitalize text-black">Eventos Maravilla</h2>
				<h1 class="text-none fw-bold text-black ">Los mejores eventos, en la mejor isla</h1>
				<a href="galeria.php" class="btn mt-3 text-uppercase">Ver Fotos</a>
			</div>
		</div>
	</header>
	<!-- FINAL Headear-->

	<!-- Sobre nosotros -->
	<section id="SobreNosotros" class="py-5">
		<div class="container">
			<div class="row gy-lg-5 align-items-center">
				<div class="col-lg-6 order-lg-1 text-center text-lg-start">
					<div class="title pt-3 pb-5">
						<h2 class="position-relative d-inline-block ms-4">Sobre nosotros</h2>
					</div>
					<p class="lead text-muted">Eventos Maravilla, la mejor opción para tus eventos.</p>
					<p>Somos una agencia de eventos especializada en la realización y organización de eventos importantes, como bodas, bautizos, baby showers y más en la hermosa isla de Yelepa, México.</p>
				</div>
				<div class="col-lg-6 order-lg-0">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/sobre-nosotros.jpeg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/sobre-nosotros2.jpeg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/sobre-nosotros3.jpeg" class="d-block w-100" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FINAL sobre nosotros-->

	<!-- TESTIMONIOS -->
	<section id="testimonios" class="py-5">
		<div class="container">
			<div class="title text-center">
				<h2 class="position-relative d-inline-block">Clientes satisfechos</h2>
			</div>
			<!-- Caja de testimonios -->
			<div class="testimonial-box-container mt-5">
				<!-- Caja 1 -->
				<div class="testimonial-box">
					<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Falexa.cosmet.1%2Fposts%2F789617301766727&show_text=true&width=500" width="100%" height="175px" style="overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				</div>
				<!-- Caja 2 -->
				<div class="testimonial-box">
					<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Falexandra.menmaya.7%2Fposts%2F2504256989844772&show_text=true&width=500" width="100%" height="175px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				</div>
				<!-- Caja 3 -->
				<div class="testimonial-box">
					<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjezaldaz%2Fposts%2F10156958214640129&show_text=true&width=500" width="100%" height="175px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				</div>
				<!-- Caja 4 -->
				<div class="testimonial-box">
					<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkatya.veronica%2Fposts%2F10218612626042199&show_text=true&width=500" width="100%" height="175px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- FINAL TESTIMONIOS -->

	<!-- OFERTAS -->
	<section id="ofertas" class="py-5">
		<div class="container">
			<div class="row d-flex align-items-center text-center">
				<div class="ofertas-content">
					<span class="text-white">Reserva tu futuro evento</span>
					<h2 class="mt-2 mb-4 text-white">Con depósito mínimo de $20,000 pesos</h2>
					<a href="agendar-evento.php" class="btn">Reservar ahora</a>
				</div>
			</div>
		</div>
	</section>
	<!-- FINAL OFERTAS -->


	<!-- Suscribete -->
	<section id="suscribete" class="py-5">
		<form action="#suscrito" id="suscrito" method="POST" class="container">
			<div class="d-flex flex-column align-items-center justify-content-center">
				<div class="title text-centerpt-3 pb-5">
					<h2 class="position-relative d-inline-block ms-4">Suscríbete</h2>
				</div>

				<p class="text-center text-muted">No te pierdas de información valiosa sobre descuentos, promociones y mucho más de parte de Eventos Maravilla. Dar clic al botón de abajo para comenzar a ser parte del mundo tropical.</p>
				<div class="input-group mb-3 mt-3">
					<input type="email" name="correo" class="form-control" placeholder="Ingresa tu correo..." required value="<?php $userEmail = "";
																																																										echo $userEmail ?>" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|.udg)+(\.)(com|gob|mx|net)" title="Escribe un correo electrónico válido. Ejemplo: xxxx@gmail.com">
					<button class="btn btn-primary" name="suscribir" type="submit">Comenzar</button>
				</div>
			</div>
			<?php
			$userEmail = "";
			if (isset($_POST['suscribir'])) {
				$userEmail = $_POST['correo'];
				if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
					$subject = "Suscripción Realizada!";
					$message = "Hola $userEmail, gracias por suscribirte!. Al suscribirte tendrás cada semana notificaciones sobre noticias, novedades, boletín informativo y más. ¡Esperamos que disfrutes de nuestros servicios!. Saludos.";
					$sender = "De: Equipo Rosa Aperlado - lfernandomc16@gmail.com";

					if (mail($userEmail, $subject, $message, $sender)) {
			?>
						<?php
						if ($contador == 0) {
						?><div class="alert alert-success" role="alert">
								<strong><?php if ($contador == 0) {
													print $SUS;
												} ?></strong>
							</div>
						<?php
						} else {
						?><div class="alert alert-danger" role="alert">
								<strong><?php print $YASUS; ?></strong>
							</div>
						<?php
						}
						$userEmail = "";
					} else {
						?>
						<div class="alert alert-primary" role="alert">
							<strong>¡Correo electrónico no Identificado!</strong>
						</div>
					<?php
					}
				} else {
					?>
					<div class="alert alert-danger" role="alert">
						<strong>¡Email Inválido: <?php print $userEmail ?>!</strong>
					</div>
			<?php
				}
			}
			?>
		</form>
	</section>
	<!-- FINAL suscribete -->

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
	<script src="js/irArriba.js"></script>
	<script src="js/script.js"></script>
	<!-- slider categorias js -->
	<script src="js/lightslider.js"></script>
</body>

</html>