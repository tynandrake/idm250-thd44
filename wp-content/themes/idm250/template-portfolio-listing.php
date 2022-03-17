<?php
/* Template Name: Portfolio Listing */
?>

<?php get_header(); ?>

<?php
// https://developer.wordpress.org/reference/classes/wp_query/
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$arg = [
    'post_type' => 'thd_projects',
    'post_status' => 'publish',
    'posts_per_page' => 9,
    'order' => 'DESC',
    'paged' => $paged

];
$project_query = new WP_Query($arg);

?>
<div>
    <?php
    get_template_part('components/search', 'large');
    ?>
    <div>
        <?php get_template_part('components/search', 'category-buttons'); ?>
    </div>
    <?php
        while ($project_query->have_posts()) : $project_query->the_post();
            get_template_part('components/search', 'project-teaser');
        endwhile;
    ?>
</div>

<?php get_footer(); ?>