<?php
/* Template Name: Search */
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php
        get_template_part('components/search', 'form');

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