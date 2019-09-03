<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/iestyle.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie6style.css" />
<script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pngfix.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="lights"></div>
<!--This controls pages navigation bar-->
<div id="header">
    <div id="pages">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php $logo = (get_option('evid_logo') <> '') ? get_option('evid_logo') : get_template_directory_uri().'/images/logo-'. esc_attr(get_option('evid_color_scheme')).'.png'; ?>
			<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo"/></a>

		<?php $menuClass = 'nav superfish';
		$primaryNav = '';

		if (function_exists('wp_nav_menu')) {
			$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
		};
		if ($primaryNav == '') { ?>
			<ul class="<?php echo esc_attr( $menuClass ); ?>">
				<?php if (get_option('evid_home_link') == 'on') { ?>
					<li class="page_item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="title" title="home again woohoo"><?php esc_html_e('Home','eVid') ?></a></li>
				<?php }; ?>

				<?php if (get_option('evid_swap_navbar') == 'false') {
					show_page_menu($menuClass,false,false);
				} else {
					show_categories_menu($menuClass,false);
				}; ?>
			</ul> <!-- end ul.nav -->
		<?php }
		else echo($primaryNav); ?>

        <div class="search_bg">
            <div id="search">
                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px">
                    <input type="text"  name="s" value="<?php echo esc_attr( get_search_query() ); ?>"/>
                    <input type="image" class="input" src="<?php echo get_template_directory_uri(); ?>/images/search-<?php echo esc_attr(get_option('evid_color_scheme')); ?>.gif" value="submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End pages navigation-->