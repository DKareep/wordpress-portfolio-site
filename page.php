<?php get_header(); ?>

<div class="grid_12 omega clearfix">

    <?php if(have_posts()): while( have_posts()) : the_post() ; ?>

    <h1><?php the_title(); ?></h1>
    <h2><?php the_content(); ?></h2>
<?php endwhile; else : ?>

    <p>No post to show</p>

    <?php endif; ?>
    </div>


<?php get_template_part('content','testimonials'); ?>

<?php get_footer(); ?>