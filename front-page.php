<?php get_header(); ?>
<!-- page.php, content.php, single.php, archive.php, index.php, category.php, search.php, etc.. -->
<section id="main-content" class="main-content frontpage-main-content frontpage-bg">
    <div id="primary-frontpage" class="content-area">
        <div id="content-frontpage" class="site-content frontpage-content frontpage-wrapper" role="main">
            <?php
            while (have_posts()) : the_post();

                the_content();

            endwhile;
            ?>

        </div>
        <!--<div class="frontpage-widget-area">
        <?php if (dynamic_sidebar('Frontpage widgets area', 'nyomegadesigns')) : else : endif; ?>
        </div>-->
    </div>
    <div class="dark-fade-bottom">&nbsp;</div>
</section>
<div class="list-packages">
    <div class="wrapper">
        <div class="wide-ribbon"><img src="<?php echo get_template_directory_uri(); ?>/images/services/wide-ribbon-title.png" class="wide-ribbon-title"/></div>
        <div class="packages">
            <?php
            $package_page = get_page_by_title('Frontpage Packages');
            $packages_page_id = $package_page->ID;
            if (!empty($packages_page_id)) {
                $args = array(
                    'page_id' => $packages_page_id,
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'caller_get_posts' => 1
                );
                $my_query = null;
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) : $my_query->the_post();
                        the_content();
                    endwhile;
                }
                wp_reset_query();  // Restore global post data stomped by the_post().
            }
            ?>
        </div>
    </div>
</div>
<div class="the-past-clients">
    <div class="wrapper">
        <div style="position: absolute; left: 50%">
            <div style="text-align: center; position: relative; left: -50%; z-index: 99999; top: -20px"><img src="<?php echo get_template_directory_uri(); ?>/images/past_clients/title.jpg" width="187" height="39" /></div>
        </div>
        <div class="the-past-clients-container">

            <div>
                <?php
                $pclients_page = get_page_by_title('Frontpage Previous Clients');
                $pclients_page_id = $pclients_page->ID;
                if (!empty($pclients_page_id)) {
                    $args = array(
                        'page_id' => $pclients_page_id,
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'caller_get_posts' => 1
                    );
                    $pclients_query = null;
                    $pclients_query = new WP_Query($args);
                    if ($pclients_query->have_posts()) {
                        while ($pclients_query->have_posts()) : $pclients_query->the_post();
                            the_content();
                        endwhile;
                    }
                    wp_reset_query();  // Restore global post data stomped by the_post().
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
