<?php
/*
 * Template Name: Portfolio Template
 * Author: Jaynard G. Maniego
 */
?>
<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
                            <div id="primary-portfolio" class="content-area">
                                <?php if ( dynamic_sidebar('Navigation Widget', 'nyomegadesigns') ) : else : endif; ?>
                                <div id="with-content-widget">
                                <div id="content-portfolio" class="site-content" role="main">
                                    <?php while( have_posts() ) : the_post(); ?>
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                    <?php the_content(); endwhile; ?>
                                </div>
                                <div id="content-portfolio-gallery">
                                    
                                </div>
				</div>
                                
                            </div>
			</section>

<?php get_footer(); ?>
<?php	wp_footer(); ?>