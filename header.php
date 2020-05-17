<!DOCTYPE html>
<html>
<head>
	<title></title>
	4
</head>
<body <?php body_class('test');?>>

<header>
    <div class="container d-flex align-items-center justify-content-between">
        <img src="<?php bloginfo('template_directory');?>/images/header_logo.png" class="image-fluid logo">

        <?php
        wp_nav_menu(
                array(
                        'theme_location' => 'top-menu',
                )
        )
        ?>
    </div>

</header>