<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="">
        <div class="">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>