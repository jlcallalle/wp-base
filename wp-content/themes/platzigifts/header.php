<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <!-- <title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->

</head>
<body>

<!-- <h1>Hola WordPress</h1>
<h2><code>bloginfo()</code></h2>
<p>Nombre: <mark><?php bloginfo('name'); ?></mark></p>
<p>Descripción: <mark><?php bloginfo('description'); ?></mark></p>
<p>URL HOME: <mark><?php bloginfo('home'); ?></mark></p>
<p>URL hoja de estilos: <mark><?php bloginfo('stylesheet_url'); ?></mark></p>
<p>URL del Tema: <mark><?php bloginfo('template_url'); ?></mark></p>
<p>Idioma: <mark><?php bloginfo('language'); ?></mark></p>
<p>Juego de caracteres: <mark><?php bloginfo('charset'); ?></mark></p>
<img src="<?php bloginfo('template_url'); ?>/screenshot.png" alt="screenshot de mi tema"> -->

<header>
<div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="logo">
            </div>
            <div class="col-8">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class'    => 'menu-principal',
                            'container_class' => 'container-menu',
                        )
                    ); 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
    
