<!DOCTYPE html>
<html>
<head>

    <title>
        <?php
        wp_title('-',true, right);

        bloginfo('name');
         ?>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <?php wp_head() ;?>
</head>
<body>
<div class="container clearfix">
    <header>
        <div class="grid_12 omega none">
            <hgroup>
                <h1 style="text-transform: none;"><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name');?></a></h1>

                <h2><?php bloginfo('description'); ?></h2>
            </hgroup>
        </div>
        <div class="grid_12 omega">
            <nav>

                <?php
                $args = array(
                    'menu' => 'main-menu',
                    'echo' => false

                );
               echo strip_tags(wp_nav_menu($args),'<a>'); ?>
            </nav>
        </div>
    </header>


