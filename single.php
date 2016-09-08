<?php get_header(); ?>
			<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
			<section id="main-content" class="main-content regular-content">
				
				<div id="primary-services" class="content-area">
					
                                    <div id="with-content-widgetv3">
					<div id="content-blog" class="site-content" role="main">
						<div style="height: 110px;">
							<h3 class="red-bg-text">Press Releases</h3>
						</div>
						
						
						
						<?php if ( have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( have_posts() ) : the_post(); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<hr size="1"/>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
	<div style="text-align: right">
<?php previous_posts_link( '« Newer Entries' ) ?> <?php next_posts_link( 'Older Entries »', 0 ); ?>
	</div>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
							
						
                                                                
					</div>
                                    </div>
				</div>
			</section>

<?php get_footer(); ?>