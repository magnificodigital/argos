<?php get_header() ?>
<?php get_template_part('top-page') ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="page-empresa content-page">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-left">
				<img src="<?php bloginfo('template_url') ?>/img/pageempresa.jpg">
				<article>
					<?php the_content() ?>	
				</article>
				</div>
			<div class="col-md-6 col-right">

				<article>
					<?php the_field('coluna_direita') ?>
				</article>

			</div>

		</div>

		<article role="quem-somos">
			<h2 class="title">Quem Somos</h2>
			<p><?php the_field('quem_somos'); ?></p>
		</article>


	</div>
</section>
<?php endwhile; endif ?>

<?php get_footer() ?>