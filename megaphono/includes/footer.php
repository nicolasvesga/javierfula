<?php

	<div onclick="closeModal()" class="modal--close"></div>
	<div class="modal__imagen-img">
		<img src="img/gallery/galleryPreview.jpg" alt="preview">
	</div>
	<div class="modal__imagen-pie">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</p>
	</div>
</article>

<article class="modal modal__pdf hidden animated fadeInDown">
	<div onclick="closeModal()" class="modal--close"></div>
		<!-- <embed class="modal__pdf--pdf" src="pdf/epk.pdf" width="100%" height="100%" /> -->
		<iframe class="modal__pdf--pdf" src="pdf/epk.pdf#zoom=100" width="100%" height="100%"></iframe>
</article>

<article class="modal modal__lyrics hidden animated fadeInDown">
	<div onclick="closeModal()" class="modal--close"></div>
	<div class="modal__lyrics_content">
		<div class="modal__lyrics-img">
			<img src="" alt="megaphono">
		</div>
		<div class="modal__lyrics-title">
			<h2></h2>
		</div>
		<div class="modal__lyrics-lyrics"></div>
	</div>
</article>

<article class="modal modal__youTube hidden animated fadeInDown">
	<div onclick="closeModal()" class="modal--close"></div>
	<div class="modal__youTube_content">
		<div id="player"></div>
	</div>
</article>

<div onclick="closeModal()" class="bgModal hidden animated fadeIn"></div>

<!-- scripts -->
<script src="libraries/particles/particles.js"></script>
<script src="libraries/particles/app.js"></script>

<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous">
</script>
<script src="libraries/fullPage.js-master/jquery.fullpage.min.js"></script>
<script src="libraries/OwlCarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="libraries/amplitude/amplitude.js"></script>
<script src="js/mainscript.js"></script>
