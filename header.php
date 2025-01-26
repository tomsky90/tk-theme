<!doctype html>
<html lang="EN">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TK Websites</title>
	<meta name="description"
		content="Freelance web developer and designer based in Wirral, UK, creating custom, responsive websites tailored to your business needs">
	<meta name="keywords"
		content="Freelance web developer, web designer Wirral, responsive web design, custom websites UK, WordPress developer, UX/UI design Wirral, professional web design">

	<meta property="og:title" content="TK Websites  " />
	<meta property="og:description"
		content="Freelance web developer and designer based in Wirral, UK, creating custom, responsive websites tailored to your business needs" />

	<meta property="og:url" content="https://wirrallandscaping.tk-webdev.com/" />
	<meta property="og:type" content="website" />



	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
		media="print" onload="this.onload=null;this.removeAttribute('media');" fetchpriority="high">

	<noscript>
		<link rel="stylesheet"
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap">
	</noscript>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php get_template_part('template-parts/header/menu'); ?>
	<div id="page" class="site">