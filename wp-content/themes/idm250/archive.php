<?php get_header(); ?>

<h1><?php the_archive_title(); ?></h1>

<?php while (have_posts()) : the_post(); 

get_template_part('components/project-teaser');

endwhile; 
the_posts_pagination( [
    'mid_size' => 2,
    'prev_text' => 'Previous',
    'next_text' => 'Next'
]);
?>

<?php get_footer(); ?>