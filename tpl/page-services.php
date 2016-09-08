<?php
/*
 * Template Name: Services Page
 * Author: Jaynard G. Maniego
 */
?>
<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
				<div id="primary-services" class="content-area">
                                    <div id="with-content-widgetv3">
					<div id="content-services" class="site-content" role="main">
						<?php
							while( have_posts() ) : the_post(); ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php
								the_content();
						endwhile;
						?>
                                                                
					</div>
                                    </div>
                                    <div class="flr widget-services">
					<?php if ( dynamic_sidebar('Services Widget', 'nyomegadesigns') ) : else : endif; ?>
                                    </div>
				</div>
			</section>

<?php get_footer(); ?>
<?php	wp_footer(); ?>