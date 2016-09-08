<?php
/*
 * Template Name: Portfolio Gallery Template
 */
?>
<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
                            <div id="primary-portfolio" class="content-area">
                               <?php remove_filter( 'the_content', 'wpautop' ); ?>
                                <div id="content-portfolio" class="site-content" role="main">
                                    <?php while( have_posts() ) : the_post(); ?>    
                                    <?php the_content(); endwhile; ?>
                                </div>
                                <div id="content-portfolio-gallery">
                                    
                                </div>
                            </div>
                            
			</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>