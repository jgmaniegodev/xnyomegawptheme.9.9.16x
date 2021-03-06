<!DOCTYPE html><!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]--><!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]--><!--[if !(IE 7) | !(IE 8) ]><!--><html <?php language_attributes(); ?>>    <!--<![endif]-->    <head>        <meta name="robots" content="index, follow">        <meta name="viewport" content="width=device-width">        <meta charset="<?php bloginfo('charset'); ?>">        <title><?php wp_title('|', true, 'right'); ?></title>        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />        <link rel="profile" href="http://gmpg.org/xfn/11">        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">        <!--[if lt IE 9]>        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>        <![endif]-->        <?php wp_head(); ?>        <?php if (!is_front_page()): ?>            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slidebackground.js"></script>        <?php endif; ?>    </head>    <body <?php body_class($class); ?>>        <div id="page">            <header id="site-header" class="site-header">                <div class="wrapper">                    <div id="header-contact-container">                        <i class="fa fa-mobile" aria-hidden="true"></i> <strong>516-509-3825</strong>                         <i class="fa fa-skype" aria-hidden="true"></i> <a href="skype:nyomegadesigns" class="link-btn">Call</a> <a href="skype:nyomegadesigns?chat" class="link-btn">Chat</a>                    </div>                    <div id="site-logo" class="site-logo fll">                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/assets/nyomegadesigns_logo_tr.png" alt="NY Omega Designs" width="245" height="150" /></a>                    </div>                    <div class="translate-box"><?php echo do_shortcode('[google-translator]'); ?></div>                    <div id="group-float" class="group-float fll ">                        <div id="social-icons-box">                            <div id="socialmedia">                                <a href="https://www.facebook.com/nyomegadesigns" target="_blank" class="social-icon fbcolored"></a>                                <a href="https://twitter.com/nyomegadesigns" target="_blank" class="social-icon twcolored"></a>                                <a href="http://www.linkedin.com/pub/pete-tsatsaronis/84/765/444" target="_blank" class="social-icon licolored"></a>                                <a href="https://www.youtube.com/channel/UCA-T2uRKTlGcMyEyWgvgztQ/feed?view_as=public" target="_blank" class="social-icon ytcolored"></a>                            </div>                        </div>                    </div>            </header>            <nav id="navigation">                <div class="wrapper">                    <?php                    wp_nav_menu(array(                        'theme_location' => 'Primary',                        'menu' => 'main menu',                    ));                    ?>                </div>            </nav>