<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		<?php bloginfo('name'); wp_title(); ?>
	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/main.css">

	<?php wp_head() ?>

</head>
<body <?php body_class(); ?>>

<nav id="site">
	<div class="container">
		<div class="menu-on">
			Menu <i class="fa fa-bars" aria-hidden="true"></i>
		</div>
		<ul>
			<li><a href="<?php bloginfo('url') ?>">Home</a></li>
			<li><a href="<?php bloginfo('url') ?>/empresa/">Empresa</a></li>
			<li><a href="<?php bloginfo('url') ?>/servicos/">Serviços</a></li>
			<li><a href="<?php bloginfo('url') ?>/sustentabilidade/">Sustentabilidade</a></li>
			<li><a href="<?php bloginfo('url') ?>/contato/">Contato</a></li>
		</ul>
	</div>
</nav>