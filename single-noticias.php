 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
        <section class="azul-noticias">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="center">NOTÍCIAS</h1>
					</div>
				</div>
        	</div>
        </section>
         

         <section class="interna">
         	<div class="container lista-posts">
         		<div class="row">
         	<div class="col s12 ">
         		<h2 class="titulos-noticias">
								<span><?php the_field('chapeu'); ?> | <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
								<?php echo strip_tags(get_the_title()); ?>
							</h2>
							
				<div class="conteudo">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							 <?php the_content(); ?> 



						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
				</div>
         	</div>

		         	
				</div>
			</div>
         </section>
       



 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>