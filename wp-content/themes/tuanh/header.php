<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
 
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
        <?php wp_head(); ?>        
</head>
 

<body <?php body_class(); ?> > 
    <div id="container">
        <header class="logo">
			<?php tuanh_header(); ?>
			<?php tuanh_menu( 'primary-menu' ); ?>
		</header>  
    

