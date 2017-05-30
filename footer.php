
<footer id="site">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 reveal logo-footer">
				<img src="<?php bloginfo('template_url') ?>/img/logo2.svg">
			</div>
			<div class="col-md-7 col-sm-12 infos reveal">
				<p class="tel">+ 55 (11) 4544-0643 / 4544-0649</p>
				<p class="mail">comercial@argosindustrial.com.br</p>
				<p class="local">R. Lucia Mormito Biason 163 | Sertãozinho, Mauá –SP</p>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/366d431ec6.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
<script type src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript">
	var swiper = new Swiper('#hometop .swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		loop: true,
		autoplay: true,
		speed: 1500
	});	


	var swiper = new Swiper('.page-servicos .swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		loop: true,
		autoplay: true,
		speed: 500
	});	

</script>


<script type="text/javascript">
	window.sr = ScrollReveal({
		// 'bottom', 'left', 'top', 'right'
		origin: 'top',

		// Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
		distance: '0',

		// Time in milliseconds.
		duration: 1000,
		delay: 0,

		// Starting angles in degrees, will transition from these values to 0 in all axes.
		rotate: { x: 0, y: 0, z: 0 },

		// Starting opacity value, before transitioning to the computed opacity.
		opacity: 0,

		// Starting scale value, will transition from this value to 1
		scale: 1,

		// Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',

		// `<html>` is the default reveal container. You can pass either:
		// DOM Node, e.g. document.querySelector('.fooContainer')
		// Selector, e.g. '.fooContainer'
		container: window.document.documentElement,

		// true/false to control reveal animations on mobile.
		mobile: true,

		// true:  reveals occur every time elements become visible
		// false: reveals occur once as elements become visible
		reset: false,

		// 'always' — delay for all reveal animations
		// 'once'   — delay only the first time reveals occur
		// 'onload' - delay only for animations triggered by first load
		useDelay: 'once',

		// Change when an element is considered in the viewport. The default value
		// of 0.20 means 20% of an element must be visible for its reveal to occur.
		viewFactor: 0.2,

		// Pixel values that alter the container boundaries.
		// e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
		// --
		// Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
		viewOffset: { top: 50, right: 0, bottom: 50, left: 0 },

		// Callbacks that fire for each triggered element reveal, and reset.
		//beforeReveal: function (domEl) {},
		//beforeReset: function (domEl) {},

		// Callbacks that fire for each completed element reveal, and reset.
		//afterReveal: function (domEl) {},
		//afterReset: function (domEl) {}
	});
	sr.reveal('.reveal');
</script>

<script type="text/javascript">
	$('[data-fancybox]').fancybox({
		// Animation duration in ms
	speed : 330,

	// Enable infinite gallery navigation
	loop : true,

	// Should zoom animation change opacity, too
	// If opacity is 'auto', then fade-out if image and thumbnail have different aspect ratios
	opacity : 'auto',

	// Space around image, ignored if zoomed-in or viewport smaller than 800px
	margin : [44, 0],

	// Horizontal space between slides
	gutter : 30,

	// Should display toolbars
	infobar : true,
	buttons : true,

	// What buttons should appear in the toolbar
	slideShow  : true,
	fullScreen : true,
	thumbs     : true,
	closeBtn   : true,

	// Should apply small close button at top right corner of the content
	// If 'auto' - will be set for content having type 'html', 'inline' or 'ajax'
	smallBtn : 'auto',

	image : {

		// Wait for images to load before displaying
		// Requires predefined image dimensions
		// If 'auto' - will zoom in thumbnail if 'width' and 'height' attributes are found
		preload : "auto",

		// Protect an image from downloading by right-click
		protect : false

	},


	// Enable gestures (tap, zoom, pan and pinch)
	touch : true,

	// Enable keyboard navigation
	keyboard : true,

	// Try to focus on first focusable element after opening
	focus : true,

	// Close when clicked outside of the content
	closeClickOutside : true,


	});
</script>

<?php wp_footer() ?>


</body>
</html>