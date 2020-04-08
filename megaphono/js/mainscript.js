$(document).ready(function() {
});

/*!
 * Brayan Camargo
 * https://brayansti.github.io
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (C) 2018 Brayan Camargo
 */

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


 window.onload = function() {
 	removeLoading();
 	videoBGPlay();
};

function removeLoading() {
	setTimeout(function(){
		$('.loading').remove();
	}, 500);
}

$(document).ready(function() {
	startfullPage();
	startCarrusel();
	hamburguerMenu();
	firstWord();
	modalesGaleria();
    modalesYoutube();
	audioStyle();
});

var ancho_vp = window.innerWidth;
var alto_vp = window.innerHeight;


function isMobile() {
	var retorno;
	if (ancho_vp <= 768) {
		// Movil
		retorno = true
		return retorno
	}
	else{
		// Desktop
		retorno = false
		return retorno
	}
}

function isTablet() {
	var retorno;
	if (ancho_vp <= 992) {
		// Movil
		retorno = true
		return retorno
	}
	else{
		// Desktop
		retorno = false
		return retorno
	}
}

function openModal(modalName) {
	var bgModal = $('.bgModal');
	var modal = $('.modal'+modalName);
	modal.removeClass('hidden');
	bgModal.removeClass('hidden');
}

function openModalLirycs() {
	var bgModal = $('.bgModal');
	var modal = $('.modal__lyrics');
	modal.removeClass('hidden');
	bgModal.removeClass('hidden');

	var dataSong = Amplitude.getActiveSongMetadata();
	var urlImagen = dataSong.cover_art_url;
	var urlLyrics = dataSong.lyrics_url;
	var textoLyrics = readTextFile(urlLyrics)[0];

	var tagImagen = $('.modal__lyrics-img img');
	var tagLyrics = $('.modal__lyrics-lyrics');
	var tagTitle = $('.modal__lyrics-title h2');

	tagImagen.attr({
		'src': urlImagen,
		'alt': dataSong.name
	});

	tagLyrics.html(textoLyrics);
	tagTitle.html(dataSong.name);
}

function closeModal() {
	var bgModal = $('.bgModal');
	var modal = $('.modal');
	modal.addClass('hidden');
	bgModal.addClass('hidden');
	player.stopVideo()
}

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		closeModal();
	}
});

function videoBGPlay() {
	var vid = document.getElementById("my-video");
	vid.autoplay = true;
	vid.load();
}


function startfullPage() {
	$('#fullpage').fullpage({
		anchors:[
			'intro',
			'bio',
            'media',
			'events',
			'gallery',
            'merch',
			'contact'
		],
		keyboardScrolling: true,
		normalScrollElements: isTablet() ? '.containerData, .bgModal, .modal, .containerData__left .font-1' : '.bgModal, .modal, .containerData__left .font-1',
		onLeave: function(index, nextIndex, direction){
			activeCurrentMenuHeader(nextIndex);
			videoBGPlay();
		}
	});
}

function activeCurrentMenuHeader(nextIndex) {
	var linksContainer = $('.mainHeader__nav');
	linksContainer.each(function(index, el) {
		var actual = $(this).find('ul li').eq(nextIndex-1).find('a');
		var hermanos = $(this).find('ul li').find('a');
		hermanos.removeClass('active');
		actual.addClass('active');
	});

	$('.fullPageMarkers div a').siblings().removeClass('active');
	$('.fullPageMarkers div a').eq(nextIndex-1).addClass('active');
	if (nextIndex == 1) {
		$('.fullPageMarkers').addClass('hidden');
	}
	else {
		setTimeout(function(){
			$('.fullPageMarkers').removeClass('hidden');
		}, 400);
	}
}


function startCarrusel() {
	$(".containerGallery__carrusel").owlCarousel({
		navText: ["<img src='img/icons/icon-prev.png'>","<img src='img/icons/icon-next.png'>"],
		responsive:{
			0:{
				items:1,
				nav:true,
				loop:true
			},
			767:{
				items:3,
				nav:true,
				loop:true,
				margin: 10,
			},
			991:{
				items:7,
				nav:false,
				loop:false,
				margin: 10
			}
		},
	});
	$(".sectionMedia__carrusel").owlCarousel({
		navText: ["<img src='img/icons/icon-prev.png'>","<img src='img/icons/icon-next.png'>"],
        items:1,
        nav:true,
        loop:true
	});
}

function hamburguerMenu() {
	$('.hamburger-menu').on('click', function() {
		toggleMenu();
	});

	$('.mainHeader__nav').on('click', function() {
		toggleMenu();
	});
}

function toggleMenu() {
	$('.bar').toggleClass('animate');
	$('.mainHeader__nav').toggleClass('mainHeader__nav-open');
}

function firstWord() {
	$(".font__firstGreen").html(function(){
		var text= $(this).text().trim().split(" ");
		var first = text.shift();
		return (text.length > 0 ? "<span>"+ first + "</span> " : first) + text.join(" ");
	});
}

function modalesGaleria() {
	var imagen = $('.containerGallery__carrusel--item img');
	imagen.on('click', function() {
		if (isMobile()) {
			return false;
		}
		var srcImagen = $(this).attr('src');
		var altImagen = $(this).attr('alt');
		var imagenModal = $('.modal__imagen .modal__imagen-img img');
		imagenModal.attr({
			'src': srcImagen,
			'alt': altImagen
		});
		openModal('.modal__imagen');
	});
}

function modalesYoutube() {
	var boton = $('.linkYoutube a');
    boton.on('click' , function () {
        openModal('.modal__youTube');
        var idToutube = $(this).attr('youtubeID');
        player.loadVideoById(idToutube);
        Amplitude.pause();
    })
}

function audioStyle() {
	$('.reproductor__player--controls-play').on('click', function() {
		$('.reproductor__player--controls-play').toggleClass('pause');
		$('.reproductor__songs--controls .no_events').removeClass('no_events');
		$('.reproductor__player--controls-info.no_events').removeClass('no_events');
		$('.reproductor__player--controls-bar img').toggleClass('hidden');
	});
}


Amplitude.init({
	"songs": [
		{
			"name": "Neblina Explosiva",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/neblina_explosiva.mp3",
			"cover_art_url": "audio/hilos_invisibles.jpg",
			"lyrics_url": "audio/neblina_explosiva.txt"
		},
        {
			"name": "Hilos Invisibles",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/hilos_invisibles.mp3",
			"cover_art_url": "audio/hilos_invisibles.jpg",
			"lyrics_url": "audio/hilos_invisibles.txt"
		},
        {
			"name": "Trampa de recuerdos",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/trampa_de_recuerdos.mp3",
			"cover_art_url": "audio/hilos_invisibles.jpg",
			"lyrics_url": "audio/trampa_de_recuerdos.txt"
		},
        {
			"name": "Ácido",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/acido.mp3",
			"cover_art_url": "audio/acido.jpg",
			"lyrics_url": "audio/acido.txt"
		},
        {
			"name": "Escombros de fantasias",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/escombros_de_fantasias.mp3",
			"cover_art_url": "audio/acido.jpg",
			"lyrics_url": "audio/escombros_de_fantasias.txt"
		},
        {
			"name": "Vértigo Profundo",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/vertigo_profundo.mp3",
			"cover_art_url": "audio/acido.jpg",
			"lyrics_url": "audio/vertigo_profundo.txt"
		},
        {
			"name": "Desgarra el silencio",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/desgarra_el_silencio.mp3",
			"cover_art_url": "audio/acido.jpg",
			"lyrics_url": "audio/desgarra_el_silencio.txt"
		},
		{
			"name": "Cerca del Abismo",
			"artist": "Mega-Phono",
			"album": "Mega-Phono",
			"url": "audio/cerca_del_abismo.mp3",
			"cover_art_url": "audio/cerca_del_abismo.jpg",
			"lyrics_url": "audio/cerca_del_abismo.txt"
		}
	],
	"autoplay": false,
	"volume": 100,
	"callbacks": {
		'time_update': function(){
			var porcentaje = Amplitude.getSongPlayedPercentage();
			actualizarPorcentajeCancion(porcentaje);
		},
		'after_play': function(){
			var dataCurrentSong = Amplitude.getActiveSongMetadata();
			actualizarCancionActual(dataCurrentSong);
		}
	}
});

function actualizarPorcentajeCancion(porcentaje) {
	var elementProgreso = $('.reproductor__player--progress');
	elementProgreso.css('left', porcentaje+'%');
}

function actualizarCancionActual(dataCurrentSong) {
	var songNombre = dataCurrentSong.name;
	var songArtista = dataCurrentSong.artist;
	$('.reproductor__songs--name').text(songArtista+' - '+songNombre);
}

function readTextFile(file) {
	var rawFile = new XMLHttpRequest();
	rawFile.open("GET", file, false);
	var resultado = [];
	rawFile.onreadystatechange = function () {
		if(rawFile.readyState === 4) {
			if(rawFile.status === 200 || rawFile.status == 0)
			{
				var allText = rawFile.responseText;
				resultado.push(allText)
			}
		}
	}
	rawFile.send(null);
	return resultado;
}


var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        // videoId: 'M7lc1UVf-VE',
        playerVars: { 
            'rel': 0
        },
        events: {
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    // player.setPlaybackRate(2);
    // event.target.playVideo();
}
