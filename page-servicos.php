<?php get_header() ?>

<?php get_template_part('top-page') ?>

<section class="page-servicos content-page">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="wrapper">
					<div class="service">
						<div class="swiper-container">
							<div class="swiper-wrapper">

							<?php
								$numitens = 4;
								$c = 1;
								while ($c <= $numitens) { 

									$link = get_bloginfo('template_url').'/img/galery/equipamentos0'.$c.'.jpg';
									$linkt = get_bloginfo('template_url').'/img/galery/thumb/equipamentos0'.$c.'.jpg';

									echo '<div class="swiper-slide" data-swiper-autoplay="3000">';
									echo '<a href="'.$link.'" data-fancybox="">';
									echo '<img src="'.$linkt.'" />';
									echo "</a>";
									echo '</div>';
									$c++;

								}
							 ?>

							
							</div>
							<div class="swiper-pagination"></div>
						</div>
						<article>
							<h2>Equipamentos</h2>
							<p>Equipamentos de última geração e profissionais altamente qualificados fazem da Argos uma das empresas mais conceituadas em seu segmento no Estado de São Paulo.</p>
						</article>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="wrapper special">
					<div class="service">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php
									$numitens = 6;
									$c = 1;
									while ($c <= $numitens) { 

										echo '<div class="swiper-slide" data-swiper-autoplay="3000">';
										echo '<a href="'.get_bloginfo('template_url').'/img/galery/servicos0'.$c.'.jpg" data-fancybox="">';
										echo '<img src="'.get_bloginfo('template_url').'/img/galery/thumb/servicos0'.$c.'.jpg" />';
										echo "</a>";
										echo '</div>';
										
										$c++;

									}
								 ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
						<article>
							<h2>Serviços</h2>
							<p>
								Corte a laser<br />
								Puncionadeira de chapas<br />
								Puncionadeira de barramentos<br />
								Dobra de chapas<br />
								Dobra de tubos<br />
								Solda mig e tig<br />
								Solda a ponto<br />
								Acabamento<br />
								Gravação por micropuncionamento<br />
								Usinagem<br />
								Pintura eletrostática<br />
								Montagem
							</p>
						</article>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="wrapper">
					<div class="service">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php
									$numitens = 8;
									$c = 1;
									while ($c <= $numitens) { 

										echo '<div class="swiper-slide" data-swiper-autoplay="3000">';
										echo '<a href="'.get_bloginfo('template_url').'/img/galery/produtos0'.$c.'.jpg" data-fancybox="">';
										echo '<img src="'.get_bloginfo('template_url').'/img/galery/thumb/produtos0'.$c.'.jpg" />';
										echo "</a>";
										echo '</div>';
										
										$c++;

									}
								 ?>
							</div>

			    			<div class="swiper-pagination"></div>

						</div>


						</div>
						<article>
							<h2>Produtos</h2>
							<p>A Argos fornece produtos e serviços diferenciados, desenvolvidos com matérias-primas de alta qualidade, equipamentos de última geração e com responsabilidade ambiental.</p>
						</article>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer() ?>