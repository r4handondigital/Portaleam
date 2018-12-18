<div class="col s12 m12 l4 banners-laterais">
		         		<div class="row">
							<div class="col s12">
								<h4>// ÚLTIMAS</h4>


								<?php query_posts(array( 'post_type' => 'post','showposts' => '1', 'cat' => '-4,-5' )); ?>
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
		         		</div>
						<div class="row">
							<div class="col s12">
								<div class="fb-page" data-href="https://www.facebook.com/portaleam/" data-tabs="timeline" data-width="375" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/portaleam/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/portaleam/">Portal Eu Amo Macau</a></blockquote></div>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<img src="imgs/anigif.gif">
							</div>
						</div>
					</div>