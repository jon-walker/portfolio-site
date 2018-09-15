<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NSPS99N');</script>
		<!-- End Google Tag Manager -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSPS99N"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header class="main-menu">
            <div class="hamburger__close nav_hide">
        		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><defs> <style>fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px;</style></defs><title>close</title><line class="cls-1" x1="3.76" y1="12.24" x2="12.24" y2="3.76"/><line class="cls-1" x1="12.24" y1="12.24" x2="3.76" y2="3.76"/></svg>
      		</div>
      		<div class="hamburger">
        		<svg id="Layer_2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>menu</title><line class="cls-1" x1="2" y1="3" x2="14" y2="3"/><line class="cls-1" x1="2" y1="8" x2="14" y2="8"/><line class="cls-1" x1="2" y1="13" x2="14" y2="13"/></svg>
      		</div>

			<?php html5blank_nav(); ?>
		</header>
