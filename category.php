<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
				<div id="primary-about" class="content-area">
                                    <div id="with-content-widgetv2">
                                        <div id="content-portfolio" class="site-content" role="main">
						<?php
							while( have_posts() ) : the_post(); ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php endwhile; ?>
                                                                
					</div>
					<div id="content-portfolio-gallery-category" class="site-content gallery-template" role="main">
						<?php
							while( have_posts() ) : the_post(); 
								
						
                                                       
								the_content();
						endwhile;
						?>
					</div>
                                    </div>
					<?php  if ( dynamic_sidebar('Portfolio Widget', 'nyomegadesigns') ) : else : endif; ?>
				</div>
			</section>

<?php get_footer(); ?>
<?php	wp_footer(); ?>