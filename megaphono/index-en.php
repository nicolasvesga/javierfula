<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
	<div class="mainContainer">
		<div id="wave"></div>
		<main id="fullpage">
			<article class="section active" id="section0">
				<section class="container home">

					<div class="video--bg">
						<video id="my-video" class="video" loop="loop" muted="" autoplay loop>
							<source src="videos/megaphono_1.webm" type="video/webm" />}
							<source src="videos/megaphono_1.mp4" type="video/mp4" />
							<source src="videos/megaphono_1.ogv" type="video/ogg" />
						</video>
					</div>

					<div>
						<div class="home__logo animated fadeInDown">
							<h1>
								<span>Megaphono</span>
								<picture>
									<source media="(min-width: 768px)" srcset="img/mainLogo.png">
									<img src="img/mainLogoMovil.png" alt="Megaphono">
								</picture>
							</h1>
						</div>
						<div class="home__start animated fadeInUp">
							<a href="#bio" class="animatedHover animatedHover--inverso animatedHover--verde" href="#">Enter site</a>
						</div>
					</div>
				</section>
			</article>
			<article class="section" id="section1">
				<section class="container">
					<?php include 'includes/headerinterno.php'; ?>
					<div class="containerData containerMedia">
						<div class="containerData-lr">
							<div class="containerData__left">
								<!-- Contenido Izquierdo -->
								<div>
									<h2 class="title1 font__firstGreen">
										About the <br> project
									</h2>
									<p class="font-1">
										Musical project developed and produced by <b>JAVIER RICARDO FULA</b>, guitarist and composer, with a wide range of sonorities framed in classical and contemporary concepts of electric guitar.
									</p>
									<p class="font-1">
										A mixture of funk, soul, psychedelic rock, heavy rock, is perceptible in the musical compositions of the project, giving priority to a solid and defined sound.
									</p>
								</div>
							</div>
							<div class="containerData__right" style="background-image: url('img/gallery/bio.jpg');">
								<!-- Contenido Derecho -->
								<div class="containerMedia--iconMega">
									<img width="165px" src="img/media/iconMegaphone.svg" alt="iconMegaphone">
								</div>
							</div>
						</div>
						<?php include 'includes/footerinterno.php'; ?>
					</div>
				</section>
			</article>
			<article class="section sectionMedia" id="section2">
				<section class="container">
					<?php include 'includes/headerinterno.php'; ?>
					<div class="containerData containerMedia">
						<div class="containerData-lr">
							<div class="containerData__left">
								<!-- Contenido Izquierdo -->
								<div>
									<h2 class="title1 font__firstGreen">
										 Media
									</h2>
									<p class="font-1">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<p class="font-1 linkYoutube">
										Megaphono - Ácido
										<a youtubeID="0BhSrfNgLxs">Ver video</a>
									</p>
									<p class="font-1 linkYoutube">
										Megaphono - Cerca del abismo
										<a youtubeID="1La4QzGeaaQ">Ver video</a>
									</p>
								</div>
							</div>
							<div class="containerData__right">
								<div class="sectionMedia__carrusel owl-carousel">
									<div class="sectionMedia__carrusel--item" style="background-image: url(img/gallery/acido.jpg);">
										<!-- <img src="" alt="preview1"> -->
									</div>
									<div class="sectionMedia__carrusel--item" style="background-image: url(img/gallery/cerca_del_abismo.jpg);">
										<!-- <img src="" alt="preview2"> -->
									</div>
									<div class="sectionMedia__carrusel--item" style="background-image: url(img/gallery/hilos_invisibles.jpg);">
										<!-- <img src="" alt="preview2"> -->
                                    </div>
								</div>
								<!-- Contenido Derecho -->
								<div class="containerMedia--iconMega">
									<img width="165px" src="img/media/iconMegaphone.svg" alt="iconMegaphone">
								</div>
							</div>
						</div>
						<?php include 'includes/footerinterno.php'; ?>
					</div>
				</section>
			</article>
			<article class="section" id="section3">
				<section class="container">
					<?php include 'includes/headerinterno.php'; ?>
					<div class="containerData containerEvents">
						<div class="containerData-lr">
							<div class="containerData__left">
								<!-- Contenido Izquierdo -->
								<div>
									<h2 class="title1 font__firstGreen">
										Lastest <br> shows
									</h2>
									<p class="font-1">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dumm. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
									</p>
								</div>
							</div>
							<div class="containerData__right">
								<!-- Contenido Derecho -->
								<div class="lastestShows">
									<!-- Nuevo ROW -->
									<div class="lastestShows__row">
										<div class="lastestShows__row--left">
											<div class="lastestShows__row--left-container">
												<div class="lastestShows__row--left-hour">
													10:30 am
												</div>
												<div class="lastestShows__row--left-time">
													30 m
												</div>
											</div>
										</div>
										<div class="lastestShows__row--right">
											<div class="lastestShows__row--right-container">
												<div class="lastestShows__row--right-name">
													Lorem ipsum dolor sit amet
												</div>
												<div class="lastestShows__row--right-by">
													by Mega-Phono
												</div>
											</div>
										</div>
									</div>
									<!-- Nuevo ROW -->
									<div class="lastestShows__row">
										<div class="lastestShows__row--left">
											<div class="lastestShows__row--left-container">
												<div class="lastestShows__row--left-hour">
													12:00 m
												</div>
												<div class="lastestShows__row--left-time">
													30 m
												</div>
											</div>
										</div>
										<div class="lastestShows__row--right">
											<div class="lastestShows__row--right-container">
												<div class="lastestShows__row--right-name">
													Lorem ipsum dolor sit amet
												</div>
												<div class="lastestShows__row--right-by">
													by Mega-Phono
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php include 'includes/footerinterno.php'; ?>
					</div>
				</section>
			</article>
			<article class="section" id="section4">
				<section class="container">
					<?php include 'includes/headerinterno.php'; ?>
					<div class="containerData containerGallery">
						<div class="containerData-lr">
							<div class="containerData__left">
								<!-- Contenido Izquierdo -->
								<div>
									<h2 class="title1 font__firstGreen">
										Some <br> pictures
									</h2>
									<p class="font-1">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dumm. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
									</p>
								</div>
							</div>
							<div class="containerData__right">
								<!-- Contenido Derecho -->
								<div class="containerGallery__carrusel owl-carousel">
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-1.jpg" alt="preview1">
									</div>
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-2.jpg" alt="preview2">
									</div>
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-3.jpg" alt="preview3">
									</div>
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-4.jpg" alt="preview4">
									</div>
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-5.jpg" alt="preview5">
									</div>
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-6.jpg" alt="preview6">
									</div>
									<div class="containerGallery__carrusel--item">
										<img src="img/gallery/megaphono-7.jpg" alt="preview7">
									</div>
								</div>
							</div>
						</div>
						<?php include 'includes/footerinterno.php'; ?>
					</div>
				</section>
			</article>
			<article class="section" id="section5">
				<section class="container">
					<?php include 'includes/headerinterno.php'; ?>
					<div class="containerData containerMedia">
						<div class="containerData-lr">
							<div class="containerData__left">
								<!-- Contenido Izquierdo -->
								<div>
									<h2 class="title1 font__firstGreen">
										Clothes <br> and more
									</h2>
									<p class="font-1">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<p class="font-1">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
								</div>
							</div>
							<div class="containerData__right">
								<!-- Contenido Derecho -->
							</div>
						</div>
						<?php include 'includes/footerinterno.php'; ?>
					</div>
				</section>
			</article>
			<article class="section" id="section6">
				<section class="container">
					<?php include 'includes/headerinterno.php'; ?>
					<div class="containerData containerContact">
						<div class="containerData-lr">
							<div class="containerData__left">
								<!-- Contenido Izquierdo -->
								<div>
									<h2 class="title1 font__firstGreen">
										Booking <br> & info
									</h2>
									<p class="font-1">
										Javier R. Fula <br>
										Producer and management <br>
										(571) 316-465-7619 <br>
										Bogotá, Colombia. <br>
										<br>
										<b>info@megaphono.com</b>
									</p>
								</div>
							</div>
							<div class="containerData__right">
								<form id="contactForm" class="contactForm" action="//formspree.io/javierricardofulaliz@gmail.com" method="POST">
									<input type="hidden" name="_next" value="<?php echo "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" ?>" />
									<input type="hidden" name="_Asunto" value="Contacto MegaPhono"/>
									<div class="contactForm__row">
										<input name="name" required placeholder="Enter your name *" type="text" value="" required="required">
									</div>
									<div class="contactForm__row">
										<input name="_replyto" required placeholder="Enter your e-mail *" type="email" name="" value="" required="required">
									</div>
									<div class="contactForm__row">
										<textarea required placeholder="Write a message *" name="Mensaje" rows="5" required="required"></textarea>
									</div>
									<div class="contactForm__row ta-c">
										<button class="btn btn__enviar animatedHover animatedHover--verde" type="submit">
											Send
											<img src="img/icons/icon-send.png" alt="Enviar">
										</button>
									</div>
								</form>
							</div>
						</div>
						<?php include 'includes/footerinterno.php'; ?>
					</div>
				</section>
			</article>
		</main>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>
