 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
        <section class="hiper-banner">
        	<div class="container">
        		<div class="row">
		        	<div class="col s12">
						<img src="<?php bloginfo('template_url'); ?>/imgs/bannerl.jpg">
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

						<?php query_posts(array( 'post_type' => 'post','showposts' => '5' )); ?>
						<?php get_category_by_slug('destaque-principal'); ?>
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
				</div>
			</div>
		</section>

		<section class="sessao-noticias">
			<div class="container">
				<div class="row">

				<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '-4,-5,-6' )); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="col s12 m6 l3">
						<a href="<?php the_permalink(); ?>" class="lkhover">
							<img src="<?php the_field('imagens_para_capa'); ?>" alt="" class="responsive-img " />
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
						<img src="<?php bloginfo('template_url'); ?>/imgs/super-banner.jpg">
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
									<img src="<?php the_field('imagens_para_capa'); ?>" alt="" class="responsive-img " />
									<h3 class="titulos-noticias">
									
										<?php echo strip_tags(get_the_title()); ?>
									</h3>
								
								<p class="center mini-mais"><button href="<?php the_permalink(); ?>" class="btn blue darken-4">CONTINUE LENDO</button></p>
								</a>
							</div>
						<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
						
					</div>
		        </div><!--row-->
		        <div class="row ">
						<div class="col s12">
							<p class="center ver-mais"><a href="<?php bloginfo('url'); ?>/nav/materias-entrevistas" class="waves-effect waves-light btn-large">MAIS ENTREVISTAS</a></p>
						</div>
					</div>
        	</div>
        </section>

	<section class="hiper-banner">
        	<div class="container">
        		<div class="row">
		        	<div class="col s12">
						<img src="<?php bloginfo('template_url'); ?>/imgs/super-banner.jpg">
		        	</div>
		        </div>
		       
	        </div>
        </section>


         <section class="sessao-eventos">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h2 class="center">EVENTOS</h2>
					</div>
				</div>
				 <div class="row">
					<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '5' )); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="col s12 m6 l3">
								<a href="<?php the_permalink(); ?>" class="lkhover">
									<img src="<?php the_field('imagens_para_capa'); ?>" alt="" class="responsive-img " />
									<h3 class="titulos-noticias">
									
										<?php echo strip_tags(get_the_title()); ?>
									</h3>
								
								<p class="center mini-mais"><button href="<?php the_permalink(); ?>" class="btn blue darken-4">CONTINUE LENDO</button></p>
								</a>
							</div>
						<?php endwhile; endif; ?> 
	         		<?php wp_reset_query(); ?>
		        </div><!--row-->
		        <div class="row ">
						<div class="col s12">
							<p class="center ver-mais"><a href="<?php bloginfo('url'); ?>/nav/eventos" class="waves-effect waves-light btn-large">MAIS EVENTOS</a></p>
						</div>
					</div>
        	</div>
        </section>

        	<section class="hiper-banner">
        	<div class="container">
        		<div class="row">
		        	<div class="col s12">
						<img src="<?php bloginfo('template_url'); ?>/imgs/super-banner.jpg">
		        	</div>
		        </div>
		       
	        </div>
        </section>


  <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>