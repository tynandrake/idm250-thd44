<?php get_header(); ?>

<h1><?php the_archive_title(); ?></h1>

<?php while (have_posts()) : the_post(); 

get_template_part('components/project-teaser');

endwhile; ?>

<?php get_footer(); ?>