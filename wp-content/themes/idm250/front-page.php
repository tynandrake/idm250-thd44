<?php get_header();
?>

<div>
    <?php the_content(); ?>
</div>
<?php
    get_template_part('components/front', 'project-teaser');


// endwhile;
// the_posts_pagination(
//     [
//         'mid_size' => 2,
//         'prev_text' => 'Previous',
//         'next_text' => 'Next'
//     ]
// );
?>

<?php get_footer(); ?>