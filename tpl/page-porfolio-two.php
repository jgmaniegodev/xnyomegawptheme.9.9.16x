<?php
/*
 * Template Name: Portfolio v.2 Page
 * Author: Jaynard G. Maniego
 */
?>
<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
				<div id="primary-about" class="content-area">
                                    <div id="with-content-widgetv2">
					<div id="content-portfolio" class="site-content" role="main">
						<?php
							while( have_posts() ) : the_post(); ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php
								the_content();
						endwhile;
						?>
                                                                
					</div>
                                        <div id="content-portfolio-gallery" class="gallery-template">
                                    
                                        </div>
                                    </div>
					<?php  if ( dynamic_sidebar('Portfolio Widget', 'nyomegadesigns') ) : else : endif; ?>
				</div>
			</section>

<?php get_footer(); ?>
<?php	wp_footer(); ?>