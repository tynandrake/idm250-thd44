<?php

$arg = [
    'post_type' => 'thd_projects',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'order' => 'DESC'
];

$project_query = new WP_Query($arg);
?>

<div class="front-post">
    <?php
    while ($project_query->have_posts()) : $project_query->the_post();
        ?>
        <div class="front-inside-container" style="background-color:<?php the_field('teaser-color');?>">
            <div class="front-grid-wrapper">
                <div class="front-grid-column-text">
                    <div class="front-grid-wrapper-labels">
                        <div class="front-grid-column-2">
                            <p class="front-p-label"><?php the_field('single-tag-1') ?></p>
                        </div>
                        <div class="front-grid-column-2">
                            <p id="front-p-label-2" class="front-p-label"><?php the_field('single-tag-2') ?></p>
                        </div>
                    </div>
                    <h2 class="front-post-header"><a href="<?php the_permalink(); ?>"><?php the_field('project-title'); ?></a></h2>
                    <div class="front-post-button-wrapper"><a class="front-post-button" href="<?php the_permalink(); ?>">view work.</a></div>
                </div>
                <div class="front-grid-column-image-container">
                    <div class="front-grid-column-image"><?php the_post_thumbnail() ?></div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>