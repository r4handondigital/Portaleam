 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
        <section class="grey darken-4">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="center">Pesquisa</h1>
					</div>
				</div>
        	</div>
        </section>
         

          <section class="interna">
         	<div class="container">
         		
         			<h4 class="pesq">Resultados da Busca: <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e
(''); echo $count . ' '; _e
('resultados para '); _e
('<strong>&#8220;'); echo $key; _e('&#8221;</strong>');
wp_reset_query(); ?>
</h4>

					
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="row">
					

						<div class="col s12 ">
						   	<a href="<?php the_permalink(); ?>">
							   <h2 class="titulos-noticias">
									<span><?php the_field('chapeu'); ?> | <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
									<?php echo strip_tags(get_the_title()); ?>
								</h2>
							</a>
						    <div class="conteudo-lista">
						    	<p class="center"><img src="<?php echo catch_that_image() ?>" class="responsive-img"></p>
						    	<div class="texto">
									<?php the_excerpt(); ?> 
								</div>

								<p><a href="<?php the_permalink(); ?>"	class="ver-mais">LER MAIS</a></p>
						    </div>



						</div>
						
				
				</div>

				<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>

				<div class="row">
					<div class="col s12">
						<div class="navigation">
						    <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
						</div>  
					</div>
				</div>

			
			</div>
         </section>



 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>