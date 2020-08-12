<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
    wp_enqueue_style( 'style' );
}
?>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper" style="width:100%; max-width:100%;">

			<!-- header -->
			<header class="header clear" role="banner" >

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pngwave.png" alt="Logo" class="logo-img" style="margin-left: 50px;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt="Logo" class="logo-img" style="margin-left: 50px; height:70px; width:70px;margin-bottom:1%; ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/twit.png" alt="Logo" class="logo-img" style="margin-left: 50px; height:70px; width:70px;margin-bottom:1%; ">
							<p style="position:absolute; top: 2%; right: 25%; color:white; font-size:20px;">0987-6543-2109</p>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
