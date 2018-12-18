 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
        <section class="grey darken-4">
        	<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="center"><?php echo strip_tags(get_the_title()); ?></h1>
					</div>
				</div>
        	</div>
        </section>
         

         <section class="interna">
         	<div class="container">
         		<div class="row">
         	<div class="col s12 m8">
         		
							
				<div class="conteudo">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							 <?php the_content(); ?> 

						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
				</div>
         	</div>

		         	<?php get_sidebar(); ?>

				</div>
			</div>
         </section>
       



 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>