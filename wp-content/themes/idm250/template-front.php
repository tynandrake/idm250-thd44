<?php
/* Template Name: Front */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div>

        <h1><?php the_title(); ?></h1>

        <?php the_field('post_title');?>

        <div>
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>