<?php 
/* Template Name: Search Results */ 
get_header();
?>
<?php 
$args = [ 
    's' => $_GET['s'],
    'post_type' => $_GET['post_type'],
];

$search_query = new WP_Query($args)
?>

<?php 
    if($search_query->have_posts()) {
        while ($search_query->have_posts()) : $search_query->the_post();
        get_template_part('components/project-teaser');
        endwhile;
        wp_reset_postdata();
    } else {
        echo '<p>Sorry, no results available</p>';
    }

    ?>
<?php get_footer(); ?>