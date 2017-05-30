<?php get_header() ?>

<section id="hometop">

	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide" data-swiper-autoplay="3000">
				<div class="parallax" style="background-image: url('<?php bloginfo('template_url') ?>/img/capa01.jpg');"></div>
			</div>
			<div class="swiper-slide" data-swiper-autoplay="3000">
				<div class="parallax" style="background-image: url('<?php bloginfo('template_url') ?>/img/capa02.jpg');"></div>
			</div>
			<div class="swiper-slide" data-swiper-autoplay="3000">
				<div class="parallax" style="background-image: url('<?php bloginfo('template_url') ?>/img/capa03.jpg');"></div>
			</div>
		</div>
	</div>

	<div class="logo-header-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6 logo">
					<img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="Argos Industrial">
				</div>
			</div>
		</div>
	</div>

</section>

<section id="empresa" class="reveal">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 foto" style="background: url('<?php bloginfo('template_url') ?>/img/empresa1.jpg') no-repeat;">
			</div>
			<div class="col-md-8 col-sm-6 content">
				<p><?php the_field('chamada_1') ?></p>
			</div>
		</div>
	</div>
</section>

<section id="servicos">
	<div class="container">
		<div class="row row1 reveal">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<a href="<?php bloginfo('url') ?>/servicos/" class="boxM pull-right">Serviços</a>
			</div>
			<div class="col-md-8 col-sm-6 col-xs-12">
				<div class="boxA">Profissionais treinados e altamente qualificados</div>
			</div>
		</div>
		<div class="row reveal">
			<div class="col-md-8 col-sm-12">
				<img src="<?php bloginfo('template_url') ?>/img/servicos1.jpg">
			</div>
		</div>
		<div class="row row2 reveal">
			
			<div class="col-md-6 col-sm-6">
				<div class="boxA pull-right">Equipamentos</div>
				<img src="<?php bloginfo('template_url') ?>/img/servicos2.jpg" alt="" class="pull-right" />
				<div class="clearfix"></div>
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="boxM">Investimento constante em equipamentos de ponta, para se manter sempre atualizada e competitiva.</div>
			</div>


		</div>
	</div>
</section>
<?php get_footer() ?>
