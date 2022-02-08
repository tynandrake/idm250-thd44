<?php
/* Template Name: Front */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="">

        <h1 class=""><?php the_title(); ?></h1>

        <div class="">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>