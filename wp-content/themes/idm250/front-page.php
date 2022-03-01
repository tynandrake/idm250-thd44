<?php get_header();

$arg = [
    'post_type' => 'thd-projects',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'order' => 'DESC'
];

$project_query = new WP_Query($arg);
?>

<?php while (have_posts()) : the_post(); ?>
    <div>
        <?php the_content(); ?>
    </div>
    <section class="project-list">
        <?php
            while ($project_query->have_posts()) : $project_query->the_post(); ?>
            <div class="project-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p><?php the_excerpt(); ?>
                </p>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();

            ?>
    </section>

    <?php endwhile; ?>

    <?php get_footer(); ?>