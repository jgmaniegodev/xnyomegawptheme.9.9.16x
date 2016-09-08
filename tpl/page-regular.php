<?php

/*
 * Template Name: Regular Page
 * Author: Jaynard G. Maniego
 */
?>
<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content">
				<div id="primary" class="content-area">
					<div id="content" class="site-content" role="main">
						<?php
							while( have_posts() ) : the_post(); ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php
								the_content();
						endwhile;
						?>
					</div>
				</div>
			</section>

<?php get_footer(); ?>
<?php	wp_footer(); ?>