<?php
/* Template Name: Single */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
        <?php
            $terms = get_the_terms(get_the_ID(), 'thd-project-categories');
            if ($terms) {
                foreach ($terms as $term) {
                    echo $term->name . ',';
                }
            }
        ?>

        <div>
            <?php the_content(); ?>
        </div>

<?php endwhile; ?>

<?php get_footer(); ?>