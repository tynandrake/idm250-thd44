<?php get_header(); ?>

<?php
    $args = 
    [
        's' => $_GET['s'],
        'post_type' => $_GET['post_type'],
    ];
    $search_query = new WP_Query($args)
?>

<?php get_template_part('components/search', 'large'); ?>

<div>
    <?php get_template_part('components/search', 'category-buttons'); ?>
</div>

<?php
    if ($search_query->have_posts()) {
        while($search_query->have_posts()) : $search_query->the_post();

        get_template_part('components/search', 'project-teaser');

        endwhile;
        wp_reset_postdata();
    } else {
        echo '<p>Sorry, no results available</p>';
    }
?>

<?php get_footer(); ?>