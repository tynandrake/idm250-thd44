<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- 'folder/firstWord', 'secondWord' -->
    <?php get_template_part('components/hero', 'single'); ?>
    
    <div>
        <?php the_content(); ?>
    </div>


<?php endwhile; ?>

<?php get_footer(); ?>