<?php get_header() ?>

<?php get_template_part('top-page') ?>

<section class="page-sustentabilidade content-page">
	<div class="container">
		<article>
			<div class="row">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-md-7 wrap-text">
						<h2><?php the_title() ?></h2>
						<p>A Argos Industrial é comprometida com o desenvolvimento sustentável. Por isso, investe em sistemas de tratamento de efluentes do processo de pintura e na reciclagem das matérias-primas. </p>
						<p>Além de contar com um programa de redução do consumo de energia elétrica, desenvolvido a partir de estudos de consumo; investir em maquinários mais eficientes e em novas tecnologias com melhor rendimento e menor impacto ambiental.</p>
					</div>

					<div class="col-md-5 featured-img">
						<img src="<?php bloginfo('template_url') ?>/img/sustentabilidade.png">
					</div>

					<div class="clearfix"></div>


					<div class="politica">
						<h2>Política em relação aos minerais de conflito</h2>
						<?php the_field('politica') ?>
					</div>

				<?php endwhile; endif; ?>
			</div>
		</article>
	</div>
</section>

<?php get_footer() ?>