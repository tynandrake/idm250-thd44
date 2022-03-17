<?php get_header(); ?>

    <h2 class="archive-title"><?php the_archive_title(); ?></h2>
    <div>
        <?php get_template_part('components/search', 'category-buttons'); ?>
    </div>

    <div>
        <?php while (have_posts()) : the_post();

            get_template_part('components/search', 'project-teaser');

        endwhile; 
        ?>
    </div>

<?php get_footer(); ?>