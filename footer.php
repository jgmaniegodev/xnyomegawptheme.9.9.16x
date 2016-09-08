<div class="social-feeds">
    <div class="wrapper">
    <div class="cols-3"><!-- Facebook Page -->
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnyomegadesigns&tabs=timeline&width=300&height=420&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="420" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
    <div class="cols-3"><!-- Twitter Feeds -->
        <a class="twitter-timeline" data-height="420" href="https://twitter.com/nyomegadesigns">Tweets by nyomegadesigns</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="cols-3 recent-press"><!-- Recent Posts -->
        <?php if (is_dynamic_sidebar('recent-news')): ?>
            <?php dynamic_sidebar('recent-news'); ?>
        <?php endif; ?>
    </div>
    </div>
</div>
</div>			
<footer id="colophon" class="site-footer" role="contentinfo">
    <div id="footer-area" class="footer-area">
        <div id="footer-menu" class="footer-menu">
            <?php
            wp_nav_menu(array(
                "depth" => 1,
                'theme_location' => 'footer_menu',
                'menu_class' => 'footer-menu',
                "walker" => new MyExtendedMenuWalker(),
                "ex_separator" => "<li class='separator'>|</li>"), 'nyomegadesigns');
            ?>
        </div>
        <div class="site-info">
<?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?>. All Rights Reserved. <a href="<?php bloginfo('wpurl'); ?>/disclaimer">Disclaimer</a>
        </div><!-- .site-info -->
    </div><!-- #footer-area -->
</footer><!-- #colophon -->
</body>
</html>
<?php wp_footer(); ?>