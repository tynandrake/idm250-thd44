<?php get_header();

get_template_part('components/front', 'hero');
?>
<div>
    <?php the_content(); ?>
</div>
<?php
    get_template_part('components/front', 'project-teaser');

?>

<?php get_footer(); ?>