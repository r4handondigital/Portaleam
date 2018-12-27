 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>

        <section class="hiper-banner">
        	<div class="container">
        		<div class="row">
        			<div class="anima-banner owl-carousel owl-theme">
						<?php query_posts(array( 'post_type' => 'superbanner','showposts' => '10', 'orderby' => 'rand' )); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					        	<div class="item">
									<a href="<?php the_field('link_do_banner'); ?>" target="_blank"><img src="<?php the_field('imagem_do_banner'); ?>"></a>
					        	</div>
							<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
			        </div>
		        </div>
	        </div>
        </section>
        
        <section class="chamada-principal">
        	<div class="container">
				<div class="row">
					<div class="col s12">

					<?php query_posts(array( 'post_type' => 'post','showposts' => '1', 'cat' => '6' )); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<a class="lkhover" href="<?php the_permalink(); ?>">
							<h1 class="titulos-noticias">
								<span><?php the_field('chapeu'); ?> | <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
								<?php echo strip_tags(get_the_title()); ?>
							</h1>
							<p class="chamada"><? $content = get_the_excerpt();
	                                echo substr($content, 0, 150);
	                                ?>...</p>
						</a>

						<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
					</div>	
				</div>
        	</div>
        </section>
        
		<section class="noticia-destaque">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l8">
						<div class="destaque-principal owl-carousel owl-theme">

						<?php query_posts(array( 'post_type' => 'post','showposts' => '5', 'cat' => '2' )); ?>
						
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						
							<div class="chamadas-principais">
	                            <a href="<?php the_permalink(); ?>">
	                                <img src="<?php the_field('imagens_para_capa'); ?>" class="responsive-img " />                                
	                                <div class="bloco-azul">
	                                    <h3>
	                                        <span><?php the_field('chapeu'); ?> | <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
	                                       <?php echo strip_tags(get_the_title()); ?></h3>
	                                   
	                                </div><!--.bloco-azul-->
	                            </a>
	                        </div>
						
						<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
	                       
						</div>
					</div>

					<div class="col s12 m12 l4 hide-on-med-and-down">
						<div class="row">
							<div class="col s12">
							<?php query_posts(array( 'post_type' => 'post','showposts' => '1', 'cat' => '3' )); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<div class="chamadas-principais">
	                            <a href="<?php the_permalink(); ?>">
	                                <img src="<?php the_field('imagem_secundaria'); ?>" alt="" class="responsive-img destaque-principal-img" />                                <div class="bloco-azul">
	                                    <h3 class="lateralch">
	                                        <span><?php the_field('chapeu'); ?> | <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
	                                       <?php echo strip_tags(get_the_title()); ?></h3>
	                                   
	                                </div><!--.bloco-azul-->
	                            </a>
	                        </div>
	                        <?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>

							</div>
							
					</div>
				</div>
			</div>
		</section>

		<section class="sessao-noticias">
			<div class="container">
				<div class="row">

				<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '-4,-5,-6,-2,-3' )); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="col s12 m6 l3">
						<a href="<?php the_permalink(); ?>" class="lkhover">
							<div class="img-desk">
										<img src="<?php the_field('imagens_para_capa'); ?>" alt="" class="responsive-img " />
									</div>
							<h3 class="titulos-noticias">
								<span><?php the_field('chapeu'); ?> | <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
								<?php echo strip_tags(get_the_title()); ?>
							</h3>
						
						<p class="center mini-mais"><button href="<?php the_permalink(); ?>" class="btn blue darken-4">CONTINUE LENDO</button></p>
						</a>
					</div>
				<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>

				</div>

				<div class="container">
					<div class="row">
						<div class="col s12">
							<p class="center ver-mais"><a href="<?php bloginfo('url'); ?>/nav/noticias" class="waves-effect waves-light btn-large">MAIS NOTÍCIAS</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="hiper-banner">
        	<div class="container">
        		<div class="row">
		        	<div class="col s12">
						<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=noticias&random=1&limit=1' ); ?>
		        	</div>
		        </div>
		       
	        </div>
        </section>

           

        <section class="sessao-entrevistas">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h2 class="center"> MATERIAS & ENTREVISTAS</h2>
					</div>
				</div>
				 <div class="row">
					<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '4' )); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="col s12 m6 l3">
								<a href="<?php the_permalink(); ?>" class="lkhover">
									<div class="img-desk">
										<img src="<?php the_field('imagens_para_capa'); ?>" alt="" class="responsive-img " />
									</div>
									<h3 class="titulos-noticias">
									
										<?php echo strip_tags(get_the_title()); ?>
									</h3>
								
								<p class="center mini-mais"><button href="<?php the_permalink(); ?>" class="btn blue darken-4">Veja mais vídeos</button></p>
								</a>
							</div>
						<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
						
					</div>
		        </div><!--row-->
		        <div class="row ">
						<div class="col s12">
							<p class="center ver-mais"><a href="<?php bloginfo('url'); ?>/nav/materias-entrevistas" class="waves-effect waves-light btn-large">MAIS VÍDEOS</a></p>
						</div>
					</div>
        	</div>
        </section>

 <section class="hiper-banner">
        	<div class="container">
        		<div class="row">
		        	<div class="col s12">
						<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=entrevistas&random=1&limit=1' ); ?>
		        	</div>
		        </div>
		       
	        </div>
        </section>


         <section class="sessao-eventos">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h2 class="center">FOTOS & EVENTOS</h2>
					</div>
				</div>
				 <div class="row">
					<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '5' )); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="col s12 m6 l3">
								<a href="<?php the_permalink(); ?>" class="lkhover">
									<div class="img-desk">
										<img src="<?php the_field('imagens_para_capa'); ?>" alt="" class="responsive-img " />
									</div>
									<h3 class="titulos-noticias">
									
										<?php echo strip_tags(get_the_title()); ?>
									</h3>
								
								<p class="center mini-mais"><button href="<?php the_permalink(); ?>" class="btn blue darken-4">VEJA MAIS FOTOS</button></p>
								</a>
							</div>
						<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
		        </div><!--row-->
		        <div class="row ">
						<div class="col s12">
							<p class="center ver-mais"><a href="<?php bloginfo('url'); ?>/nav/eventos" class="waves-effect waves-light btn-large">MAIS FOTOS</a></p>
						</div>
					</div>
        	</div>
        </section>

   <section class="hiper-banner">
        	<div class="container">
        		<div class="row">
		        	<div class="col s12">
						<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=eventos&random=1&limit=1' ); ?>
		        	</div>
		        </div>
		       
	        </div>
        </section>

  <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>