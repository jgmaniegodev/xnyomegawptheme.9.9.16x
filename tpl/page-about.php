<?php
/*
 * Template Name: About Page
 * Author: Jaynard G. Maniego
 */
?>
<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
				<div id="primary-about" class="content-area">
					<div id="content-about" class="site-content" role="main">
						<?php
							while( have_posts() ) : the_post(); ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php
								the_content();
						endwhile;
						?>
					</div>
                                        <div class="flf">
					<?php if ( is_dynamic_sidebar('testimonial_widget') ){
                                            dynamic_sidebar('testimonial_widget');
                                        }
                                        ?>
                                        </div>
				</div>
			</section>

<?php get_footer(); ?>
<?php	wp_footer(); ?>